<?php
include('config/authentication.php');

include('includes/header.php');

include('config/alert_box.php')
// include('tom-and-journey/alert_box.php');

?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Location Add</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Add location</li>
    </ol>
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Add Location</h4>

                </div>
                <div class="card-body">

                    <form action="map-add-update.php" method="post">
                        <input type="hidden" name="user_id" value=" <?= $user['id']; ?> ">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">Location Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Address</label>
                                <input type="text" name="address" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Latitude</label>
                                <input type="text" name="lat" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Longitude</label>
                                <input type="text" name="lng" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">TYPE</label>
                                <select name="type" require class="form-control">
                                    <option value="">--Select TYPE--</option>
                                    <option value="Landmark">Landmark</option>
                                    <option value="Hotel">Hotel</option>
                                    <option value="Pump">Filling station</option>
                                    <option value="Food">Restaurant</option>
                                    <option value="Train">Train</option>
                                    <option value="Bank">Bank</option>
                                    <option value="Shop">Shop</option>
                                    <option value="Ship">Ship</option>
                                    <option value="Cafe">Cafe</option>
                                    <option value="Bar">Bar</option>

                                </select>
                            </div>

                            <div class="col-md-12 mb-3">
                                <button type="submit" name="add_map" class="btn btn-primary">Add Map</button>
                                <button type="submit" name="cancel" class="btn btn-danger">Cancel</button>

                            </div>




                        </div>
                    </form>

                </div>



            </div>

        </div>
    </div>

</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>