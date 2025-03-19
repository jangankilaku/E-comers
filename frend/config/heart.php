<?php
session_start();
class Database
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "db_wisata";
    private $conn;

    // Constructor - establish connection
    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    // Dynamic Insert
    public function insert($table, $data)
    {
        $columns = implode(',', array_keys($data));
        $values = implode(',', array_map(function ($item) {
            return "'" . $this->conn->real_escape_string($item) . "'";
        }, array_values($data)));

        $sql = "INSERT INTO $table ($columns) VALUES ($values)";

        return $this->conn->query($sql);
    }

    // Dynamic Select
    public function select($table, $conditions = [], $columns = "*")
    {
        $sql = "SELECT $columns FROM $table";

        if (!empty($conditions)) {
            $sql .= " WHERE ";
            $sql .= implode(' AND ', array_map(function ($key, $value) {
                return "$key = '" . $this->conn->real_escape_string($value) . "'";
            }, array_keys($conditions), array_values($conditions)));
        }

        $result = $this->conn->query($sql);
        return $result ? $result->fetch_all(MYSQLI_ASSOC) : false;
    }

    //Dynamic Select All
    public function select_all($table)
    {
        $sql = $this->conn->query("SELECT * FROM $table");
        return $sql ? $sql->fetch_all() : false;
    }

    //Dynamic targeted selection
    public function Tselection($table, $selection)
    {
        $condition = implode(" AND ", array_map(function($key) use($selection) {
            return "$key = '{$selection[$key]}'";
        }, array_keys($selection)));
        $sql = $this->conn->query(
            "SELECT * FROM $table WHERE $condition" 
        );
        return $sql ? $sql->fetch_assoc() : $this->conn->error;
    }

    // Dynamic Update
    public function update($table, $data, $conditions)
    {
        $sql = "UPDATE $table SET ";
        $sql .= implode(',', array_map(function ($key, $value) {
            return "$key = '" . $this->conn->real_escape_string($value) . "'";
        }, array_keys($data), array_values($data)));

        $sql .= " WHERE ";
        $sql .= implode(' AND ', array_map(function ($key, $value) {
            return "$key = '" . $this->conn->real_escape_string($value) . "'";
        }, array_keys($conditions), array_values($conditions)));

        return $this->conn->query($sql);
    }

    // Dynamic Delete
    public function delete($table, $conditions)
    {
        $sql = "DELETE FROM $table WHERE ";
        $sql .= implode(' AND ', array_map(function ($key, $value) {
            return "$key = '" . $this->conn->real_escape_string($value) . "'";
        }, array_keys($conditions), array_values($conditions)));

        return $this->conn->query($sql);
    }

    // Custom Query
    public function query($sql)
    {
        $result = $this->conn->query($sql);
        return $result ? $result->fetch_all(MYSQLI_ASSOC) : false;
    }

    // Close Connection
    public function close()
    {
        $this->conn->close();
    }
}
class FileUploader
{
    private $allowedTypes;
    private $maxSize;
    private $uploadPath;

    public function __construct($allowedTypes = [], $maxSize = 5242880, $uploadPath = 'uploads/')
    {
        $this->allowedTypes = $allowedTypes;
        $this->maxSize = $maxSize;
        $this->uploadPath = $uploadPath;

        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }
    }

    public function upload($file)
    {
        if (!isset($file['tmp_name']) || empty($file['tmp_name'])) {
            return ['status' => false, 'message' => 'No file uploaded'];
        }

        if ($file['size'] > $this->maxSize) {
            return ['status' => false, 'message' => 'File size exceeds limit'];
        }

        $fileType = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        if (!empty($this->allowedTypes) && !in_array($fileType, $this->allowedTypes)) {
            return ['status' => false, 'message' => 'File type not allowed'];
        }

        $newFileName = uniqid() . '.' . $fileType;
        $destination = $this->uploadPath . $newFileName;

        if (move_uploaded_file($file['tmp_name'], $destination)) {
            return [
                'status' => true,
                'message' => 'File uploaded successfully',
                'filename' => $newFileName,
                'path' => $destination
            ];
        }

        return ['status' => false, 'message' => 'Upload failed'];
    }
}