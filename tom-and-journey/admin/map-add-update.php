<?php
include('config/authentication.php');
include('../config.php');
// include('config/alert_box.php');

if (!isset($_SESSION)) {
    session_start();
}

//[id, name, address, lat, lng, type]
$data_array = array();
$db_field_array = array();

//error array
$errors = array();

//location delete, update, add sql command
function sql_command($database_name, $database_field, $database_data, $database_action)
{
    //check action
    if ($database_action == 'check') {
        return "SELECT * FROM $database_name";
    }

    if ($database_name != 'map_location') {
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
            return "INSERT INTO $database_name 
            ($database_field[0],
            $database_field[1],
            $database_field[2],
            $database_field[3],
            $database_field[4],
            $database_field[5]) 
            VALUES ('$database_data[0]',
            '$database_data[1]',
            '$database_data[2]',
            '$database_data[3]',
            '$database_data[4]',
            '$database_data[5]')";
        }
    }
    //all database
    else {
        if ($database_action == 'delete') {
            return "DELETE FROM $database_name WHERE $database_field[0]='$database_data[0]' ";
        } else if ($database_action == 'update') {
            return "UPDATE $database_name 
            SET $database_field[1]='$database_data[1]' , 
            $database_field[2]='$database_data[2]' , 
            $database_field[3]='$database_data[3]' , 
            $database_field[4]='$database_data[4]' , 
            $database_field[5]='$database_data[5]' 
            WHERE $database_field[0]='$database_data[0]' ";
        } else if ($database_action == 'add') {
            return "INSERT INTO $database_name 
            ($database_field[1],
            $database_field[2],
            $database_field[3],
            $database_field[4],
            $database_field[5]) 
            VALUES ('$database_data[1]',
            '$database_data[2]',
            '$database_data[3]',
            '$database_data[4]',
            '$database_data[5]')";
        }
    }
}

// user delete
if (isset($_POST['map_delete'])) {

    //collect location id
    $location_id = $_POST['map_delete'];

    if (isset($_GET['location'])) {

        //database name
        $database_name = $_GET['location'] . '_location';

        //push field
        array_push($db_field_array, $database_table_2_id_field);

        //push data
        array_push($data_array, $location_id);

        //action
        $database_action = 'delete';

        $query = sql_command($database_name, $db_field_array, $data_array, $database_action);
    } else {

        //database name
        $database_name = $database_table_2;

        //push field
        array_push($db_field_array, $database_table_2_id_field);

        //push data
        array_push($data_array, $location_id);

        //action
        $database_action = 'delete';

        $query = sql_command($database_name, $db_field_array, $data_array, $database_action);
    }
    $query_run = mysqli_query($conn, $query);


    if ($query_run) {
        $_SESSION['status'] = "Successfully!";
        $_SESSION['status_detail'] = "Successfully delete data";
        $_SESSION['status_code'] = "success";

        if (isset($_GET['location'])) {
            header('location: location-table.php?location=' . $_GET['location']);
        } else {
            header('location: map-log.php');
        }
        exit(0);
    } else {
        $_SESSION['status'] = "Error!";
        $_SESSION['status_detail'] = "Can not delete data";
        $_SESSION['status_code'] = "error";

        if (isset($_GET['location'])) {
            header('location: location-table.php?location=' . $_GET['location']);
        } else {
            header('location: map-log.php');
        }
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
        //database name
        $database_name = $_GET['location'] . '_location';

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
    } else {
        //database name
        $database_name = $database_table_2;

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
    }

    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['status'] = "Successfully!";
        $_SESSION['status_detail'] = "Successfully changing data";
        $_SESSION['status_code'] = "success";

        if (isset($_GET['location'])) {
            header('location: location-table.php?location=' . $_GET['location']);
        } else {
            header('location: map-log.php');
        }
        exit(0);
    } else {
        $_SESSION['status'] = "Cannot update the data";
        $_SESSION['status_detail'] = "Please try again later";
        $_SESSION['status_code'] = "error";

        if (isset($_GET['location'])) {
            header('location: location-table.php?location=' . $_GET['location']);
        } else {
            header('location: map-log.php');
        }
        exit(0);
    }
}


//adding
if (isset($_POST['add_map'])) {
    // $location_id = $_POST['location_id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];


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

        //type
        $type = $_GET['location'];

        //database name
        $database_name = $_GET['location'] . "_location";

        //push field
        array_push($db_field_array, 'NONE');

        //push data
        array_push($data_array, 'NONE');

        //action
        $database_action = 'check';

        $sql = sql_command($database_name, $db_field_array, $data_array, $database_action);
    } else {

        //type
        $type = $_POST['type'];
        //database name
        $database_name = $database_table_2;

        //reset array
        $db_field_array = array();
        $data_array = array();

        //push field
        array_push($db_field_array, 'NONE');

        //push data
        array_push($data_array, 'NONE');

        //action
        $database_action = 'check';

        $sql = sql_command($database_name, $db_field_array, $data_array, $database_action);
    }

    //run command
    $query = mysqli_query($conn, $sql);
    $id = 1;

    while ($row = mysqli_fetch_row($query)) {
        if ($row[1] == $name) {
            array_push($errors, "Name already exists");
        }
        $id++;
    }

    //insert to database

    if (isset($_GET['location'])) {

        //database name
        $database_name = $_GET['location'] . "_location";

        //reset array
        $db_field_array = array();
        $data_array = array();

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
            $id,
            $name,
            $address,
            $lat,
            $lng,
            $type
        );

        //action
        $database_action = 'add';

        $query = sql_command($database_name, $db_field_array, $data_array, $database_action);
    } else {

        //reset array
        $db_field_array = array();
        $data_array = array();
        //database name
        $database_name = $database_table_2;

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
            $id,
            $name,
            $address,
            $lat,
            $lng,
            $type
        );

        //action
        $database_action = 'add';


        $query = sql_command($database_name, $db_field_array, $data_array, $database_action);
    }

    if (count($errors) == 0) {
        mysqli_query($conn, $query);

        $_SESSION['status'] = "Congratulations!";
        $_SESSION['status_detail'] = "Successfully add Map!";
        $_SESSION['status_code'] = "success";

        if (isset($_GET['location'])) {
            header('location: location-table.php?location=' . $_GET['location']);
        } else {
            header('location: map-log.php');
        }
    } else {

        $_SESSION['status'] = "Data Not Registerd";
        $_SESSION['status_detail'] = "Please Insert Map";
        $_SESSION['status_code'] = "error";
        if (isset($_GET['location'])) {
            header('location: location-table.php?location=' . $_GET['location']);
        } else {
            header('location: map-log.php');
        }
    }
}
