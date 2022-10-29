<?php
include('config/authentication.php');
include('../config.php');
if (!isset($_SESSION)) {
    session_start();
}


// cancel
if (isset($_POST['cancel'])) {
    header('Location: map-log.php');
    exit(0);
}

// user delete
if (isset($_POST['map_delete'])) {
    $location_id = $_POST['map_delete'];
    $query = "DELETE FROM map_location WHERE id='$location_id' ";
    $query_run = mysqli_query($conn, $query);


    if ($query_run) {
        $_SESSION['status'] = "Successfully!";
        $_SESSION['status_detail'] = "Successfully delete data";
        $_SESSION['status_code'] = "success";

        header('Location: map-log.php');
        exit(0);
    } else {
        $_SESSION['status'] = "Error!";
        $_SESSION['status_detail'] = "Can not delete data";
        $_SESSION['status_code'] = "error";

        header('Location: map-log.php');
        exit(0);
    }
}

// update
if (isset($_POST['update_map'])) {
    $location_id = $_POST['location_id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];
    $type = $_POST['type'];

    if (isset($_GET['location'])) {
        if ($_GET['location'] == 'photo') {
            //update photo_location
            $query = "UPDATE $database_table_3 
        SET $database_table_2_name_field='$name' , 
        $database_table_2_address_field='$address' , 
        $database_table_2_lat_field='$lat' , 
        $database_table_2_lng_field='$lng' , 
        $database_table_2_type_field='$type' 
        WHERE $database_table_2_id_field=$location_id ";
        } else if ($_GET['location'] == 'hotel') {
            //update hotel_location

            $query = "UPDATE $database_table_4 
        SET $database_table_2_name_field='$name' , 
        $database_table_2_address_field='$address' , 
        $database_table_2_lat_field='$lat' , 
        $database_table_2_lng_field='$lng' , 
        type='$type' 
        WHERE $database_table_2_id_field=$location_id ";
        } else if ($_GET['location'] == 'pump') {
            //update pump_location

            $query = "UPDATE $database_table_5 
        SET $database_table_2_name_field='$name' , 
        $database_table_2_address_field='$address' , 
        $database_table_2_lat_field='$lat' , 
        $database_table_2_lng_field='$lng' , 
        type='$type' 
        WHERE $database_table_2_id_field=$location_id ";
        } else if ($_GET['location'] == 'food') {
            //update food_location

            $query = "UPDATE $database_table_6 
        SET $database_table_2_name_field='$name' , 
        $database_table_2_address_field='$address' , 
        $database_table_2_lat_field='$lat' , 
        $database_table_2_lng_field='$lng' , 
        type='$type' 
        WHERE $database_table_2_id_field=$location_id ";
        } else if ($_GET['location'] == 'train') {
            //update train_location

            $query = "UPDATE $database_table_7 
        SET $database_table_2_name_field='$name' , 
        $database_table_2_address_field='$address' , 
        $database_table_2_lat_field='$lat' , 
        $database_table_2_lng_field='$lng' , 
        type='$type' 
        WHERE $database_table_2_id_field=$location_id ";
        } else if ($_GET['location'] == 'museum') {
            //update museum_location

            $query = "UPDATE $database_table_8 
        SET $database_table_2_name_field='$name' , 
        $database_table_2_address_field='$address' , 
        $database_table_2_lat_field='$lat' , 
        $database_table_2_lng_field='$lng' , 
        type='$type' 
        WHERE $database_table_2_id_field=$location_id ";
        } else if ($_GET['location'] == 'market') {
            //update market_location

            $query = "UPDATE $database_table_9 
        SET $database_table_2_name_field='$name' , 
        $database_table_2_address_field='$address' , 
        $database_table_2_lat_field='$lat' , 
        $database_table_2_lng_field='$lng' , 
        type='$type' 
        WHERE $database_table_2_id_field=$location_id ";
        } else if ($_GET['location'] == 'anchor') {
            //update anchor_location

            $query = "UPDATE $database_table_10 
        SET $database_table_2_name_field='$name' , 
        $database_table_2_address_field='$address' , 
        $database_table_2_lat_field='$lat' , 
        $database_table_2_lng_field='$lng' , 
        type='$type' 
        WHERE $database_table_2_id_field=$location_id ";
        } else if ($_GET['location'] == 'cafe') {
            //update cafe_location

            $query = "UPDATE $database_table_11 
        SET $database_table_2_name_field='$name' , 
        $database_table_2_address_field='$address' , 
        $database_table_2_lat_field='$lat' , 
        $database_table_2_lng_field='$lng' , 
        type='$type' 
        WHERE $database_table_2_id_field=$location_id ";
        } else if ($_GET['location'] == 'bar') {
            //update bar_location

            $query = "UPDATE $database_table_12 
        SET $database_table_2_name_field='$name' , 
        $database_table_2_address_field='$address' , 
        $database_table_2_lat_field='$lat' , 
        $database_table_2_lng_field='$lng' , 
        type='$type' 
        WHERE $database_table_2_id_field=$location_id ";
        }
    } else {
        //update map_location
        $query = "UPDATE $database_table_2 
        SET $database_table_2_name_field='$name' , 
        $database_table_2_address_field='$address' , 
        $database_table_2_lat_field='$lat' , 
        $database_table_2_lng_field='$lng' , 
        $database_table_2_type_field='$type' 
        WHERE $database_table_2_id_field='$location_id' ";
    }
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['status'] = "Successfully!";
        $_SESSION['status_detail'] = "Successfully changing data";
        $_SESSION['status_code'] = "success";

        header('Location: map-log.php');
        exit(0);
    } else {
        $_SESSION['status'] = "Cannot update the data";
        $_SESSION['status_detail'] = "Please try again later";
        $_SESSION['status_code'] = "error";

        header('Location: map-log.php');
        exit(0);
    }
}


// adding
$errors = array();

if (isset($_POST['add_map'])) {
    // $location_id = $_POST['location_id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];
    $type = $_POST['type'];


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

    //check database
    if (isset($_GET['location'])) {
        if ($_GET['location'] == 'photo') {
            $user_check_query = "SELECT * FROM $database_table_3 WHERE $database_table_2_name_field = '$name' LIMIT 1";
        } elseif ($_GET['location'] == 'hotel') {

            $user_check_query = "SELECT * FROM $database_table_4 WHERE $database_table_2_name_field = '$name' LIMIT 1";
        } elseif ($_GET['location'] == 'pump') {

            $user_check_query = "SELECT * FROM $database_table_5 WHERE $database_table_2_name_field = '$name' LIMIT 1";
        } elseif ($_GET['location'] == 'food') {

            $user_check_query = "SELECT * FROM $database_table_6 WHERE $database_table_2_name_field = '$name' LIMIT 1";
        } elseif ($_GET['location'] == 'train') {

            $user_check_query = "SELECT * FROM $database_table_7 WHERE $database_table_2_name_field = '$name' LIMIT 1";
        } elseif ($_GET['location'] == 'museum') {

            $user_check_query = "SELECT * FROM $database_table_8 WHERE $database_table_2_name_field = '$name' LIMIT 1";
        } elseif ($_GET['location'] == 'market') {

            $user_check_query = "SELECT * FROM $database_table_9 WHERE $database_table_2_name_field = '$name' LIMIT 1";
        } elseif ($_GET['location'] == 'anchor') {

            $user_check_query = "SELECT * FROM $database_table_10 WHERE $database_table_2_name_field = '$name' LIMIT 1";
        } elseif ($_GET['location'] == 'cafe') {

            $user_check_query = "SELECT * FROM $database_table_11 WHERE $database_table_2_name_field = '$name' LIMIT 1";
        } elseif ($_GET['location'] == 'bar') {
            $user_check_query = "SELECT * FROM $database_table_12 WHERE $database_table_2_name_field = '$name' LIMIT 1";
        }
    } else {
        $user_check_query = "SELECT * FROM $database_table_2 WHERE $database_table_2_name_field = '$name' LIMIT 1";
    }

    $query = mysqli_query($conn, $user_check_query);
    $id = 1;
    // $result = mysqli_fetch_assoc($query);

    // if ($result) { // if user exists
    //     if ($result['name'] === $name) {
    //         array_push($errors, "Name already exists");
    //     }
    // }

    while ($row = mysqli_fetch_row($query)) {
        if ($row[1] === $name) {
            array_push($errors, "Name already exists");
        }
        $id++;
    }

    //insert to database
    if (isset($_GET['location'])) {
        if ($_GET['location'] == 'photo') {

            $sql = "INSERT INTO $database_table_3 ($database_table_2_id_field,$database_table_2_name_field,$database_table_2_address_field,$database_table_2_lat_field,$database_table_2_lng_field,$database_table_2_type_field) VALUES ('$id','$name','$address','$lat','$lng','$type')";
        } elseif ($_GET['location'] == 'hotel') {

            $sql = "INSERT INTO $database_table_4 ($database_table_2_id_field,$database_table_2_name_field,$database_table_2_address_field,$database_table_2_lat_field,$database_table_2_lng_field,$database_table_2_type_field) VALUES ('$id','$name','$address','$lat','$lng','$type')";
        } elseif ($_GET['location'] == 'pump') {

            $sql = "INSERT INTO $database_table_5 ($database_table_2_id_field,$database_table_2_name_field,$database_table_2_address_field,$database_table_2_lat_field,$database_table_2_lng_field,$database_table_2_type_field) VALUES ('$id','$name','$address','$lat','$lng','$type')";
        } elseif ($_GET['location'] == 'food') {

            $sql = "INSERT INTO $database_table_6 ($database_table_2_id_field,$database_table_2_name_field,$database_table_2_address_field,$database_table_2_lat_field,$database_table_2_lng_field,$database_table_2_type_field) VALUES ('$id','$name','$address','$lat','$lng','$type')";
        } elseif ($_GET['location'] == 'train') {

            $sql = "INSERT INTO $database_table_7 ($database_table_2_id_field,$database_table_2_name_field,$database_table_2_address_field,$database_table_2_lat_field,$database_table_2_lng_field,$database_table_2_type_field) VALUES ('$id','$name','$address','$lat','$lng','$type')";
        } elseif ($_GET['location'] == 'museum') {

            $sql = "INSERT INTO $database_table_8 ($database_table_2_id_field,$database_table_2_name_field,$database_table_2_address_field,$database_table_2_lat_field,$database_table_2_lng_field,$database_table_2_type_field) VALUES ('$id','$name','$address','$lat','$lng','$type')";
        } elseif ($_GET['location'] == 'market') {

            $sql = "INSERT INTO $database_table_9 ($database_table_2_id_field,$database_table_2_name_field,$database_table_2_address_field,$database_table_2_lat_field,$database_table_2_lng_field,$database_table_2_type_field) VALUES ('$id','$name','$address','$lat','$lng','$type')";
        } elseif ($_GET['location'] == 'anchor') {

            $sql = "INSERT INTO $database_table_10 ($database_table_2_id_field,$database_table_2_name_field,$database_table_2_address_field,$database_table_2_lat_field,$database_table_2_lng_field,$database_table_2_type_field) VALUES ('$id','$name','$address','$lat','$lng','$type')";
        } elseif ($_GET['location'] == 'cafe') {

            $sql = "INSERT INTO $database_table_11 ($database_table_2_id_field,$database_table_2_name_field,$database_table_2_address_field,$database_table_2_lat_field,$database_table_2_lng_field,$database_table_2_type_field) VALUES ('$id','$name','$address','$lat','$lng','$type')";
        } elseif ($_GET['location'] == 'bar') {

            $sql = "INSERT INTO $database_table_12 ($database_table_2_id_field,$database_table_2_name_field,$database_table_2_address_field,$database_table_2_lat_field,$database_table_2_lng_field,$database_table_2_type_field) VALUES ('$id','$name','$address','$lat','$lng','$type')";
        }
    } else {

        $sql = "INSERT INTO $database_table_2 ($database_table_2_name_field,$database_table_2_address_field,$database_table_2_lat_field,$database_table_2_lng_field,$database_table_2_type_field) VALUES ('$name','$address','$lat','$lng','$type')";
    }
    if (count($errors) == 0) {
        mysqli_query($conn, $sql);

        $_SESSION['status'] = "Congratulations!";
        $_SESSION['status_detail'] = "Successfully add Map!";
        $_SESSION['status_code'] = "success";

        header('location: map-log.php');
    } else {

        $_SESSION['status'] = "Data Not Registerd";
        $_SESSION['status_detail'] = "Please Insert Map";
        $_SESSION['status_code'] = "error";
        header("location: map-log.php");
    }
}
