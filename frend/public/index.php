<?php
include("../config/heart.php");
$db = new Database();
if($_SERVER['REQUEST_METHOD']=='POST' || isset($_POST['login'])){
    $sql = $db->Tselection('admin',[
        'username' => $_POST['username'],
    ]);
    if($sql){
        if(md5($_POST['password']) == $sql['password'] ){
            $_SESSION['idAdmin'] = $sql['idAdmin'];
            header('location: dashboard.php');
        }
    }else{
        header('location: ');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Login</title>
    <link href="../asset/bootstrap/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('../asset/img/image.png');
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
        .login-container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="login-container">
                    <h2 class="text-center mb-4">Welcome to Tourism</h2>
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>
                        <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../asset/bootstrapjs/bootstrap.bundle.min.js"></script>
</body>
</html>