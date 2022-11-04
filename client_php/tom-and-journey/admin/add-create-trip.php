<?php
include('config/authentication.php');

include('includes/header.php');

include('config/alert_box.php');

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
                                        <th>LAT</th>
                                        <th>LON</th>
                                        <th>TYPE</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                <tbody>
                                    <tr>
                                        <td colspan="8">No Record Found</td>
                                    </tr>
                                </tbody>
                                </thead>
                            </table>
                        </div>
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