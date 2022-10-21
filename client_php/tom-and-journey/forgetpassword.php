<?php include('header.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
        <div class="login-box-msg-group">
            <h2 class=" login-box-msg text-dark text-1">Change Password</h2>
            <p class="login-box-msg text-dark text-2">We'll send reset password link to your E-mail</p>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-2 col-lg-4 col-2"></div>
            <div class="col-md-6 col-sm-8 col-lg-4 col-8" id="form-frame">
                <form method="POST" id="register_form">
                    <!-- username field -->
                    <div class="row" id="username-field">
                        <label for="username-field-input">E-mail</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter your e-mail" id="username-field-input">
                        </div>
                    </div>

                    <!-- comfirm password field -->
                    <div class="row" id="comfirm-password-field">
                        <label for="comfirm-password-field-input">Comfirm E-mail</label>
                        <div class="input-group">
                            <input type="password" class="form-control" placeholder="Confirm your e-mail" id="comfirm-password-field-input">
                        </div>
                    </div>

                    <p class="text-center text-danger" id='warning_text'></p>


                    <div class="row d-flex justify-content-center">
                        <button type="button" class="btn btn-default btn-block " id="register-button" onclick="GoToLogin()">CONFIRM</button>
                    </div>

                </form>



            </div>
            <div class="col-md-3 col-sm-2 col-lg-4 col-2"></div>
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
    .login-box-msg-group {
        margin-bottom: 0% !important;
        padding-bottom: 1% !important;
    }

    #register-button {
        background-color: #A64343;
        border-radius: 10px;
        color: white;
        font-weight: 700;
        margin-bottom: 20px;
    }

    /* center content-warpper */
    .content-wrapper {
        display: flex;
        justify-content: center;
        flex-direction: column;
        vertical-align: middle;
    }

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
<!-- /.content-wrapper -->

<?php include('footer.php');
?>

<script>
    function GoToLogin() {
        window.location.href = "http://localhost:8080/tom-and-journey/index.php";
    }
</script>