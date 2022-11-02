<?php
include('config/authentication.php');

include('includes/header.php');

include('config/alert_box.php')
// include('tom-and-journey/alert_box.php');

?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row col-md-12">
        <!-- All -->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    All Locations
                    <?php
                        $dashboard_catagory = "SELECT * from map_location";
                        $query = mysqli_query($conn,$dashboard_catagory);
                        if($total = mysqli_num_rows($query))
                        {
                            echo '<h4 class="mb-0">'.$total.'</h4>';   
                        }
                        else
                        {
                            echo '<h4 class="mb-0"> No data </h4>';   
                        }

                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Locations</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <!-- Photo -->
        <div class="col-xl-3 col-md-6">
            <!-- create id for css -->
            <div class="card bg-success text-white mb-4" id="photo_card">
                <div class="card-body">
                    Photo Locations
                    <?php
                        $dashboard_catagory = "SELECT * from photo_location";
                        $query = mysqli_query($conn,$dashboard_catagory);
                        if($total = mysqli_num_rows($query))
                        {
                            echo '<h4 class="mb-0">'.$total.'</h4>';   
                        }
                        else
                        {
                            echo '<h4 class="mb-0"> No data </h4>';   
                        }

                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Locations</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <!-- Hotel -->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4" id="hotel_card">
                <div class="card-body">Hotel Locations
                    <?php
                        $dashboard_catagory = "SELECT * from hotel_location";
                        $query = mysqli_query($conn,$dashboard_catagory);
                        if($total = mysqli_num_rows($query))
                        {
                            echo '<h4 class="mb-0">'.$total.'</h4>';   
                        }
                        else
                        {
                            echo '<h4 class="mb-0"> No data </h4>';   
                        }

                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Locations</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <!-- Pump -->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4" id="pump_card">
                <div class="card-body">Gas Stations Locations
                    <?php
                        $dashboard_catagory = "SELECT * from pump_location";
                        $query = mysqli_query($conn,$dashboard_catagory);
                        if($total = mysqli_num_rows($query))
                        {
                            echo '<h4 class="mb-0">'.$total.'</h4>';   
                        }
                        else
                        {
                            echo '<h4 class="mb-0"> No data </h4>';   
                        }

                    ?>

                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Locations</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <!-- Food -->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4" id="food_card">
                <div class="card-body">Food Locations
                    <?php
                        $dashboard_catagory = "SELECT * from food_location";
                        $query = mysqli_query($conn,$dashboard_catagory);
                        if($total = mysqli_num_rows($query))
                        {
                            echo '<h4 class="mb-0">'.$total.'</h4>';   
                        }
                        else
                        {
                            echo '<h4 class="mb-0"> No data </h4>';   
                        }

                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Locations</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <!-- Train -->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4" id="train_card">
                <div class="card-body">Train Locations
                    <?php
                        $dashboard_catagory = "SELECT * from train_location";
                        $query = mysqli_query($conn,$dashboard_catagory);
                        if($total = mysqli_num_rows($query))
                        {
                            echo '<h4 class="mb-0">'.$total.'</h4>';   
                        }
                        else
                        {
                            echo '<h4 class="mb-0"> No data </h4>';   
                        }

                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Locations</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <!-- Museum -->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4" id="museum_card">
                <div class="card-body">Museum Locations
                    <?php
                        $dashboard_catagory = "SELECT * from museum_location";
                        $query = mysqli_query($conn,$dashboard_catagory);
                        if($total = mysqli_num_rows($query))
                        {
                            echo '<h4 class="mb-0">'.$total.'</h4>';   
                        }
                        else
                        {
                            echo '<h4 class="mb-0"> No data </h4>';   
                        }

                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Locations</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <!-- Mrket -->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4" id="market_card">
                <div class="card-body">Market Locations
                    <?php
                        $dashboard_catagory = "SELECT * from market_location";
                        $query = mysqli_query($conn,$dashboard_catagory);
                        if($total = mysqli_num_rows($query))
                        {
                            echo '<h4 class="mb-0">'.$total.'</h4>';   
                        }
                        else
                        {
                            echo '<h4 class="mb-0"> No data </h4>';   
                        }

                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Locations</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <!-- Anchor -->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4" id="anchor_card">
                <div class="card-body">Anchor Locations
                    <?php
                        $dashboard_catagory = "SELECT * from anchor_location";
                        $query = mysqli_query($conn,$dashboard_catagory);
                        if($total = mysqli_num_rows($query))
                        {
                            echo '<h4 class="mb-0">'.$total.'</h4>';   
                        }
                        else
                        {
                            echo '<h4 class="mb-0"> No data </h4>';   
                        }

                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Locations</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <!-- Cafe -->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4" id="cafe_card">
                <div class="card-body">Cafe Locations
                    <?php
                        $dashboard_catagory = "SELECT * from cafe_location";
                        $query = mysqli_query($conn,$dashboard_catagory);
                        if($total = mysqli_num_rows($query))
                        {
                            echo '<h4 class="mb-0">'.$total.'</h4>';   
                        }
                        else
                        {
                            echo '<h4 class="mb-0"> No data </h4>';   
                        }

                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Locations</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <!-- Bar -->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4" id="bar_card">
                <div class="card-body">Bar Locations
                    <?php
                        $dashboard_catagory = "SELECT * from bar_location";
                        $query = mysqli_query($conn,$dashboard_catagory);
                        if($total = mysqli_num_rows($query))
                        {
                            echo '<h4 class="mb-0">'.$total.'</h4>';   
                        }
                        else
                        {
                            echo '<h4 class="mb-0"> No data </h4>';   
                        }

                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Locations</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>

<style>
/* custom card color example */
#photo_card {
    background-color: #36A5D7 !important;
}

#hotel_card {
    background-color: #000 !important;
}

#pump_card {
    background-color: #6EAA25 !important;
}

#food_card {
    background-color: #A3A3A3 !important;
}

#train_card {
    background-color: #00659F !important;
}

#museum_card {
    background-color: #D33D2A !important;
}

#market_card {
    background-color: #EB7D7F !important;
}

#anchor_card {
    background-color: #436978 !important;
}

#cafe_card {
    background-color: #F2952F !important;
}

#bar_card {
    background-color: #CB4FB3 !important;
}
</style>