<?php
include('config/authentication.php');

include('includes/header.php');

include('config/alert_box.php');

if (!isset($_SESSION)) {
    session_start();
}

?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Create Location</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Edit Your Location by LAT LON using geocoding</li>
    </ol>
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Edit Geocoding LAT/LON
                        <a href="map-add.php" class="btn btn-primary float-end">Add</a>
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

                            $user_check_query = "SELECT * FROM map_location";
                            $query_run = mysqli_query($conn, $user_check_query);

                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $row) {
                            ?>
                                    <tr>
                                        <td> <?= $row['id']; ?> </td>
                                        <td> <?= $row['name']; ?> </td>
                                        <td> <?= $row['lat']; ?> </td>
                                        <td> <?= $row['lng']; ?> </td>
                                        <td> <?= $row['type']; ?> </td>
                                        <td><a href="map-edit.php?id=<?= $row['id']; ?>" class="btn btn-success">Edit</a></td>
                                        <td>
                                            <form action="map-add-update.php" method="post">
                                                <button type="sumbit" name="map_delete" value="<?= $row['id']; ?>" class="btn btn-danger">Delete</button>
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