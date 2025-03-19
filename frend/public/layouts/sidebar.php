<style>
        .sidebar {
            height: 100vh;
            background-color: #343a40;
        }
        .sidebar-link {
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
        }
        .sidebar-link:hover {
            background-color: #495057;
            color: #fff;
        }
        .dropdown-item{
            cursor: pointer;
        }
    </style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                                        <i class="bi bi-person-circle"></i> Admin
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                        <li><a class="dropdown-item" onclick="logout()" >Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
<div class="col-md-3 col-lg-2 px-0 bg-dark position-fixed sidebar">
                <div class="text-white p-3">
                    <h4>Travel Admin</h4>
                </div>
                <nav class="mt-2">
                    <a href="dashboard.php" class="sidebar-link active">
                        <i class="bi bi-speedometer2"></i> Dashboard
                    </a>
                    <a href="packages.php" class="sidebar-link">
                        <i class="bi bi-box"></i> Packages
                    </a>
                    <a href="bookings.php" class="sidebar-link">
                        <i class="bi bi-calendar"></i> Bookings
                    </a>
                    <a href="users.php" class="sidebar-link">
                        <i class="bi bi-people"></i> Users
                    </a>
                </nav>
            </div>
            