<!-- navbar -->
<?php
session_start();
include('header.php');
include('admin/config/alert_box.php');
?>
<!-- end navbar -->

<!-- background image layer 1 -->
<div class="bg-image">

    <!-- background image layer 2 -->
    <div class="person-image-div">

        <!-- content-header (blank) -->
        <div class="content-header">
        </div>

        <!-- content-wrapper -->
        <div class="content-wrapper">

            <!-- intro text group -->
            <div class=" intro-group md-5">

                <!-- line height config -->
                <div class="new-line-height">

                    <!-- line 1 -->
                    <div class="row md-5 p-1-1">
                        <div class="col-md-1"></div>
                        <p class="col-md-4">The Wonderful Trip Planner</p>
                    </div>
                    <!-- end line 1 -->

                    <!-- line 2 -->
                    <div class="row md-4 p-2-2">
                        <div class="col-md-1"></div>
                        <p class="col-md-3">Adventure</p>
                    </div>
                    <!-- end line 2 -->
                </div>
                <!-- end line height config -->

                <!-- line 3 -->
                <div class="row md-4">
                    <div class="col-md-1"></div>
                    <hr class="col-md-3">
                </div>
                <!-- end line 3 -->

                <!-- introduction text -->
                <div class="row md-5 p-3-3 justify-content-start">
                    <div class="col-md-1"></div>
                    <p class="col-md-4">With Tom & Journey, you can plan your trip anywhere
                        <br>at anytime. We help you save budget by showing you
                        <br>the best deal.
                    </p>
                </div>
                <!-- end introduction text -->

                <!-- buttons -->
                <div class="row md-5">
                    <div class="col-md-2"></div>
                    <button type="button" class="btn btn-default col-md-1" id="get-started-button"
                        onclick="GoTo('trip.php')">Get Started</button>
                    <button type="button" class="btn btn-default col-md-1" id="see-more-button"
                        onclick="GoTo('trip.php')">See more</button>
                </div>
                <!-- end buttons -->

            </div>
            <!-- end intro group -->

        </div>
        <!-- end content  -->

    </div>
    <!-- end backgroud image layer 2 -->

</div>
<!-- end background image layer 1 -->

<?php include("config.php");
?>

</div>
<!-- end wrapper (the start is in header.php) -->


<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- homepage.css -->
<link rel="stylesheet" href="dist/css/tomandjourney/homepage.css">

<!-- control.js -->
<script src="./dist/js/tomandjourney/control.js"></script>

</body>
<!-- end body -->

<script>
// hightlight the selected page in navbar
SelectedNavItem("home-link");
</script>