<?php
if (!isset($_SESSION)) {
    session_start();
}
//import config.php
include('/xampp/htdocs/tom-and-journey/config.php');

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//create error array
$errors = array();

// Check database connection
if (!$conn) {

    $_SESSION['status'] = "Error 500";
    $_SESSION['status_detail'] = "Failed to connect database. Please contact the admin.";
    $_SESSION['status_code'] = "error";

    header("location: ../../index.php");
}

// login control
if (isset($_POST['login_user'])) {

    // get username value and password value from index.php
    $username = $_POST['username'];
    $password = $_POST['password'];

    // error for sweet alert
    if (empty($username)) {
        array_push($errors, "Username is required");
    }

    // error for sweet alert
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    // count error from error list
    if (count($errors) == 0) {

        // encode password with md5
        // $password = ($password);
        $query = "SELECT * FROM $database_table_1 WHERE $database_table_1_username_field = '$username' AND $database_table_1_password_field = '$password' ";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $username;
            foreach ($result as $data) {
                $user_id = $data['id'];
                $user_name = $data['username'];
                $user_email = $data['email'];
                $user_password = $data['password'];

                //default is 0
                //config in admin dashboard only
                // 1 = admin , 0 = user
                $role_as = $data['role_as'];
            }
            $_SESSION['auth'] = true;
            $_SESSION['auth_role'] = $role_as;
            $_SESSION['auth_user'] = [
                'user_id' => $user_id,
                'user_name' => $user_name,
                'user_email' => $user_email,
                'user_password' => $user_password,
            ];

            if ($_SESSION['auth_role'] == '1') // admin
            {
                // alert
                $_SESSION['status'] = "Successfully!";
                $_SESSION['status_detail'] = "Your are logged in Admin Dashboard";
                $_SESSION['status_code'] = "success";


                header("location: ../index.php");
            } elseif ($_SESSION['auth_role'] == '0') //user
            {
                // alert
                $_SESSION['status'] = "Successfully!";
                $_SESSION['status_detail'] = "Your are now logged in";
                $_SESSION['status_code'] = "success";

                header("location: ../../home.php");
            }
        } else {
            //error alert
            array_push($errors, "Wrong Username or Password");

            $_SESSION['status'] = "Login not Successfully!";
            $_SESSION['status_detail'] = "Wrong Username or Password!";
            $_SESSION['status_code'] = "error";

            header("location: ../../index.php");
        }
    } else {
        array_push($errors, "Username & Password is required");

        $_SESSION['status'] = "Failed to login!";
        $_SESSION['status_detail'] = "Username & Password is required";
        $_SESSION['status_code'] = "error";

        header("location: ../../index.php");
    }
}
//logout control
if (isset($_POST['logout_btn'])) {
    unset($_SESSION['auth']);
    header("location: ../../index.php");
    exit(0);
}

//admin logout control
if (isset($_POST['adminlogout_btn'])) {
    unset($_SESSION['auth']);
    header("location: ../index.php");
    exit(0);
}


//edit email page
if (isset($_POST['edit_email'])) {
    header("location: ../../edit_profile_email.php");
}

//edit password page
if (isset($_POST['edit_pass'])) {
    header("location: ../../edit_profile_pass.php");
}

// register control
if (isset($_POST['reg_user'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];

    //input validation
    if (empty($username)) {
        array_push($errors, "Username is required");
        $_SESSION['error'] = "Username is required";
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
        $_SESSION['error'] = "Email is required";
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
        $_SESSION['error'] = "Password is required";
    }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
        $_SESSION['error'] = "The two passwords do not match";
    }

    $user_check_query = "SELECT * FROM $database_table_1 WHERE $database_table_1_username_field = '$username' OR $database_table_1_email_field = '$email' LIMIT 1";
    $query = mysqli_query($conn, $user_check_query);
    $result = mysqli_fetch_assoc($query);

    // if user exists
    if ($result) {
        if ($result['username'] === $username) {
            array_push($errors, "Username already exists");
        }
        if ($result['email'] === $email) {
            array_push($errors, "Email already exists");
        }
    }

    if (count($errors) == 0) {
        $password = ($password_1);

        $sql = "INSERT INTO $database_table_1 ($database_table_1_username_field, $database_table_1_email_field, $database_table_1_password_field) VALUES ('$username', '$email', '$password')";
        mysqli_query($conn, $sql);

        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['email'] = $email;

        $_SESSION['success'] = "You are now logged in";

        $_SESSION['status'] = "Congratulations!";
        $_SESSION['status_detail'] = "Your account has been Registerd Successfully!";
        $_SESSION['status_code'] = "success";

        header('location: ../../index.php');
    } else {

        $_SESSION['status'] = "Data Not Registerd";
        $_SESSION['status_detail'] = "Your account has data not registerd/Inserted !";
        $_SESSION['status_code'] = "error";
        header("location: ../../register.php");
    }
}
