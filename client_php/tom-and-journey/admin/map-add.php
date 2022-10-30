<?php
include('config/authentication.php');

include('includes/header.php');

include('config/alert_box.php');


if (isset($_GET['location'])) {
    if ($_GET['location'] == 'photo') {

        $action = "map-add-update.php?location=photo";
    } elseif ($_GET['location'] == 'hotel') {

        $action = "map-add-update.php?location=hotel";
    } elseif ($_GET['location'] == 'pump') {

        $action = "map-add-update.php?location=pump";
    } elseif ($_GET['location'] == 'food') {

        $action = "map-add-update.php?location=food";
    } elseif ($_GET['location'] == 'train') {

        $action = "map-add-update.php?location=train";
    } elseif ($_GET['location'] == 'museum') {

        $action = "map-add-update.php?location=museum";
    } elseif ($_GET['location'] == 'market') {

        $action = "map-add-update.php?location=market";
    } elseif ($_GET['location'] == 'anchor') {

        $action = "map-add-update.php?location=anchor";
    } elseif ($_GET['location'] == 'cafe') {

        $action = "map-add-update.php?location=cafe";
    } elseif ($_GET['location'] == 'bar') {

        $action = "map-add-update.php?location=bar";
    }
} else {
    $action = "map-add-update.php";
}
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

                    <form action=<?= $action ?> method="post">
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

                            <?php if (!isset($_GET['location'])) {
                                echo "<div class='col-md-6 mb-3'>
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
                            </div>";
                            } ?>


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