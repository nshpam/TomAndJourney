<?php
session_start();
include('header.php');



// my php
include('server.php');

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
            <p class=" gray_color text-2">Sign in to your account</p>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-2 col-lg-4 col-2"></div>
            <div class="col-md-6 col-sm-8 col-lg-4 col-8" id="form-frame">
                <form method="post" action="login_db.php" id="login_form">
                    <div>
                    
                    </div>
                    <div class="row">
                        
                        <label >Password</label>
                        
                        
                        <div class="input-group input-group-1 ">
                            
                            
                            <input type="text" name="username" class="form-control" id="username">

                        </div>
                        
                        
                        
                        
                    </div>
                    <div class="row">
                        <label >New Password</label>
                       
                        <div class="input-group input-group-2">

                            <input type="password" name="password" class="form-control" id="password">

                        </div>
                        
                    </div>
                    <div class="row">
                        <label >Comfirm New Password</label>
                       
                        <div class="input-group input-group-2">

                            <input type="password" name="password" class="form-control" id="password">

                        </div>
                        
                    </div>

                    <div class="row">
                        
                        <button type="submit" name="login_user" class="btn btn-default btn-block " id="login-button" >Change</button>
                        
                    </div>
                    <div class="row">
                        
                        <button type="submit" name="login_user" class="btn btn-default btn-block " id="login-button" >Close</button>
                        
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
<?php include './dist/css/tomandjourney/profile.css'; ?>
</style>