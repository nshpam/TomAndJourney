<?php
session_start();
include('header.php');



// my php
include('admin/config/server.php');
include('admin/config/alert_box.php');

// nav css
include('footer.php');



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content ">
        <div class="form_text_msg_group">
            <h1 class=" form_text_msg gray_color ">Profile</h1>
            <p class=" gray_color text-2">Edit your email</p>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-2 col-lg-4 col-2"></div>
            <div class="col-md-6 col-sm-8 col-lg-4 col-8" id="form-frame">
                <form method="post"  id="login_form">
                    
                    
                    
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
                            <input type="password" name="password_old" class="form-control" placeholder="Enter your password" id="password-field-input">
                        </div>
                        <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                    </div>
                    
                    <!-- end password field -->
                    <div class="row " id="comfirm-password-field">
                    <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                        <label for="comfirm-password-field-input">New Password</label>
                    <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                    </div>

                    <div class="row " id="comfirm-password-field">
                        

                        <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                        <div class="input-group col-md-8 col-sm-8 col-lg-10 col-10">

                        
                            <input type="password" name="password_new" class="form-control" placeholder="Confirm your password" id="comfirm-password-field-input">
                        </div>
                        <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                        
                    </div>

                    
                    <!-- warning text (link with js) -->
                    <p class="text-center text-danger" id='warning_text'></p>
                    <!-- end warning text -->

                    <!-- register button -->
                    
                    <div class="row">
                        
                        <button type="submit" class="btn btn-default btn-block " id="login-button" >Change</button>
                        
                    </div>
                     <div class="row">
                        
                        <button type="submit" href="Profile.php" class="btn btn-default btn-block " id="login-button" >Close</button>
                        
                    </div> 
                    

                    
                    

                </form>
                
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
    




<!-- control.js -->
<script src="./dist/js/tomandjourney/control.js"></script>
    
    
</body>
</html>

<style>
<?php include './dist/css/tomandjourney/editprofile.css'; ?>
</style>
<link rel="stylesheet" href="./dist/css/tomandjourney/registerpage.css">