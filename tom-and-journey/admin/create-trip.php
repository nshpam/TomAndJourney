<?php

include('config/authentication.php');

include('includes/header.php');

include('config/alert_box.php');
include('../config.php');

?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Recommend Trip Planner</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Create your trip planner</li>
    </ol>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Edit Geocoding LAT/LON
                        <a href='add-create-trip.php' class="btn btn-primary float-end">Add</a>
                    </h4>

                </div>
                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>Delete</th>
                            </tr>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM $database_table_14";
                            $query = mysqli_query($conn, $sql);
                            $id_arr = array();

                            if ($query) {

                                while ($row = mysqli_fetch_row($query)) {

                            ?>
                                    <tr>
                                        <td><?= $row[0]; ?></td>
                                        <td><?= $row[1]; ?></td>

                                        <td>
                                            <form action="create-trip-add-update.php?id=<?= $row[0]; ?>" name="delete_trip" method="post">
                                                <button type="submit" name="delete_trip" value="<?= $row[0]; ?>" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php


                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="8">Can't connect to database</td>
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

<script>
    $(document).ready(function() {
        $.ajax({
            url: 'create-trip-add-update.php',
            type: 'post',
            data: {
                ajax: 1,
                get_trip_info: 'true',
            },
            success: function(response) {
                var res = JSON.parse(response);
                console.log(res);
                // for (i = 0; i < response.length; i++) {

                //     //insert geo data to array
                //     console.log(response);
                // }
                // window.location = "create-trip.php";
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log('error');
            }
        });
    });
</script>