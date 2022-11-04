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

        </div>
    </div>
</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>