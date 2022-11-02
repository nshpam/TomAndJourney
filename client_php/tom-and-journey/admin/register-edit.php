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
                        $users = "SELECT * FROM user WHERE id='$user_id' ";
                        $users_run = mysqli_query($conn, $users);
                        
                        if(mysqli_num_rows($users_run) > 0)
                        {
                            foreach($users_run as $user)
                            {

                            ?>


                    <form action="user-add-update.php" method="post">
                        <input type="hidden" name="user_id" value=" <?= $user['id']; ?> ">
                        <div class="row">
                            <!-- <div class="col-md-12 mb-3">
                                        <label for="">Username</label>
                                        <input type="text" name="username" class="form-control">
                                    </div> -->
                            <div class="col-md-6 mb-3">
                                <label for="">Email Address</label>
                                <input type="text" name="email" value="<?= $user['email']; ?>" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Password</label>
                                <input type="text" name="password" value="<?= $user['password']; ?>"
                                    class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Role as</label>
                                <select name="role_as" require class="form-control">
                                    <option value="">--Select Role--</option>
                                    <option value="1" <?= $user['role_as'] == '1' ? 'selected':'' ?>>Admin</option>
                                    <option value="0" <?= $user['role_as'] == '0' ? 'selected':'' ?>>User</option>

                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Status</label>
                                <input type="checkbox" name="status" <?= $user['status'] == '1' ? 'checked':'' ?>
                                    width="70px" height="70px" />

                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" name="update_user" class="btn btn-primary">Update</button>
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