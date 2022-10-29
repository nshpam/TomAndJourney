<?php
include('config/authentication.php');

include('includes/header.php');

include('config/alert_box.php');
include('../config.php');

?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Registerd locations</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Edit or Remove egisterd locations</li>
    </ol>
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Edit location</h4>

                </div>
                <div class="card-body">



                    <?php
                    if (isset($_GET['id'])) {
                        $location_id = $_GET['id'];
                        if (isset($_GET['location'])) {
                            if ($_GET['location'] == 'photo') {
                                $locations = "SELECT * FROM $database_table_3 WHERE $database_table_2_id_field='$location_id' ";
                                $action = "map-add-update.php?location=photo";
                            } elseif ($_GET['location'] == 'hotel') {
                                $locations = "SELECT * FROM $database_table_4 WHERE $database_table_2_id_field='$location_id' ";
                                $action = "map-add-update.php?location=hotel";
                            } elseif ($_GET['location'] == 'pump') {
                                $locations = "SELECT * FROM $database_table_5 WHERE $database_table_2_id_field='$location_id' ";
                                $action = "map-add-update.php?location=pump";
                            } elseif ($_GET['location'] == 'food') {
                                $locations = "SELECT * FROM $database_table_6 WHERE $database_table_2_id_field='$location_id' ";
                                $action = "map-add-update.php?location=food";
                            } elseif ($_GET['location'] == 'train') {
                                $locations = "SELECT * FROM $database_table_7 WHERE $database_table_2_id_field='$location_id' ";
                                $action = "map-add-update.php?location=train";
                            } elseif ($_GET['location'] == 'museum') {
                                $locations = "SELECT * FROM $database_table_8 WHERE $database_table_2_id_field='$location_id' ";
                                $action = "map-add-update.php?location=museum";
                            } elseif ($_GET['location'] == 'market') {
                                $locations = "SELECT * FROM $database_table_9 WHERE $database_table_2_id_field='$location_id' ";
                                $action = "map-add-update.php?location=market";
                            } elseif ($_GET['location'] == 'anchor') {
                                $locations = "SELECT * FROM $database_table_10 WHERE $database_table_2_id_field='$location_id' ";
                                $action = "map-add-update.php?location=anchor";
                            } elseif ($_GET['location'] == 'cafe') {
                                $locations = "SELECT * FROM $database_table_11 WHERE $database_table_2_id_field='$location_id' ";
                                $action = "map-add-update.php?location=cafe";
                            } elseif ($_GET['location'] == 'bar') {
                                $locations = "SELECT * FROM $database_table_12 WHERE $database_table_2_id_field='$location_id' ";
                                $action = "map-add-update.php?location=bar";
                            }
                        } else {
                            $locations = "SELECT * FROM $database_table_2 WHERE $database_table_2_id_field='$location_id' ";
                            $action = "map-add-update.php";
                        };
                        $location_run = mysqli_query($conn, $locations);
                    ?>
                        <?php
                        if (mysqli_num_rows($location_run) > 0) {
                            foreach ($location_run as $location) {
                        ?>
                                <form action=<?= $action ?> method="post">
                                    <input type="hidden" name="location_id" value=" <?= $location['id']; ?> ">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="">Location Name</label>
                                            <input type="text" name="name" value="<?= $location['name']; ?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Address</label>
                                            <input type="text" name="address" value="<?= $location['address']; ?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">LAT</label>
                                            <input type="text" name="lat" value="<?= $location['lat']; ?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">LON</label>
                                            <input type="text" name="lng" value="<?= $location['lng']; ?>" class="form-control">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="">TYPE</label>

                                            <select name="type" require class="form-control">
                                                <option value="">--Select Type--</option>
                                                <option value="photo" <?= $location['type'] == 'photo' ? 'selected' : '' ?>>Photo</option>
                                                <option value="hotel" <?= $location['type'] == 'hotel' ? 'selected' : '' ?>>Hotel</option>
                                                <option value="pump" <?= $location['type'] == 'pump' ? 'selected' : '' ?>>Gas station</option>
                                                <option value="food" <?= $location['type'] == 'food' ? 'selected' : '' ?>>Food</option>
                                                <option value="train" <?= $location['type'] == 'train' ? 'selected' : '' ?>>Train</option>
                                                <option value="museum" <?= $location['type'] == 'museum' ? 'selected' : '' ?>>Museum</option>
                                                <option value="market" <?= $location['type'] == 'market' ? 'selected' : '' ?>>Market</option>
                                                <option value="anchor" <?= $location['type'] == 'anchor' ? 'selected' : '' ?>>Anchor</option>
                                                <option value="cafe" <?= $location['type'] == 'cafe' ? 'selected' : '' ?>>Cafe</option>
                                                <option value="bar" <?= $location['type'] == 'bar' ? 'selected' : '' ?>>Bar</option>

                                            </select>

                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <button type="submit" name="update_map" class="btn btn-primary">Update</button>
                                            <button type="submit" name="cancel" class="btn btn-danger">Cancel</button>

                                        </div>

                                    </div>
                                </form>

                        <?php
                            }
                        }
                    } else {
                        ?>
                        <h4>No Record Found</h4>
                    <?php

                    }



                    ?>

                </div>
            </div>

        </div>
    </div>

</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>