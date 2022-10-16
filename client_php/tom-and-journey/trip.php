<?php
include('header.php');
?>
<!-- /.navbar -->


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="top-buffer-2"></div>
        <div id="ad-banner">
            <img src="./dist/img/ad-6.png">
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <form method="POST">
            <div class="card-group">
                <div class="card card-body-1-1">
                    <div class="card-body card-body-1">
                        <div class="input-group ">
                            <input type="text" class="form-control card-input-1" placeholder="START" id="start-field">
                        </div>
                        <div class="underline-input-1"></div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body card-body-1">
                        <div class="input-group">
                            <input type="password" class="form-control card-input-2" placeholder="DESTINATION" id="destination-field">
                        </div>
                        <div class="input-group-append">
                            <span type="button" class="btn btn-default btn-block " id="plan-button">PLAN</button>
                        </div>
                    </div>

                </div>


            </div>

    </div>
    </form>




    <!-- /.social-auth-links -->



</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('footer.php');
?>