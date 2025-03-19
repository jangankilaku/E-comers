<?php
Include("../config/heart.php");
$db = new Database;
if (!isset($_SESSION['idAdmin'])) {
     header('location: index.php ');
     exit();
    }
if(isset($_POST['logout'])){
    session_destroy();
    header('location: index.php');
}
$total_packages = count($db->select_all('produk'));
$total_promo = count($db->select_all('pemesanan'));
$total_bookings = count($db->select_all('promo'));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Dashboard</title>
    <link rel="stylesheet" href="../asset/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php include('layouts/sidebar.php')?>
            
        </div>
    </div>

    <script src="../asset/bootstrapjs/bootstrap.bundle.min.js"></script>
    <script src="../asset/js/main.js"></script>
</body>
</html>