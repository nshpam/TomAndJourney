<?php
session_start();
include('header.php');
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
                            <label for="username-field-input">Username :</label>
                        </div>
                        <div class="row" id="username-field">
                            <?php if (isset($_SESSION['auth_user'])) : ?>
                                <div class="input-group col-12">
                                    <p><strong><?php echo $_SESSION['auth_user']['user_name']; ?></strong></p>
                                </div>
                            <?php endif ?>


                        </div>
                        <!-- end username field -->
                        <div class="row" id="email-field">
                            <label for="email-field-input">Email :</label>
                        </div>
                        <!-- email field -->
                        <div class="row" id="email-field">

                            <!-- <p><strong><?php echo $_SESSION['user_email']; ?></strong></p> -->

                            <?php if (isset($_SESSION['auth_user'])) : ?>
                                <div class="input-group col-md-12 col-sm-12 col-lg-12 col-12">
                                    <p class="d-flex align-items-center col-6"><strong><?php echo $_SESSION['auth_user']['user_email']; ?></strong></p>
                                    <div class="col-6 d-flex justify-content-end">
                                        <button type="edit" name="edit_email" class=" btn pass_edit ">Edit</button>
                                    </div>
                                </div>
                            <?php endif ?>

                        </div>
                        <!-- end email field -->
                        <div class="row" id="password-field">
                            <label for="password-field-input">Password :</label>
                        </div>
                        <!-- password field -->
                        <div class="row" id="password-field">
                            <?php if (isset($_SESSION['auth_user'])) : ?>
                                <div class="input-group col-md-12 col-sm-12 col-lg-12 col-12">
                                    <p class="d-flex align-items-center col-6"><strong><?php echo $_SESSION['auth_user']['user_password']; ?></strong></p>
                                    <div class="col-6 d-flex justify-content-end">
                                        <button type="edit" name="edit_pass" class=" btn pass_edit">Edit</button>
                                    </div>
                                </div>
                            <?php endif ?>
                        </div>
                        <div class="row">
                            <button type="submit" name="logout_btn" class="btn btn-default btn-block " id="logout-button">Logout</button>
                        </div>

                        <!-- warning text (link with js) -->
                        <p class="text-center text-danger" id='warning_text'></p>
                        <!-- end warning text -->

                </div>
                <div class="col-md-3 col-sm-2 col-lg-4 col-2"></div>


                <!-- <?php if (isset($_SESSION['username'])) : ?>
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