<?php
include('config/authentication.php');

include('includes/header.php');

include('config/alert_box.php');
include('../config.php');

?>


<!-- container -->
<div class="container-fluid px-4">

    <!-- header -->
    <h1 class="mt-4">Registered Users</h1>
    <!-- header -->

    <!-- sub-header -->
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Edit or Remove Registerd Users</li>
    </ol>
    <!-- sub-header -->

    <!-- card -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <!-- card header -->
                <div class="card-header">
                    <h4> Registered User
                        <a href="register-add.php" class="btn btn-primary float-end">Add</a>
                    </h4>
                </div>
                <!-- card header -->

                <!-- card body -->
                <div class="card-body">
                    <!-- card body -->

                    <!-- registered users table -->
                    <table class="table table-bordered">

                        <!-- table header -->
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
                            <!-- table header -->

                            <?php
                            $user_check_query = "SELECT * FROM $database_table_1";
                            $query_run = mysqli_query($conn, $user_check_query);

                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $row) {
                            ?>
                            <tr>
                                <td> <?= $row['id']; ?> </td>
                                <td> <?= $row['username']; ?> </td>
                                <td> <?= $row['email']; ?> </td>
                                <td>
                                    <?php
                                            if ($row['role_as'] == '1') {
                                                echo 'Admin';
                                            } elseif ($row['role_as'] == '0') {
                                                echo 'User';
                                            }
                                            ?>
                                </td>
                                <td><a href="register-edit.php?id=<?= $row['id']; ?>" class="btn btn-success">Edit</a>
                                </td>
                                <td>
                                    <form action="user-add-update.php" method="post">
                                        <button type="sumbit" name="user_delete" value="<?= $row['id']; ?>"
                                            class="btn btn-danger">Delete</button>
                                    </form>

                                </td>
                            </tr>
                            <?php

                                }
                            } else {
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