<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Top Navigation</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body class="hold-transition layout-top-nav layout-footer-fixed layout-navbar-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class=" main-header navbar navbar-expand-md  " id="custom-nav-bar">
            <div class="container d-flex align-items-center justify-content-center">
                <div class="brand-logo">
                    <label class="text-light brand-logo">Tom & Journey</label>
                </div>


                <!-- Left navbar links -->
                <ul class="navbar-nav ml-auto" id="ul-custom-nav-bar">
                    <li class="nav-item">
                        <a class="nav-link" href="/tom-and-journey/home.php" id="home-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/tom-and-journey/tripmap.php" class="nav-link" id="trip-planner-link">Trip Planner</a>
                    </li>

                    <?php if (isset($_SESSION['auth'])) : ?>
                        <div>
                            <li class="nav-item">
                                <a href="/tom-and-journey/Profile.php" class="nav-link" id="login-link">Profile</a>
                            </li>
                        </div>
                    <?php else : ?>
                        <li class="nav-item">
                            <a href="/tom-and-journey/index.php" class="nav-link" id="login-link">Login</a>
                        </li>

                    <?php endif ?>
                </ul>
            </div>
        </nav>

        <style>
            .brand-logo label {
                margin-bottom: 0px !important;
            }
        </style>