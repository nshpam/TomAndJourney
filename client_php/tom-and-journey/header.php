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

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body class="hold-transition layout-top-nav layout-footer-fixed layout-navbar-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class=" main-header navbar navbar-expand-md  " id="custom-nav-bar">
            <div class="container">
                <span class="align-middle text-light">Tom & Journey</span>

                <!-- Left navbar links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/tom-and-journey/home.php" id="home-link" onclick="Home_Link()" ara>Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/tom-and-journey/register.php" class="nav-link" id="trip-planner-link">Trip Planner</a>
                    </li>
                    <li class="nav-item">
                        <a href="/tom-and-journey/index.php" class="nav-link" id="login-link">Login</a>
                    </li>
                </ul>
            </div>
        </nav>