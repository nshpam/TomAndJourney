<!-- navbar -->
<?php include('header.php');
?>
<!-- end navbar -->

<!-- content-wrapepr -->
<div class="content-wrapper">

    <!-- content -->
    <div class="content">

        <!-- changepassword header text (*** do not change the class because it related to AdminLTE3 code ***) -->
        <div class="login-box-msg-group">
            <h2 class=" login-box-msg text-dark text-1">Change Password</h2>
            <p class="login-box-msg text-dark text-2">We'll send reset password link to your E-mail</p>
        </div>
        <!-- end changepassword header -->

        <!-- forget password form frame -->
        <div class="row">

            <!-- blank div (for reponsive purpose) -->
            <div class="col-md-3 col-sm-2 col-lg-4 col-2"></div>
            <!-- end blank div -->

            <!-- forget password form -->
            <div class="col-md-6 col-sm-8 col-lg-4 col-8" id="form-frame">
                <form method="POST" id="register_form">

                    <!-- email field -->
                    <div class="row" id="email-field">
                        <label for="email-field-input">E-mail</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter your e-mail" id="email-field-input">
                        </div>
                    </div>
                    <!-- end email form -->

                    <!-- comfirm email field -->
                    <div class="row" id="comfirm-email-field">
                        <label for="comfirm-email-field-input">Comfirm E-mail</label>
                        <div class="input-group">
                            <input type="password" class="form-control" placeholder="Confirm your e-mail" id="comfirm-email-field-input">
                        </div>
                    </div>
                    <!-- end comfirm email field-->

                    <!-- warning text (link with js) -->
                    <p class="text-center text-danger" id='warning_text'></p>
                    <!-- end warning text -->

                    <!-- comfirm button -->
                    <div class="row d-flex justify-content-center">
                        <button type="button" class="btn btn-default btn-block " id="confirm-button" onclick="GoTo('index.php')">CONFIRM</button>
                    </div>
                    <!-- end confirm button -->

                </form>
            </div>
            <!-- end forgetpassword form -->

            <!-- blank div (for reponsive purpose) -->
            <div class="col-md-3 col-sm-2 col-lg-4 col-2"></div>
            <!-- end blank div -->

        </div>
        <!-- end forgetpassword form frame -->

    </div>
    <!-- end content -->

</div>
<!-- end content-wrapper -->

<!-- register.css -->
<link rel="stylesheet" href="./dist/css/tomandjourney/forgetpasswordpage.css">

<!-- control.js -->
<script src="./dist/js/tomandjourney/control.js"></script>

<script>
    // hightlight the selected page in navbar
    SelectedNavItem("login-link");
</script>

<!-- footer -->
<?php include('footer.php');
?>
<!-- end footer -->