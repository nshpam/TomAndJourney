<?php
include('config/authentication.php');
include('../config.php');

if (!isset($_SESSION)) {
    session_start();
}

//[id, name, address, lat, lng, type]
$data_array = array();
$db_field_array = array();

$data_arr = array();
$trip_arr = array();

//error array
$errors = array();

//location delete, update, add sql command
function sql_command($database_name, $database_field, $database_data, $database_action)
{
    //check action
    if ($database_action == 'check') {
        return "SELECT * FROM $database_name";
    }

    //delete action
    if ($database_action == 'delete') {
        return "DELETE FROM $database_name WHERE $database_field[0]=$database_data[0]";

        //update action
    } else if ($database_action == 'update') {
        return "UPDATE $database_name 
            SET $database_field[1]='$database_data[1]' , 
            $database_field[2]='$database_data[2]' , 
            $database_field[3]='$database_data[3]' , 
            $database_field[4]='$database_data[4]' , 
            $database_field[5]='$database_data[5]' 
            WHERE $database_field[0]=$database_data[0] ";

        //add action
    } else if ($database_action == 'add') {
        if (isset($database_field[6]) && isset($database_data[6])) {
            return "INSERT INTO $database_name 
            ($database_field[0],
            $database_field[1],
            $database_field[2],
            $database_field[3],
            $database_field[4],
            $database_field[5],
            $database_field[6]) 
            VALUES ('$database_data[0]',
            '$database_data[1]',
            '$database_data[2]',
            '$database_data[3]',
            '$database_data[4]',
            '$database_data[5]',
            '$database_data[6]')";
        }
    }
}

// user delete
if (isset($_POST['delete_trip'])) {

    //collect location id
    $location_id = $_POST['delete_trip'];

    //database name
    $database_name = $database_table_13;

    //push field
    array_push($db_field_array, $database_table_2_id_field);

    //push data
    array_push($data_array, $location_id);

    //action
    $database_action = 'delete';

    $query = sql_command($database_name, $db_field_array, $data_array, $database_action);

    $query_run = mysqli_query($conn, $query);


    if ($query_run) {
        $_SESSION['status'] = "Successfully!";
        $_SESSION['status_detail'] = "Successfully delete data";
        $_SESSION['status_code'] = "success";

        header('location: add-create-trip.php');

        exit(0);
    } else {
        $_SESSION['status'] = "Error!";
        $_SESSION['status_detail'] = "Can not delete data";
        $_SESSION['status_code'] = "error";

        header('location: add-create-trip.php');
        exit(0);
    }
}

// update
if (isset($_POST['update_trip'])) {
    $location_id = $_POST['location_id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];
    $type = $_POST['type'];


    //database name
    $database_name = $database_table_13;

    //push field
    array_push(
        $db_field_array,
        $database_table_2_id_field,
        $database_table_2_name_field,
        $database_table_2_address_field,
        $database_table_2_lat_field,
        $database_table_2_lng_field,
        $database_table_2_type_field
    );

    //push data
    array_push(
        $data_array,
        $location_id,
        $name,
        $address,
        $lat,
        $lng,
        $type
    );

    //action
    $database_action = 'update';

    $query = sql_command($database_name, $db_field_array, $data_array, $database_action);

    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['status'] = "Successfully!";
        $_SESSION['status_detail'] = "Successfully changing data";
        $_SESSION['status_code'] = "success";

        header('location: add-create-trip.php');

        exit(0);
    } else {
        $_SESSION['status'] = "Cannot update the data";
        $_SESSION['status_detail'] = "Please try again later";
        $_SESSION['status_code'] = "error";

        header('location: add-create-trip.php');
        exit(0);
    }
}


//adding
if (isset($_POST['add_mark'])) {
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

    //push field
    array_push($db_field_array, 'NONE');

    //push data
    array_push($data_array, 'NONE');

    //action
    $database_action = 'check';

    //get id
    $sql = sql_command($database_table_13, $db_field_array, $data_array, $database_action);
    $query = mysqli_query($conn, $sql);
    $id = 1;

    if ($query) {
        while ($row = mysqli_fetch_row($query)) {
            if ($row[1] == $name) {
                array_push($errors, "Name already exists");
            }
            $id++;
        }

        //reset the array
        $data_array = array();
        $db_field_array = array();

        //push field
        array_push(
            $db_field_array,
            $database_table_2_id_field,
            $database_table_2_name_field,
            $database_table_2_address_field,
            $database_table_2_lat_field,
            $database_table_2_lng_field,
            $database_table_2_type_field,
            $database_table_13_status_field,
        );

        //push data
        array_push(
            $data_array,
            $id,
            $name,
            $address,
            $lat,
            $lng,
            $type,
            "0"
        );

        $database_action = 'add';

        $sql_2 = sql_command($database_table_13, $db_field_array, $data_array, $database_action);
        $query_2 = mysqli_query($conn, $sql_2);

        if ($query_2) {
            $_SESSION['status'] = "Add request success.";
            $_SESSION['status_detail'] = "Data added to database.";
            $_SESSION['status_code'] = "success";
            header('location: add-create-trip.php');
        } else {
            $_SESSION['status'] = "Add request failed.";
            $_SESSION['status_detail'] = "Failed to add data to the database.";
            $_SESSION['status_code'] = "error";
            header('location: add-create-trip.php');
        }
    }
}