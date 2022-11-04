<?php 
include('config/authentication.php');

include('includes/header.php');

include('config/alert_box.php')
// include('tom-and-journey/alert_box.php');

?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Registerd Users</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Add registerd Users</li>
    </ol>
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Add User/Admin</h4>
            
                </div>
                <div class="card-body">

                <form action="user-add-update.php" method="post">
                        <input type="hidden" name="user_id" value=" <?= $user['id']; ?> ">
                        <div class="row">
                                    <!-- <div class="col-md-12 mb-3">
                                        <label for="">Username</label>
                                        <input type="text" name="username" class="form-control">
                                    </div> -->
                                    <div class="col-md-6 mb-3">
                                        <label for="">Username</label>
                                        <input type="text" name="username" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Email Address</label>
                                        <input type="text" name="email" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Password</label>
                                        <input type="text" name="password" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Role as</label>
                                        <select name="role_as" require class="form-control">
                                            <option value="">--Select Role--</option>
                                            <option value="1" >Admin</option>
                                            <option value="0" >User</option>
                                            
                                        </select>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="">Status</label>
                                        <input type="checkbox" name="status" width="70px" height="70px" />

                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <button type="submit" name="add_user" class="btn btn-primary">Add User/Admin</button>
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