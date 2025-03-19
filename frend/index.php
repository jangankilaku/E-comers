<?php
include("config/heart.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Website</title>
    <link rel="stylesheet" href="asset/bootstrap/bootstrap.css">
    <style>
        .hero-section {
            height: 80vh;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('asset/img/baner.png');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Travel Explorer</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    </form>
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="destination.php">Destinations</a></li>
                    <li class="nav-item"><a class="nav-link" href="promotion.php">Promotion</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="public/">Sign in</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero-section d-flex align-items-center">
        <div class="container text-center text-white">
            <h1 class="display-4">Discover Amazing Places</h1>
            <p class="lead" id="typed-text"></p>
            <a href="#" class="btn btn-primary btn-lg">Start Exploring</a>
        </div>
    </header>

    <section class="destinations py-5">
        <div class="container">
            <h2 class="text-center mb-5">Popular Destinations</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="asset/img/destination1.jpg" class="card-img-top" alt="Destination 1">
                        <div class="card-body">
                            <h5 class="card-title">Bali, Indonesia</h5>
                            <p class="card-text">Experience the magical island of gods with beautiful beaches and rich culture.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="asset/img/destination2.jpg" class="card-img-top" alt="Destination 2">
                        <div class="card-body">
                            <h5 class="card-title">Raja Ampat, Papua</h5>
                            <p class="card-text">Discover the underwater paradise with stunning marine life and crystal clear waters.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="asset/img/destination3.jpg" class="card-img-top" alt="Destination 3">
                        <div class="card-body">
                            <h5 class="card-title">Borobudur, Yogyakarta</h5>
                            <p class="card-text">Visit the largest Buddhist temple in the world and explore ancient history.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>&copy; 2023 Travel Explorer. All rights reserved.</p>
        </div>
    </footer>

    <script src="asset/bootstrap.bundle.min.js"></script>
    <script src="asset/bootstrapjs/bootstrap.js"></script>
    <script>
        const text = "Explore the world's most beautiful destinations with us";
        const typedText = document.getElementById('typed-text');
        let index = 0;

        function typeWriter() {
            if (index < text.length) {
                typedText.textContent += text.charAt(index);
                index++;
                setTimeout(typeWriter, 50);
            }
        }
        window.onload = typeWriter;
    </script>
</body>

</html>