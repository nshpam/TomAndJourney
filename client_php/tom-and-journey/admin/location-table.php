<?php
include('config/authentication.php');
include('includes/header.php');
include('config/alert_box.php');
include('../config.php');

if ($_GET['location'] == 'photo') {
    $location_query = "SELECT * FROM $database_table_3";
    $map_add = "map-add.php?location=photo";
} elseif ($_GET['location'] == 'hotel') {
    $location_query = "SELECT * FROM $database_table_4";
    $map_add = "map-add.php?location=hotel";
} elseif ($_GET['location'] == 'pump') {
    $location_query = "SELECT * FROM $database_table_5";
    $map_add = "map-add.php?location=pump";
} elseif ($_GET['location'] == 'food') {
    $location_query = "SELECT * FROM $database_table_6";
    $map_add = "map-add.php?location=food";
} elseif ($_GET['location'] == 'train') {
    $location_query = "SELECT * FROM $database_table_7";
    $map_add = "map-add.php?location=train";
} elseif ($_GET['location'] == 'museum') {
    $location_query = "SELECT * FROM $database_table_8";
    $map_add = "map-add.php?location=museum";
} elseif ($_GET['location'] == 'market') {
    $location_query = "SELECT * FROM $database_table_9";
    $map_add = "map-add.php?location=market";
} elseif ($_GET['location'] == 'anchor') {
    $location_query = "SELECT * FROM $database_table_10";
    $map_add = "map-add.php?location=anchor";
} elseif ($_GET['location'] == 'cafe') {
    $location_query = "SELECT * FROM $database_table_11";
    $map_add = "map-add.php?location=cafe";
} elseif ($_GET['location'] == 'bar') {
    $location_query = "SELECT * FROM $database_table_12";
    $map_add = "map-add.php?location=bar";
}

?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Create Photo Locations</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Edit Your Location by LAT LON using geocoding</li>
    </ol>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Edit Geocoding LAT/LON
                        <a href=<?= $map_add ?> class="btn btn-primary float-end">Add</a>
                    </h4>

                </div>
                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>LAT</th>
                                <th>LON</th>
                                <th>TYPE</th>
                                <th>Edit</th>
                                <th>Delete</th>

                            </tr>
                        <tbody>

                            <?php
                            $query_run = mysqli_query($conn, $location_query);
                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $row) {
                            ?>
                                    <tr>
                                        <td> <?= $row[$database_table_2_id_field]; ?> </td>
                                        <td> <?= $row[$database_table_2_name_field]; ?> </td>
                                        <td> <?= $row[$database_table_2_lat_field]; ?> </td>
                                        <td> <?= $row[$database_table_2_lng_field]; ?> </td>
                                        <td> <?= $row[$database_table_2_type_field]; ?> </td>
                                        <td><a href="map-edit.php?id=<?= $row[$database_table_2_id_field]; ?>&location=<?= $row[$database_table_2_type_field]; ?>" class="btn btn-success">Edit</a></td>
                                        <td>
                                            <form action="map-add-update.php" method="post">
                                                <button type="sumbit" name="map_delete" value="<?= $row[$database_table_2_id_field]; ?>" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php

                                }
                            } else {
                                ?>

                                <tr>
                                    <td colspan="6">No Record Found</td>
                                </tr>
                            <?php

                            }

                            ?>

                        </tbody>

                        </thead>
                    </table>

                </div>



            </div>

        </div>
    </div>





</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>