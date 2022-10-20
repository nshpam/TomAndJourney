<?php
include('header.php');
?>
<!-- /.navbar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <div class="content-header">

    </div> -->
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="login-box-msg-group col-xs-12 col-md-12 col-lg-12">
                <h1 class=" login-box-msg text-dark text-1">SIGN IN</h1>
                <p class="login-box-msg text-dark text-2">Sign in to your account</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-2 col-lg-4 col-2"></div>
            <div class="col-md-6 col-sm-8 col-lg-4 col-8" id="form-frame">
                <form method="POST" id="login_form">
                    <div class="row">
                        <div class="col-md-21 col-sm-2 col-lg-1 col-1"></div>
                        <div class="input-group input-group-1 col-md-8 col-sm-8 col-lg-10 col-10">

                            <div id="username-logo">
                                <i class="fas fa-user"></i>
                            </div>

                            <input type="text" class="form-control" placeholder="Username" id="username">

                        </div>
                        <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                        <div class="input-group input-group-2 col-md-8 col-sm-8 col-lg-10 col-10">


                            <div id="password-logo">
                                <i class="fas fa-lock"></i>
                            </div>

                            <input type="password" class="form-control" placeholder="Password" id="password">
                        </div>
                        <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                    </div>

                    <p class="text-center text-danger" id='warning_text'></p>

                    <div class="row" id="href-text-1">
                        <!-- <div class="col-md-2 "></div> -->
                        <a class=" col-xs-6 col-md-6 col-sm-6 col-lg-6 col-12 d-flex justify-content-center " href="#" id="top-buffer-1">Forgot password?</a>

                        <div class=" col-xs-6 col-md-6 col-sm-6 col-lg-6 col-12 d-flex justify-content-center" id="remember-group">
                            <input type="checkbox" id="Remember">
                            <label for="Remember">Remember me</label>
                        </div>
                        <!-- <div class=" col-md-2"></div> -->
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-1 col-sm-2 col-1"></div>
                        <button type="button" class=" col-md-10 col-sm-8 col-10 btn btn-default btn-block " id="login-button" onclick="Login()">LOGIN</button>
                        <div class="col-md-1 col-sm-2 col-1"></div>
                    </div>

                </form>
            </div>
            <div class="col-md-3 col-sm-2 col-lg-4 col-2"></div>
        </div>
        <div class="row justify-content-center" id="outside-text">
            <p>Don't have an account?</p>
            <a href="/tom-and-journey/register.php" id="resgister-text">Sign Up Now</a>
        </div>



        <!-- /.social-auth-links -->



    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('footer.php');
?>

<script>
    home = document.getElementById("login-link");
    home.classList.add("active");
</script>

<style>
    /* responsive */
    /* Extra small devices (phones, 600px and down) */
    @media only screen and (max-width: 600px) {

        /* nav bar */
        #custom-nav-bar {
            height: 10%;
        }

        #ul-custom-nav-bar {
            flex-wrap: wrap;
            flex-direction: row !important;
            text-align: center;
            align-items: center;
            justify-content: center;
        }

        .navbar-expand-md>.container,
        .navbar-expand-md>.container-fluid,
        .navbar-expand-md>.container-lg,
        .navbar-expand-md>.container-md,
        .navbar-expand-md>.container-sm,
        .navbar-expand-md>.container-xl {
            text-align: center;
        }

        .navbar .container,
        .navbar .container-fluid,
        .navbar .container-lg,
        .navbar .container-md,
        .navbar .container-sm,
        .navbar .container-xl {
            display: contents;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }

        /* login page */

        /* .content-header {
            padding: 20px 0px;
        }

        .text-1 {
            font-size: 2.0rem;
        }

        #form-frame {
            margin: 0px 10%;
        } */
    }

    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (min-width: 600px) {

        #ul-custom-nav-bar {
            flex-direction: row !important;
        }

        /* login page */

        /* .content-header {
            padding: 0px;
        }

        .text-1 {
            font-size: 2.0rem;
        }

        #form-frame {
            margin: 0px 10%;
        } */

    }

    /* Medium devices (landscape tablets, 768px and up) */
    @media only screen and (min-width: 768px) {

        /* login page */
        /* .blank-buffer {
            width: auto;
        }

        #form-frame {
            margin: 0px 20%;
            padding: 5px 10% 10px;
        }

        .login-box-msg-group {
            padding-top: 10%;
            padding-bottom: 2%;
        } */

    }

    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) {

        /* login page */
        /* .blank-buffer {
            width: auto;
        }

        #form-frame {
            margin: 0px 25%;
            padding: 5px 10% 10px;
        }

        .login-box-msg-group {
            padding-top: 5%;
            padding-bottom: 2%;
        } */
    }

    /* Extra large devices (large laptops and desktops, 1200px and up) */
    @media only screen and (min-width: 1200px) {

        /* login page */
        /* .blank-buffer {
            width: auto;
        }

        #form-frame {
            margin: 0px 30%;
            padding: 5px 10% 10px;
        }

        .login-box-msg-group {
            padding-top: 5%;
            padding-bottom: 2%;
        } */
    }

    /* Extra large devices (large laptops and desktops, 1200px and up) */
    @media only screen and (min-width: 2560px) {

        /* login page */
        /* .blank-buffer {
            width: auto;
        }

        #form-frame {
            margin: 0px 40%;
            padding: 5px 5% 10px;
        }

        .login-box-msg-group {
            padding-top: 5%;
            padding-bottom: 2%;
        } */
    }
</style>