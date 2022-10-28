<!-- navbar -->
<?php 
session_start();
include('header.php');
include('admin/config/server.php'); 
include('admin/config/alert_box.php');


?>
<!-- end navbar -->

<!-- content-wrapper -->
<div class="content-wrapper">

    <!-- content -->
    <div class="content">

        <!-- register header text (*** do not change the class because it related to AdminLTE3 code ***) -->
        <div class="login-box-msg-group col-xs-12 col-md-12 col-lg-12">
            <h2 class=" login-box-msg text-dark text-1">SIGN UP</h2>
            <p class="login-box-msg text-dark text-2">Sign up your account</p>
        </div>
        <!-- end register header -->

        <!-- register form frame -->
        <div class="row">

            <!-- blank div (for reponsive purpose) -->
            <div class="col-md-3 col-sm-2 col-lg-4 col-2"></div>
            <!-- end blank div -->

            <!-- register form -->
            <div class="col-md-6 col-sm-8 col-lg-4 col-8" id="form-frame">
                <form method="post" action="register_db.php" id="register_form">


                    <!-- username field -->
                    <div class="row" id="username-field">
                    <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                        <label for="username-field-input">Username</label>
                    <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                    </div>
                    <div class="row" id="username-field">
                        

                        <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                        <div class="input-group col-md-8 col-sm-8 col-lg-10 col-10">
                            
                            <input type="text" name="username" class="form-control" placeholder="Enter your Username" id="username-field-input">
                        </div>
                        <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                    </div>
                    <!-- end username field -->
                    <div class="row" id="email-field">
                    <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                        <label for="email-field-input">Email Address</label>
                    <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                    </div>

                    <!-- email field -->
                    <div class="row" id="email-field">
                        <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                        <div class="input-group col-md-8 col-sm-8 col-lg-10 col-10">
                            <input type="email" name="email" class="form-control" placeholder="Enter your Email" id="email-field-input">
                        </div>
                        <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                    </div>
                    <!-- end email field -->
                    <div class="row" id="password-field">
                    <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                        <label for="password-field-input">Password</label>
                    <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                    </div>
                    <!-- password field -->
                    <div class="row" id="password-field">
                        

                        <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                        <div class="input-group col-md-8 col-sm-8 col-lg-10 col-10">
                            <input type="password" name="password_1" class="form-control" placeholder="Enter your password" id="password-field-input">
                        </div>
                        <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                    </div>
                    
                    <!-- end password field -->

                    <!-- comfirm password field -->
                    
                    <div class="row " id="comfirm-password-field">
                    <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                        <label for="comfirm-password-field-input">Comfirm Password</label>
                    <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                    </div>

                    <div class="row " id="comfirm-password-field">
                        

                        <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                        <div class="input-group col-md-8 col-sm-8 col-lg-10 col-10">

                        
                            <input type="password" name="password_2" class="form-control" placeholder="Confirm your password" id="comfirm-password-field-input">
                        </div>
                        <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                        
                    </div>
                    <!-- end confirm password field -->

                    <!-- warning text (link with js) -->
                    <p class="text-center text-danger" id='warning_text'></p>
                    <!-- end warning text -->

                    <!-- register button -->
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-1 col-sm-2 col-1"></div>
                        <button type="submit" name="reg_user" class="col-md-10 col-sm-8 col-10 btn btn-default btn-block " id="register-button">SIGN UP</button>
                        <div class="col-md-1 col-sm-2 col-1"></div>

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