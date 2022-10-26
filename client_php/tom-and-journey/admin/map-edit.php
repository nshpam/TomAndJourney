<?php 
include('config/authentication.php');

include('includes/header.php');

include('config/alert_box.php')
// include('tom-and-journey/alert_box.php');

?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Registerd Users</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Edit or Remove egisterd Users</li>
    </ol>
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Edit User</h4>
            
                </div>
                <div class="card-body">


                    
                    <?php
                    if(isset($_GET['id']))
                    {
                        $user_id = $_GET['id'];
                        $users = "SELECT * FROM map_location WHERE id='$user_id' ";
                        $users_run = mysqli_query($conn, $users);
                        
                        if(mysqli_num_rows($users_run) > 0)
                        {
                            foreach($users_run as $user)
                            {

                            ?>
                            
                            
                            <form action="map-add-update.php" method="post">
                                <input type="hidden" name="user_id" value=" <?= $user['id']; ?> ">
                                <div class="row">
                                    <!-- <div class="col-md-12 mb-3">
                                        <label for="">Username</label>
                                        <input type="text" name="username" class="form-control">
                                    </div> -->
                                    <div class="col-md-6 mb-3">
                                        <label for="">Location Name</label>
                                        <input type="text" name="name" value="<?= $user['name']; ?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Address</label>
                                        <input type="text" name="address" value="<?= $user['address']; ?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">LAT</label>
                                        <input type="text" name="lat" value="<?= $user['lat']; ?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">LON</label>
                                        <input type="text" name="lng" value="<?= $user['lng']; ?>" class="form-control">
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="">TYPE</label>
                                        <select name="type" require class="form-control">
                                            <option value="">--Select Type--</option>
                                            <option value="Landmark" <?= $user['type'] == 'Landmark' ? 'selected':'' ?> >Landmark</option>
                                            <option value="Hotel" <?= $user['type'] == 'Hotel' ? 'selected':'' ?> >Hotel</option>
                                            <option value="Pump" <?= $user['type'] == 'Pump' ? 'selected':'' ?> >Filling station</option>
                                            <option value="Food" <?= $user['type'] == 'Food' ? 'selected':'' ?> >Restaurant</option>
                                            <option value="Train" <?= $user['type'] == 'Train' ? 'selected':'' ?> >Train</option>
                                            <option value="Bank" <?= $user['type'] == 'Bank' ? 'selected':'' ?> >Bank</option>
                                            <option value="Shop" <?= $user['type'] == 'Shop' ? 'selected':'' ?> >Shop</option>
                                            <option value="Ship" <?= $user['type'] == 'Ship' ? 'selected':'' ?> >Ship</option>
                                            <option value="Cafe" <?= $user['type'] == 'Cafe' ? 'selected':'' ?> >Cafe</option>
                                            <option value="Bar" <?= $user['type'] == 'Bar' ? 'selected':'' ?> >Bar</option>
                                            
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
                        else
                        {
                            ?>
                            <h4>No Record Found</h4>
                            <?php

                        }
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