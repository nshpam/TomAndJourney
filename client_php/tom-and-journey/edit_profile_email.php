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
            <div class="row d-flex-justify-content-center">
                <div class="col-4"></div>
                <div class="col-4" id="form-frame">
                    <form method="post" id="login_form">
                        <!-- email field -->
                        <div class="row" id="email-field">
                            <label for="email-field-input">Email Address</label>
                        </div>

                        <!-- email field -->
                        <div class="row" id="email-field">

                            <div class="input-group">
                                <input type="email" name="email" class="form-control" placeholder="Enter your Email"
                                    id="email-field-input">
                            </div>
                        </div>
                        <!-- email field -->
                        <div class="row" id="email-field">

                            <label for="email-field-input">New Email Address</label>

                        </div>

                        <!-- email field -->
                        <div class="row" id="email-field">

                            <div class="input-group">
                                <input type="email" name="email" class="form-control" placeholder="Enter your new Email"
                                    id="email-field-input">
                            </div>

                        </div>
                        <!-- end email field -->
                        <div class="row" id="password-field">

                            <label for="password-field-input">Password</label>

                        </div>
                        <!-- password field -->
                        <div class="row" id="password-field">
                            <div class="input-group ">
                                <input type="password" name="password_1" class="form-control"
                                    placeholder="Enter your password" id="password-field-input">
                            </div>
                        </div>

                        <!-- end password field -->
                        <!-- warning text (link with js) -->
                        <p class="text-center text-danger" id='warning_text'></p>
                        <!-- end warning text -->

                        <!-- register button -->
                        <div class="row">
                            <button type="submit" class="btn btn-default btn-block " id="change-text">Change</button>
                        </div>

                        <div class="row">
                            <button type="submit" href="Profile.php" class="btn btn-default btn-block "
                                id="close-text">Close</button>
                        </div>
                    </form>

                </div>
                <div class="col-4"></div>
            </div>
        </div>
        <!-- /.content -->
    </div>





    <!-- control.js -->
    <script src="./dist/js/tomandjourney/control.js"></script>
    <link rel="stylesheet" href="./dist/css/tomandjourney/registerpage.css">


</body>

</html>

<style>
<?php include './dist/css/tomandjourney/editprofile.css';
?>
</style>