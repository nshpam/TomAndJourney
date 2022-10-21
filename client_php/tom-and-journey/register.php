<!-- navbar -->
<?php include('header.php');
?>
<!-- end navbar -->

<!-- content-wrapper -->
<div class="content-wrapper">

    <!-- content -->
    <div class="content">

        <!-- register header text (*** do not change the class because it related to AdminLTE3 code ***) -->
        <div class="login-box-msg-group">
            <h2 class=" login-box-msg text-dark text-1">Register</h2>
            <p class="login-box-msg text-dark text-2">Register your account</p>
        </div>
        <!-- end register header -->

        <!-- register form frame -->
        <div class="row">

            <!-- blank div (for reponsive purpose) -->
            <div class="col-md-3 col-sm-2 col-lg-4 col-2"></div>
            <!-- end blank div -->

            <!-- register form -->
            <div class="col-md-6 col-sm-8 col-lg-4 col-8" id="form-frame">
                <form method="POST" id="register_form">

                    <!-- username field -->
                    <div class="row" id="username-field">
                        <label for="username-field-input">Username</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter your Username" id="username-field-input">
                        </div>
                    </div>
                    <!-- end username field -->

                    <!-- email field -->
                    <div class="row" id="email-field">
                        <label for="email-field-input">Email Address</label>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Enter your Email" id="email-field-input">
                        </div>
                    </div>
                    <!-- end email field -->

                    <!-- password field -->
                    <div class="row" id="password-field">
                        <label for="password-field-input">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" placeholder="Enter your password" id="password-field-input">
                        </div>
                    </div>
                    <!-- end password field -->

                    <!-- comfirm password field -->
                    <div class="row" id="comfirm-password-field">
                        <label for="comfirm-password-field-input">Comfirm Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" placeholder="Confirm your password" id="comfirm-password-field-input">
                        </div>
                    </div>
                    <!-- end confirm password field -->

                    <!-- warning text (link with js) -->
                    <p class="text-center text-danger" id='warning_text'></p>

                    <!-- register button -->
                    <div class="row d-flex justify-content-center">
                        <button type="button" class="btn btn-default btn-block " id="register-button" onclick="GoTo('index.php')">REGISTER</button>
                    </div>
                    <!-- end register button -->

                </form>
            </div>
            <!-- end register form -->

            <!-- blank div (for reponsive purpose) -->
            <div class="col-md-3 col-sm-2 col-lg-4 col-2"></div>
            <!-- end blank div -->

        </div>
        <!-- end register form frame -->

    </div>
    <!-- end content -->

</div>
<!-- end content-wrapper -->

<!-- register.css -->
<link rel="stylesheet" href="./dist/css/tomandjourney/registerpage.css">

<!-- control.js -->
<script src="./dist/js/tomandjourney/control.js"></script>

<!-- footer -->
<?php include('footer.php');
?>
<!-- end footer -->

<script>
    // hightlight the selected page in navbar
    SelectedNavItem("login-link");
</script>