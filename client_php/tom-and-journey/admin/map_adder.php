<?php 
include('config/authentication.php');

include('includes/header.php');

include('config/alert_box.php')
// include('tom-and-journey/alert_box.php');

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
                        <a href="register-add.php" class="btn btn-primary float-end">Add</a>
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
                                <th>Edit</th>
                                <th>Delete</th>
                            
                            </tr>
                            <tbody>
                                <?php
                                
                                $user_check_query = "SELECT * FROM user";
                                $query_run = mysqli_query($conn, $user_check_query);

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    foreach($query_run as $row)
                                    {
                                        ?>
                                            <tr>
                                                <td> <?= $row['id']; ?> </td>
                                                <td> <?= $row['username']; ?>  </td>
                                                <td> <?= $row['email']; ?>  </td>
                                                <td>
                                                    <?php
                                                    if($row['role_as'] == '1')
                                                    {
                                                        echo 'Admin';
                                                    }
                                                    elseif($row['role_as'] == '0')
                                                    {
                                                        echo 'User';
                                                    }
                                                    ?>
                                                </td>
                                                <td><a href="map-edit.php?id=<?= $row['id'];?>" class="btn btn-success">Edit</a></td>
                                                <td>
                                                    <form method="post">
                                                        <button type="sumbit" value="<?=$row['id'];?>" class="btn btn-danger">Delete</button>
                                                    </form>

                                                </td>
                                            </tr>
                                        <?php
                                        
                                    }

                                }
                                else
                                {
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