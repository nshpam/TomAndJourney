<?php
include('config/authentication.php');
include('includes/header.php');
include('config/alert_box.php');
include('../config.php');

if (!isset($_SESSION)) {
    session_start();
}
$conn = mysqli_connect($servername, $username, $password, $dbname);
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

                    <!-- display place on list -->
                    <div class="row">
                        <div class="card-body">

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NAME</th>
                                        <th>ADDRESS</th>
                                        <th>LAT</th>
                                        <th>LON</th>
                                        <th>TYPE</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM $database_table_13";
                                    $query = mysqli_query($conn, $sql);

                                    if ($query) {

                                        while ($row = mysqli_fetch_row($query)) {

                                    ?>
                                            <tr>
                                                <td><?= $row[0]; ?></td>
                                                <td><?= $row[1]; ?></td>
                                                <td><?= $row[2]; ?></td>
                                                <td><?= $row[3]; ?></td>
                                                <td><?= $row[4]; ?></td>
                                                <td><?= $row[5]; ?></td>
                                                <td><a href="create-trip-edit.php?id=<?= $row[0]; ?>" class="btn btn-success">Edit</a></td>
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
                    <div class="d-flex justify-content-center col-12" id="comfirm-button">
                        <button type="button" name="submit" class="btn btn-primary col-3">Confirm</button>
                    </div>

                    <form action="create-trip-add-update.php" method="post">
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
                            <div class='col-md-6 mb-3'>
                                <label>TYPE</label>
                                <select name='type' require class='form-control'>
                                    <option value=''>--Select TYPE--</option>
                                    <option value='photo'>Photo</option>
                                    <option value='hotel'>Hotel</option>
                                    <option value='pump'>Gas Station</option>
                                    <option value='food'>Food</option>
                                    <option value='train'>Train</option>
                                    <option value='museum'>Museum</option>
                                    <option value='market'>Market</option>
                                    <option value='anchor'>Anchor</option>
                                    <option value='cafe'>Cafe</option>
                                    <option value='bar'>Bar</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" name="add_mark" class="btn btn-primary">Add</button>
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

<style>
    #comfirm-button {
        padding-bottom: 40px;
    }
</style>

<script>
    // function GetAddData() {
    //     $.ajax({
    //         url: 'create-trip-add-update.php',
    //         type: 'get',
    //         success: function(response) {
    //             console.log(response);
    //             // if (response.indexOf('success') != -1) {

    //             // }
    //         },
    //         error: function(XMLHttpRequest, textStatus, errorThrown) {
    //             console.log('error');
    //         }
    //     });
    // }
</script>