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
            <div class="col-md-9 col-lg-10 ms-auto">
                <div class="container-fluid mt-4">
                    <h2>Dashboard</h2>
                    <div class="row mt-4">
                        <div class="col-md-4">
                            <div class="card bg-primary text-white">
                                <div class="card-body">
                                    <h5 class="card-title">Total Packages</h5>
                                    <p class="card-text display-4"><?php echo $total_packages; ?></p>
                                    <i class="bi bi-box position-absolute top-0 end-0 p-3 opacity-50" style="font-size: 2rem;"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-success text-white">
                                <div class="card-body">
                                    <h5 class="card-title">Total Promo</h5>
                                    <p class="card-text display-4"><?php echo $total_users ?? 0; ?></p>
                                    <i class="bi bi-people position-absolute top-0 end-0 p-3 opacity-50" style="font-size: 2rem;"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-info text-white">
                                <div class="card-body">
                                    <h5 class="card-title">Total Bookings</h5>
                                    <p class="card-text display-4"><?php echo $total_bookings ?? 0; ?></p>
                                    <i class="bi bi-calendar position-absolute top-0 end-0 p-3 opacity-50" style="font-size: 2rem;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../asset/bootstrapjs/bootstrap.bundle.min.js"></script>
    <script src="../asset/js/main.js"></script>
</body>
</html>