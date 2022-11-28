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
    <title>About Us</title>
</head>

<body>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content ">
            <div class="form_text_msg_group">
                <h1 class=" form_text_msg gray_color ">About Us</h1>
                <div class="d-flex justify-content-center align-items-center">
                    <hr style="width: 60%;">
                </div>
                <p class=" gray_color text-2">We're the student of Computer Engineering from KMUTNB univesity. This website is for software development project</p>
            </div>

            <div class="row d-flex justify-content-center align-items-center">
                <!-- <div class="col-2"></div> -->
                <div class="col-3 d-flex flex-column justify-content-center align-items-center">
                    <img src="https://media.discordapp.net/attachments/872658546163077141/1046678251424186448/tumblr_inline_oj720yVzuw1uvm1n9_640.png?width=478&height=473" style="height: 100px; width: 100px;">
                    <div style="height: 20px;"></div>
                    <p><b>Athibdee Ringcharoen</b> </p>
                    <p>Front-end / Support</p>
                    <a href="https://github.com/Athibdee" target="_blank">github.com/Athibdee</a>
                </div>

                <div class="col-3 d-flex flex-column justify-content-center align-items-center">
                    <img src="https://media.discordapp.net/attachments/889151850455113828/1045723857224474735/image.png?width=558&height=586" style="height: 100px; width: 100px;">
                    <div style="height: 20px;"></div>

                    <p> <b>Sirapa Sangna</b> </p>
                    <p>Back-end</p>
                    <a href="https://github.com/nshpam" target="_blank">github.com/nshpam</a>
                </div>

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
    <?php include './dist/css/tomandjourney/editprofile.css'; ?>body {
        overflow: hidden;
    }
</style>