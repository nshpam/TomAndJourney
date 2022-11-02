<?php
if (!isset($_SESSION)) {
    session_start();
}
include('header.php');
// include('admin/config/server.php');

// sweet alert
include('admin/config/alert_box.php');
include('config.php');
?>

<!-- content-wrapper -->
<div class="content-wrapper">

    <!-- content -->
    <div class="content">

        <!-- SIGN IN header -->
        <div class="login-box-msg-group col-xs-12 col-md-12 col-lg-12">
            <h1 class=" login-box-msg text-dark text-1">SIGN IN</h1>
            <p class="login-box-msg text-dark text-2">Sign in to your account</p>
        </div>
        <!-- SIGN IN header -->

        <!-- form row -->
        <div class="row">

            <!-- blank space for layout -->
            <div class="col-md-3 col-sm-2 col-lg-4 col-2"></div>
            <!-- blank space for layout -->

            <!-- form frame -->
            <div class="col-md-6 col-sm-8 col-lg-4 col-8" id="form-frame">
                <form method="post" action="./admin/config/server.php" id="login_form">

                    <!-- username field -->
                    <div class="row">

                        <!-- blank space for layout -->
                        <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                        <!-- blank space for layout -->

                        <!-- username input group -->
                        <div class="input-group input-group-1 col-md-8 col-sm-8 col-lg-10 col-10">

                            <!-- username logo -->
                            <div id="username-logo">
                                <i class="fas fa-user"></i>
                            </div>
                            <!-- username logo -->

                            <!-- username input -->
                            <input type="text" name="username" class="form-control" placeholder="Username"
                                id="username">
                            <!-- username input -->

                        </div>
                        <!-- username input group -->
                        <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                    </div>

                    <!-- password field -->
                    <div class="row">

                        <!-- blank space for layout -->
                        <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                        <!-- blank space for layout -->

                        <!-- password input group -->
                        <div class="input-group input-group-2 col-md-8 col-sm-8 col-lg-10 col-10">

                            <!-- password logo -->
                            <div id="password-logo">
                                <i class="fas fa-lock"></i>
                            </div>
                            <!-- password logo -->

                            <!-- password input -->
                            <input type="password" name="password" class="form-control" placeholder="Password"
                                id="password">
                            <!-- password input -->

                        </div>
                        <!-- password input group -->

                        <!-- blank space for layout -->
                        <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                        <!-- blank space for layout -->
                    </div>

                    <!-- forget password and remember me group -->
                    <div class="row d-flex align-items-center justify-content-center" id="href-text-1">
                        <!-- forget password href -->
                        <p id="top-buffer-2">Can't remember your password?&nbsp;&nbsp;</p>
                        <a class="" href="forgetpassword.php" id="top-buffer-1">Change Password</a>
                        <!-- forget password href -->
                    </div>
                    <!-- forget password and remember me group -->

                    <!-- register text group -->
                    <div class="row justify-content-center" id="outside-text">
                        <p>Don't have an account?</p>
                        <a href="/tom-and-journey/register.php" id="resgister-text">Sign Up Now</a>
                    </div>
                    <!-- register text group -->

                    <!-- login button -->
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-1 col-sm-2 col-1"></div>
                        <button type="submit" name="login_user"
                            class=" col-md-10 col-sm-8 col-10 btn btn-default btn-block " id="login-button">SIGN
                            IN</button>
                        <div class="col-md-1 col-sm-2 col-1"></div>
                    </div>
                    <!-- login button -->
                </form>
            </div>
            <!-- form frame -->

            <!-- blank space for layout -->
            <div class="col-md-3 col-sm-2 col-lg-4 col-2"></div>
            <!-- blank space for layout -->

        </div>



    </div>
    <!-- content -->
</div>

<!-- loginpage.css -->
<link rel="stylesheet" href="./dist/css/tomandjourney/loginpage.css">

<!-- control.js -->
<script src="./dist/js/tomandjourney/control.js"></script>
<!-- content-wrapper -->

<?php include('footer.php');
?>

<script>
// hightlight the selected page in navbar
SelectedNavItem("login-link");
</script>

<style>
/* fix horizontal overflow */
.row {
    margin-left: 0px;
    margin-right: 0px;
}

/* center content-warpper */
.content-wrapper {
    display: flex;
    justify-content: center;
    flex-direction: column;
    vertical-align: middle;
}

@media only screen and (min-width: 732px) {}

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
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {

    #ul-custom-nav-bar {
        flex-direction: row !important;
    }

}
</style>