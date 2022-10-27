<?php
session_start();
include('header.php');



// my php
// include('admin/config/server.php');

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
        <div class="form_text_msg_group ">
            <h1 class=" form_text_msg gray_color ">Profile</h1>
            <p class=" gray_color text-2">Welcome to your profile</p>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-2 col-lg-4 col-2"></div>
            <div class="col-md-6 col-sm-8 col-lg-4 col-8" id="form-frame">
                <form method="post" action="logout_db.php" id="login_form">
                <div class="row" id="username-field">
                    <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                        <label for="username-field-input">Username :</label>
                    <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                    </div>
                    <div class="row" id="username-field">
                        

                        <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                        
                        <?php if (isset($_SESSION['auth_user'])) : ?>
                        <div class="input-group col-md-8 col-sm-8 col-lg-10 col-10">
                        <p><strong><?php echo $_SESSION['auth_user']['user_name']; ?></strong></p>
                        </div>
                        <?php endif?>

                        <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                    </div>
                    <!-- end username field -->
                    <div class="row" id="email-field">
                    <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                        <label for="email-field-input">Email :</label>
                    <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                    </div>

                    <!-- email field -->
                    <div class="row" id="email-field">
                        
                        <!-- <p><strong><?php echo $_SESSION['user_email']; ?></strong></p> -->
                        
                         <?php if (isset($_SESSION['auth_user'])) : ?>
                        
                        <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                        <div class="input-group col-md-8 col-sm-8 col-lg-10 col-10">
                        <p class=""><strong><?php echo $_SESSION['auth_user']['user_email']; ?></strong></p>
                        <div class="col-md-1 col-sm-2 col-1"></div>
                        <button type="edit" name="edit_email" class=" btn pass_edit " >Edit</button>
                        <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                            
                        </div>
                        
                        
                        
                        <div class="col-md-1 col-sm-2 col-1"></div>
                        <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                        <?php endif?> 
                        
                    </div>
                    <!-- end email field -->
                    <div class="row" id="password-field">
                    <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                        <label for="password-field-input">Password :</label>
                    <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                    </div>
                    <!-- password field -->
                    <div class="row" id="password-field">
                        
                    
                    <?php if (isset($_SESSION['auth_user'])) : ?>
                        
                        <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                        <div class="input-group col-md-8 col-sm-8 col-lg-10 col-10">
                        <p class=""><strong><?php echo $_SESSION['auth_user']['user_password']; ?></strong></p>
                        <div class="col-md-1 col-sm-2 col-1"></div>
                        <button type="edit" name="edit_pass" class=" btn pass_edit " >Edit</button>
                        <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                            
                        </div>
                        
                        
                        
                        <div class="col-md-1 col-sm-2 col-1"></div>
                        <div class="col-md-2 col-sm-2 col-lg-1 col-1"></div>
                        <?php endif?> 
                    </div>
                    
                    <!-- end password field -->

                    <!-- comfirm password field -->
                    
                    
                    <!-- end confirm password field -->

                    <!-- warning text (link with js) -->
                    <p class="text-center text-danger" id='warning_text'></p>
                    <!-- end warning text -->

                    <!-- register button -->
                    <!-- <div class="row d-flex justify-content-center">
                        <div class="col-md-1 col-sm-2 col-1"></div>
                        <button type="edit" " class="col-md-10 col-sm-8 col-10 btn btn-default btn-block " id="edit-button">Edit</button>
                        <div class="col-md-1 col-sm-2 col-1"></div>

                    </div> -->
                    <div class="row">
                        <div class="col-md-1 col-sm-2 col-1"></div>
                        <button type="submit" name="logout_btn" class="col-md-10 col-sm-8 col-10 btn btn-default btn-block " id="logout-button" >Logout</button>
                        <div class="col-md-1 col-sm-2 col-1"></div>
                    </div>
                    
                    <!-- <?php if (isset($_SESSION['username'])) : ?>
                     <p><a href="home.php?logout='1'" style="color: red;">Logout</a></p>
                    <?php endif ?> -->

                    
                    

                </form>
                
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
    




<!-- control.js -->
<script src="./dist/js/tomandjourney/control.js"></script>
<script>
    
    home = document.getElementById("login-link");
    home.classList.add("active");
</script>
    
    
</body>
</html>

<style>
<?php include './dist/css/tomandjourney/profile.css'; ?>
</style>