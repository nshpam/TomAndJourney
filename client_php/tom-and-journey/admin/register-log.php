<?php 
include('authentication.php');

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
                    <h4> Registered User</h4>
            
                </div>
                <div class="card-body">
                    
                    <table class="table table-bordered"> 
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>USERNAME</th>
                                <th>EMAIL</th>
                                <th>ROLE</th>
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
                                                <td> <?= $row['id'] ?> </td>
                                                <td> <?= $row['username'] ?>  </td>
                                                <td> <?= $row['email'] ?>  </td>
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
                                                <td><a href="edit-register.php" class="btn btn-success">Edit</a></td>
                                                <td><button type="button" class="btn btn-success">Delete</button></td>
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