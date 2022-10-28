<!-- navbar -->
<?php
if (!isset($_SESSION)) {
    session_start();
}
include('header.php');
include('admin/config/server.php');
?>
<!-- end navbar -->

<!-- content-wrapper -->
<div class="content-wrapper">

    <!-- content-header -->
    <div class="content-header">

        <!-- image slider -->
        <div class="row">
            <div class="carousel" id="custom-carousel" data-carousel>
                <div data-slides>

                    <!-- banner 1 -->
                    <div class="slide" data-active>
                        <img class="img-display img-fluid" src="/tom-and-journey/dist/img/banner1.png">
                    </div>
                    <!-- end banner 1 -->

                    <!-- banner 2 -->
                    <div class="slide" data-active>
                        <img class="img-display img-fluid" src="/tom-and-journey/dist/img/banner2.png">
                    </div>
                    <!-- end banner 2 -->

                    <!-- banner 3 -->
                    <div class="slide" data-active>
                        <img class="img-display img-fluid" src="/tom-and-journey/dist/img/banner3.png">
                    </div>
                    <!-- end banner 3 -->
                </div>
            </div>
        </div>
        <!-- end image slider -->

    </div>
    <!-- end content-header -->

    <!-- content -->
    <div class="content">

        <!-- start and destination form -->
        <form method="POST">
            <div class="row justify-content-center form-row">
                <div class="card-group col-md-8">

                    <!-- card 1 -->
                    <div class="card card-body-1-1">
                        <div class="card-body card-body-1">

                            <!-- Start input -->
                            <div class="input-group">
                                <input type="text" class="form-control card-input-1" placeholder="START" id="start-field">
                            </div>
                            <!-- end start input -->

                        </div>
                    </div>
                    <!-- end card 1 -->

                    <!-- card 2 -->
                    <div class="card card-body-1-2 ">
                        <div class="card-body card-body-1 ">

                            <!-- destination input -->
                            <div class="input-group ">
                                <input type="text" class="form-control card-input-2 " placeholder="DESTINATION" id="destination-field">
                            </div>
                            <!-- end destination input -->

                        </div>
                    </div>
                    <!-- end card 2 -->
                </div>

                <!-- plan button -->
                <div class="plan-button-div col-md-2">
                    <button type="button" class="btn btn-default btn-block " id="plan-button" onclick="GoTo('tripmap.php')">PLAN</button>
                </div>
                <!-- end plan button -->

            </div>
        </form>
        <!-- end start and destination form -->

    </div>
    <!-- end content -->

</div>
<!-- end content-warpper -->

<!-- trippage.css -->
<link rel="stylesheet" href="./dist/css/tomandjourney/trippage.css">

<!-- control.js -->
<script src="./dist/js/tomandjourney/control.js"></script>

<!-- footer -->
<?php include('footer.php');
?>
<!-- end footer -->

<script>
    // hightlight the selected page in navbar
    SelectedNavItem("trip-planner-link");
</script>