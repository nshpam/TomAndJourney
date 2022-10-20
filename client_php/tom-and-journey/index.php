<?php
include('header.php');
?>
<!-- /.navbar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">

    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">


        <div class="login-box-msg-group">
            <h1 class=" login-box-msg text-dark text-1">SIGN IN</h1>
            <p class="login-box-msg text-dark text-2">Sign in to your account</p>
        </div>

        <div id="form-frame">
            <form method="POST" id="login_form">
                <div class="input-group mb-3 input-group-1">

                    <div id="username-logo">
                        <i class="fas fa-user"></i>
                    </div>

                    <input type="text" class="form-control" placeholder="Username" id="username">

                </div>
                <div class="input-group mb-3 input-group-2">


                    <div id="password-logo">
                        <i class="fas fa-lock"></i>
                    </div>

                    <input type="password" class="form-control" placeholder="Password" id="password">
                </div>

                <p class="text-center text-danger" id='warning_text'></p>

                <div class="row" id="href-text-1">
                    <a href="#" id="top-buffer-1">Forgot password?</a>
                    <div class="blank-buffer"></div>
                    <div id="remember-group">
                        <input type="checkbox" id="Remember">
                        <label for="Remember">Remember me</label>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-default btn-block " id="login-button" onclick="Login()">LOGIN</button>
                </div>

            </form>



        </div>
        <div class="row justify-content-center" id="outside-text">
            <p>Don't have an account?</p>
            <a href="#" id="resgister-text">Sign Up Now</a>
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
            flex-direction: row !important;
        }

        /* login page */

        .content-header {
            padding: 0px;
        }

        .text-1 {
            font-size: 2.0rem;
        }

        #form-frame {
            margin: 0px 10%;
        }
    }

    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (min-width: 600px) {

        /* nav bar */
        /* #custom-nav-bar {
            height: 10%;
        } */

        #ul-custom-nav-bar {
            flex-direction: row !important;
        }

        /* login page */

        .content-header {
            padding: 0px;
        }

        .text-1 {
            font-size: 2.0rem;
        }

        #form-frame {
            margin: 0px 10%;
        }

    }

    /* Medium devices (landscape tablets, 768px and up) */
    @media only screen and (min-width: 768px) {

        /* login page */
        .blank-buffer {
            width: auto;
        }

        #form-frame {
            margin: 0px 30%;
            padding: 5px 10% 10px;
        }

        .login-box-msg-group {
            padding-top: 10%;
            padding-bottom: 2%;
        }
    }

    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) {
        .blank-buffer {
            width: auto;
        }

        #form-frame {

            margin: 0px 30%;
            padding: 5px 10% 10px;
        }

        .login-box-msg-group {
            padding-top: 5%;
            padding-bottom: 2%;
        }
    }

    /* Extra large devices (large laptops and desktops, 1200px and up) */
    @media only screen and (min-width: 1200px) {}

    /* responsive */
    /* @media screen and (max-width: 789px) {
        
    } */
</style>