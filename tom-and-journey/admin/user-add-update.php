<?php
include('config/authentication.php');

// adding
$errors = array();

if (isset($_POST['add_user'])) {
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $role_as = mysqli_real_escape_string($conn, $_POST['role_as']);
    $status = mysqli_real_escape_string($conn, $_POST['status'] == true ? '1':'0');


    if (empty($username)) {
        array_push($errors, "Username is required");
        $_SESSION['error'] = "Username is required";
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
        $_SESSION['error'] = "Email is required";
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
        $_SESSION['error'] = "Password is required";
    }
    
    $user_check_query = "SELECT * FROM user WHERE username = '$username' OR email = '$email' LIMIT 1";
    $query = mysqli_query($conn, $user_check_query);
    $result = mysqli_fetch_assoc($query);

    if ($result) { // if user exists
        if ($result['username'] === $username) {
            array_push($errors, "Username already exists");
        }
        if ($result['email'] === $email) {
            array_push($errors, "Email already exists");
        }
    }

    if (count($errors) == 0) {
        $password = ($password_1);

        $sql = "INSERT INTO user (username,email,password,role_as,status) VALUES ('$username','$email','$password','$role_as','$status')";
        mysqli_query($conn, $sql);
        
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['email'] = $email;

        $_SESSION['success'] = "You are now logged in";

        $_SESSION['status'] = "Congratulations!";
        $_SESSION['status_detail'] = "Your account has been Registerd Successfully!";
        $_SESSION['status_code'] = "success";
        
        header('location: register-log.php');
    } else {

        $_SESSION['status'] = "Data Not Registerd";
        $_SESSION['status_detail'] = "Your account has data not registerd/Inserted !";
        $_SESSION['status_code'] = "error";
        header("location: register-log.php");
    }
}

// cancel
if (isset($_POST['cancel'])) 
{
    header('Location: register-log.php');
        exit(0);
    
}

// user delete
if (isset($_POST['user_delete'])) 
{
    $user_id = $_POST['user_delete'];
    $query = "DELETE FROM user WHERE id='$user_id' ";
    $query_run = mysqli_query($conn, $query);


    if($query_run)
    {
        $_SESSION['status'] = "Successfully!";
        $_SESSION['status_detail'] = "Successfully delete data";
        $_SESSION['status_code'] = "success";

        header('Location: register-log.php');
        exit(0);
    }
    else
    {
        $_SESSION['status'] = "Error!";
        $_SESSION['status_detail'] = "Can not delete data";
        $_SESSION['status_code'] = "error";

        header('Location: register-log.php');
        exit(0);

    }
    
    
}

// update
if (isset($_POST['update_user'])) 
{
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role_as = $_POST['role_as'];
    $status = $_POST['status'] == true ? '1':'0';

    $query = "UPDATE user SET email='$email' , password='$password' , role_as='$role_as' , status='$status' 
                WHERE id='$user_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Successfully!";
        $_SESSION['status_detail'] = "Successfully changing data";
        $_SESSION['status_code'] = "success";

        header('Location: register-log.php');
        exit(0);
    }

}

?>