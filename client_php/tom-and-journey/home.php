<?php
include('header.php');
?>
<!-- /.navbar -->

<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="bg-image">
    <div class="content-header">

    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content-wrapper">
        <div class=" intro-group md-5">
            <div class="new-line-height">
                <div class="row md-5 p-1-1">
                    <div class="col-md-1"></div>
                    <p class="col-md-4">The Wonderful Trip Planner</p>
                </div>

                <div class="row md-4 p-2-2">
                    <div class="col-md-1"></div>
                    <p class="col-md-3">Adventure</p>
                </div>
            </div>

            <div class="row md-4">
                <div class="col-md-1"></div>
                <hr class="col-md-3">
            </div>

            <div class="row md-5 p-3-3 justify-content-start">
                <div class="col-md-1"></div>
                <p class="col-md-4">With Tom & Journey, you can plan your trip anywhere
                    <br>at anytime. We help you save budget by showing you
                    <br>the best deal.
                </p>
            </div>

            <div class="row md-5">
                <div class="col-md-2"></div>
                <button type="button" class="btn btn-default col-md-1" id="get-started-button" onclick="Login()">Get Started</button>
                <!-- <div class="col-md-1"></div> -->
                <button type="button" class="btn btn-default col-md-1" id="see-more-button" onclick="Login()">See more</button>
            </div>

        </div>

    </div>
    <!-- /.content -->
</div>
</div>
<!-- </div> -->
<!-- /.content-wrapper -->

<?php include("config.php") ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>

<script>
    home = document.getElementById("home-link");
    home.classList.add("active");
</script>

<style>
    /* body */
    body {
        font-family: 'Roboto', sans-serif;
        overflow: hidden;
    }

    /* --- navbar --- */
    #custom-nav-bar {
        background-color: #A64343 !important;
        border-color: #A64343;
    }

    .nav-link {
        color: white !important;
    }

    .nav-item {
        padding-left: 5px;
        padding-right: 5px;
    }

    .nav-item :hover {
        color: #A64343 !important;
        background-color: white;
        padding: 10px 5px;
        border-radius: 5px;
        font-weight: 500;
    }

    .active {
        color: #A64343 !important;
        background-color: white;
        /* padding: 10px 5px; */
        border-radius: 5px;
        font-weight: 500;
    }

    #brand-logo {
        vertical-align: middle;
    }

    /* image background */

    .content-wrapper {
        background-color: transparent;
    }

    .bg-image {
        background-color: #A64343 !important;
        background-image: url('./dist/img/home_bg_img.png') !important;
        height: 100vh;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .intro-group {
        margin-top: 10%;
    }

    .intro-group .p-1-1 {
        color: #FAFF03;
        font-size: 31px;
    }

    .intro-group .p-2-2 {
        color: white;
        font-size: 83px;

    }

    .intro-group hr {
        border: 1px solid #FAFF03;
        margin-left: 10px;
    }

    .intro-group .p-3-3 {
        color: white;

    }

    .intro-group .new-line-height {
        line-height: 300%;
    }

    #get-started-button {
        background-color: #A64343;
        border-color: #A64343;
        border-radius: 20px;
        color: white;
        margin: 0px;
        padding: 0px;
        /* width: 10%; */
    }

    #see-more-button {
        margin-left: 20px;
        background-color: transparent;
        border-color: white;
        border-radius: 20px;
        color: white;
        width: 10%;
    }
</style>