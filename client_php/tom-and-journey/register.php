<?php include('header.php');
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
            <h1 class=" login-box-msg text-dark text-1">Register</h1>
            <p class="login-box-msg text-dark text-2">Register your account</p>
        </div>

        <div id="form-frame">
            <form method="POST" id="register_form">

                <!-- username field -->
                <div id="username-field">
                    <label for="username-field-input">Username</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Enter your Username" id="username-field-input">
                    </div>
                </div>

                <!-- email field -->
                <div id="email-field">
                    <label for="email-field-input">Email Address</label>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Enter your Email" id="email-field-input">
                    </div>
                </div>

                <!-- password field -->
                <div id="password-field">
                    <label for="password-field-input">Password</label>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Enter your password" id="password-field-input">
                    </div>
                </div>

                <!-- comfirm password field -->
                <div id="comfirm-password-field">
                    <label for="comfirm-password-field-input">Comfirm Password</label>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Confirm your password" id="comfirm-password-field-input">
                    </div>
                </div>

                <p class="text-center text-danger" id='warning_text'></p>


                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-default btn-block " id="login-button" onclick="Login()">REGISTER</button>
                </div>

            </form>



        </div>




        <!-- /.social-auth-links -->



    </div>
    <!-- /.content -->
</div>

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

        /* register page */
        #form-frame {
            margin: 0px 10% !important;
            padding: 0px 5% 10px !important;
        }

        .login-box-msg-group {
            padding-top: 2% !important;
        }

    }

    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (min-width: 600px) {

        #ul-custom-nav-bar {
            flex-direction: row !important;
        }

        .login-box-msg-group {
            padding-top: 2% !important;
        }

    }

    /* Medium devices (landscape tablets, 768px and up) */
    @media only screen and (min-width: 768px) and (min-height: 769px) {

        /* register page */
        #form-frame {
            margin: 0px 20% !important;
            padding: 10px 10% 10px !important;
        }

        .login-box-msg-group {
            padding-top: 2% !important;
        }
    }

    @media only screen and (min-width: 768px) and (max-height: 626px) {

        /* register page */
        #form-frame {
            margin: 0px 20% !important;
            padding: 10px 10% 10px !important;
        }

        .login-box-msg-group {
            padding-top: 0px !important;
        }

        .content-header {
            padding: 0px .5rem !important;
        }


    }

    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) and (min-height: 769px) {

        /* register page */
        #form-frame {
            margin: 0px 30% !important;
            padding: 10px 10% 10px !important;
        }

        .login-box-msg-group {
            padding-top: 3% !important;
            padding-bottom: 1%;
        }

        .content-header {
            padding: 0px .5rem !important;
        }
    }

    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) and (max-height: 693px) {

        /* register page */
        #form-frame {
            margin: 0px 30% !important;
            padding: 10px 10% 10px !important;
        }

        .login-box-msg-group {
            padding-top: 1% !important;
            padding-bottom: 1% !important;
        }

        .content-header {
            padding: 0px .5rem !important;
        }
    }

    /* Extra large devices (large laptops and desktops, 1200px and up) */
    @media only screen and (min-width: 1200px) and (max-height: 693px) {

        /* register page */
        /* #form-frame {
            margin: 0px 30% !important;
            padding: 10px 10% 10px !important;
        }

        .login-box-msg-group {
            padding-top: 0px !important;
            padding-bottom: 1% !important;
        }

        .content-header {
            padding: 0px .5rem !important;
        } */
    }

    /* Extra large devices (large laptops and desktops, 1200px and up) */
    @media only screen and (min-width: 2560px) {

        /* register page */
        #form-frame {
            margin: 0px 35% !important;
            padding: 10px 5% 10px !important;
        }

        .login-box-msg-group {
            padding-top: 1% !important;
            padding-bottom: 1% !important;
        }

        .content-header {
            padding: 0px .5rem !important;
        }
    }
</style>
<!-- /.content-wrapper -->

<?php include('footer.php');
?>