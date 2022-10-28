<?php
include('config/authentication.php');


// cancel
if (isset($_POST['cancel'])) 
{
    header('Location: map-log.php');
        exit(0);
    
}

// user delete
if (isset($_POST['map_delete'])) 
{
    $user_id = $_POST['map_delete'];
    $query = "DELETE FROM map_location WHERE id='$user_id' ";
    $query_run = mysqli_query($conn, $query);


    if($query_run)
    {
        $_SESSION['status'] = "Successfully!";
        $_SESSION['status_detail'] = "Successfully delete data";
        $_SESSION['status_code'] = "success";

        header('Location: map-log.php');
        exit(0);
    }
    else
    {
        $_SESSION['status'] = "Error!";
        $_SESSION['status_detail'] = "Can not delete data";
        $_SESSION['status_code'] = "error";

        header('Location: map-log.php');
        exit(0);

    }
    
    
}

// update
if (isset($_POST['update_map'])) 
{
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];
    $type = $_POST['type'];

    $query = "UPDATE map_location SET name='$name' , address='$address' , lat='$lat' , lng='$lng' , type='$type' 
                WHERE id='$user_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Successfully!";
        $_SESSION['status_detail'] = "Successfully changing data";
        $_SESSION['status_code'] = "success";

        header('Location: map-log.php');
        exit(0);
    }

}


// adding
$errors = array();

if (isset($_POST['add_map'])) {
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $lat = mysqli_real_escape_string($conn, $_POST['lat']);
    $lng = mysqli_real_escape_string($conn, $_POST['lng']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);


    if (empty($name)) {
        array_push($errors, "Name is required");
        $_SESSION['error'] = "Name is required";
    }
    if (empty($lat)) {
        array_push($errors, "Latitude is required");
        $_SESSION['error'] = "Latitude is required";
    }
    if (empty($lng)) {
        array_push($errors, "Longitude is required");
        $_SESSION['error'] = "Longitude is required";
    }
    
    $user_check_query = "SELECT * FROM map_location WHERE name = '$name' LIMIT 1";
    $query = mysqli_query($conn, $user_check_query);
    $result = mysqli_fetch_assoc($query);

    if ($result) { // if user exists
        if ($result['name'] === $name) {
            array_push($errors, "Name already exists");
        }
        
    }

    if (count($errors) == 0) {
        
        $sql = "INSERT INTO map_location (name,address,lat,lng,type) VALUES ('$name','$address','$lat','$lng','$type')";
        mysqli_query($conn, $sql);
        
        $_SESSION['status'] = "Congratulations!";
        $_SESSION['status_detail'] = "Successfully add Map!";
        $_SESSION['status_code'] = "success";
        
        header('location: map-log.php');
    } else {

        $_SESSION['status'] = "Data Not Registerd";
        $_SESSION['status_detail'] = "Please Inserted Map";
        $_SESSION['status_code'] = "error";
        header("location: map-log.php");
    }
}

?>