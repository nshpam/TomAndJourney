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
    } else if ($database_action == 'update_status') {
        return "UPDATE $database_name 
            SET $database_field[1]='$database_data[1]'  
            WHERE $database_field[0]='$database_data[0]' ";
    } else if ($database_action == 'update') {

        $count = 0;
        $update_cmd = "";

        while ($count != count($database_field)) {
            if ($count + 1 == count($database_field)) {
                $update_cmd .= "$database_field[$count]='$database_data[$count]' ";
                break;
            }
            $update_cmd .= " $database_field[$count]='$database_data[$count]',";
            $count++;
        }

        $final_update_cmd = "UPDATE $database_name 
        SET" . $update_cmd . "WHERE $database_field[0]=$database_data[0] ";

        return $final_update_cmd;
        // return "UPDATE $database_name 
        //     SET $database_field[1]='$database_data[1]' , 
        //     $database_field[2]='$database_data[2]' , 
        //     $database_field[3]='$database_data[3]' , 
        //     $database_field[4]='$database_data[4]' , 
        //     $database_field[5]='$database_data[5]' 
        //     WHERE $database_field[0]=$database_data[0] ";

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
    } else if ($database_action == 'add_locations') {
        if (isset($database_field[1]) && isset($database_field[2])) {

            return "INSERT INTO $database_name 
            ($database_field[0],
            $database_field[1],
            $database_field[2])
            VALUES ('$database_data[0]',
            '$database_data[1]',
            '$database_data[2]')";
        }
    } else if ($database_action == 'change_status') {
        if (isset($database_field[1]) && isset($database_field[2])) {
            return "UPDATE $database_name 
            SET $database_field[1]='$database_data[1]' , 
            $database_field[2]='$database_data[2]' , 
            $database_field[3]='$database_data[3]' , 
            $database_field[4]='$database_data[4]' , 
            $database_field[5]='$database_data[5]' 
            WHERE $database_field[0]=$database_data[0] ";
        }
    }
}

function joindatabase($main_db, $join_db, $field_to_compare, $field_to_join_1, $field_to_join_2, $field_to_join_3, $field_to_join_4, $field_to_join_5, $field_to_join_6)
{
    $sql = "SELECT $main_db.$field_to_compare, $join_db.$field_to_join_1, $join_db.$field_to_join_2, $join_db.$field_to_join_3, $join_db.$field_to_join_4, $join_db.$field_to_join_5, $join_db.$field_to_join_6
    FROM $main_db
    INNER JOIN $join_db
    ON $main_db.$field_to_compare = $join_db.$field_to_compare";

    // $sql = "SELECT map_location.type, hotel_location.name
    // FROM map_location
    // INNER JOIN hotel_location
    // ON map_location.type = hotel_location.type";

    return $sql;
}

// $sql = sql_command(
//     $database_table_6,
//     ['id', 'name', 'address', 'lat', 'lng', 'type'],
//     ['1', 'ไทยฟู้ดแอทสำราษฎร์ 1', 'ถนนราชดำเนินกลาง', '13.752291670976035', '100.50466082808123', 'food'],
//     'update'
// );

// echo $sql;

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

if (isset($_POST['delete_trip_set'])) {
    //collect trip planner id
    $trip_id = $_GET['id'];

    //database name
    $database_name = $database_table_14;

    //push field
    array_push($db_field_array, $database_table_2_id_field);

    //push data
    array_push($data_array, $trip_id);

    //action
    $database_action = 'delete';

    $query = sql_command($database_name, $db_field_array, $data_array, $database_action);

    $query_run = mysqli_query($conn, $query);


    if ($query_run) {
        //collect location id
        $location_id = $_GET['location_id'];
        $success = false;
        //delete locations

        for ($i = 0; $i < strlen($location_id); $i++) {
            //reset data_array;
            $data_array = array();
            if ($location_id[$i] != ',') {
                echo $location_id[$i];
                // die();
                //database name
                $database_name = $database_table_13;

                //push field
                array_push($db_field_array, $database_table_2_id_field);

                //push data
                array_push($data_array, $location_id[$i]);

                //action
                $database_action = 'delete';

                $query_1 = sql_command($database_name, $db_field_array, $data_array, $database_action);

                $query_run_1 = mysqli_query($conn, $query_1);
                if ($query_run_1) {
                    $success = true;
                }
            }
        }
        if ($success == true) {
            $_SESSION['status'] = "Successfully!";
            $_SESSION['status_detail'] = "Successfully delete data";
            $_SESSION['status_code'] = "success";

            header('location: create-trip.php');

            exit(0);
        } else {
            $_SESSION['status'] = "Error!";
            $_SESSION['status_detail'] = "Can not delete data";
            $_SESSION['status_code'] = "error";

            header('location: create-trip.php');
            exit(0);
        }
    } else {
        $_SESSION['status'] = "Error!";
        $_SESSION['status_detail'] = "Can not delete data";
        $_SESSION['status_code'] = "error";

        header('location: create-trip.php');
        exit(0);
    }
}

// update
if (isset($_POST['update_trip'])) {
    $location_id = trim($_POST['location_id']);
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

//insert to database
if (isset($_POST['ajax']) && isset($_POST['insert_location_set'])) {
    $id_arr = $_POST['id_list'];

    // echo $id_arr;
    // die();

    // echo gettype($id_arr);
    // print_r(gettype($id_arr[0]));
    // die();

    // $id_arr = json_encode($_POST['id_list'], JSON_UNESCAPED_UNICODE);
    // echo $id_arr;

    // die();
    $trip_name = $_POST['trip_name'];

    //push field
    array_push($db_field_array, 'NONE');

    //push data
    array_push($data_array, 'NONE');

    //action
    $database_action = 'check';

    $sql = sql_command($database_table_14, $db_field_array, $data_array, $database_action);
    $query = mysqli_query($conn, $sql);

    //generate the id
    $id = 1;

    while ($row = mysqli_fetch_row($query)) {
        if ($row[1] == $trip_name) {
            array_push($errors, "Name of the trip already exists");
        }
        $id++;
    }

    //insert id array to database
    if ($query) {

        //reset the array
        $data_array = array();
        $db_field_array = array();
        $id_data = array();

        //push field
        array_push(
            $db_field_array,
            $database_table_2_id_field,
            $database_table_14_tripname_field,
            $database_table_14_tripnum_field,
        );


        // $id_data = array(
        //     'id_array' => $id_arr,
        // );

        //push data
        array_push(
            $data_array,
            $id,
            $trip_name,
            $id_arr,
            // stripslashes(json_encode($id_data, JSON_UNESCAPED_UNICODE)),
        );

        //action
        $database_action = 'add_locations';

        $sql = sql_command($database_table_14, $db_field_array, $data_array, $database_action);
        $query_2 = mysqli_query($conn, $sql);
        if ($query_2) {
            //change status on trip_locations database

            //reset the array
            $data_array = array();
            $db_field_array = array();

            //push field
            array_push(
                $db_field_array,
                $database_table_2_id_field,
                $database_table_13_status_field,
            );

            // print_r(count(json_decode($id_arr)));
            for ($i = 0; $i < strlen($id_arr); $i++) {

                $data_array = array();

                // echo $id_arr[$i];
                // die();

                if ($id_arr != ',') {
                    //push data
                    array_push(
                        $data_array,
                        $id_arr[$i],
                        // json_decode($id_arr)[$i],
                        '1',
                    );
                }


                //action
                $database_action = 'update_status';

                //insert id array to database
                $sql = sql_command($database_table_13, $db_field_array, $data_array, $database_action);
                $query_3 = mysqli_query($conn, $sql);
            }

            if ($query_3) {
                $_SESSION['status'] = "Successfully!";
                $_SESSION['status_detail'] = "Trip insertion success";
                $_SESSION['status_code'] = "success";
                echo 'success';
                // header('location: add-create-trip.php');
            }
        } else {
            $_SESSION['status'] = "Cannot update the data";
            $_SESSION['status_detail'] = "Please try again later";
            $_SESSION['status_code'] = "error";
            echo 'failed';
            // header('location: add-create-trip.php');
            exit(0);
        }
    }
}

if (isset($_POST['ajax']) && isset($_POST['confirm_add_trip'])) {
    if ($_POST['confirm_add_trip'] == 'true') {
        $_SESSION['status'] = "Success!";
        $_SESSION['status_detail'] = "Trip added";
        $_SESSION['status_code'] = "success";
        echo 'success';
    } else {
        $_SESSION['status'] = "Failed!";
        $_SESSION['status_detail'] = "Invalid trip set";
        $_SESSION['status_code'] = "error";
        echo 'failed';
    }

    exit();
}

//join data
if (isset($_POST['ajax']) && isset($_POST['get_trip_info'])) {
    //reset all array
    $data_array = array();
    // $send_array =

    //get id array
    $database_name = $database_table_14;
    $database_field = 'NONE';
    $database_data = 'NONE';
    $database_action = 'check';

    $sql = sql_command($database_name, $database_field, $database_data, $database_action);
    $query = mysqli_query($conn, $sql);

    if ($query) {
        // echo '{"name":"Sammy","email":"sammy@example.com","plan":"Pro"}';
        // echo '{"name":"Sammy"}';

        // echo "{"1":{"id_array":"["1","2"]"}}";
        // echo '{"1":["1","2"]}';
        // echo '{"1":["1","2"],}';

        // $count_id = 0;

        // while ($lengths = mysqli_fetch_lengths($query)) {
        //     echo "lengths:" . $lengths[0];
        // }

        $data_array_1 = array();
        // echo '{';
        while ($row = mysqli_fetch_row($query)) {

            $data_1 = array(
                'id' => $row[0],
                'name' => $row[1],
                'id_list' => substr($row[2], 0, -1),
            );
            array_push(
                $data_array_1,
                $data_1,
            );

            // echo '"' . $row[0] . '":' . $row[2];

            // echo ',';
        }
        $test1 = json_encode($data_array_1, JSON_UNESCAPED_SLASHES);
        echo $test1;

        // echo '}';
        // array_push(
        //     $data_array,
        // );
        // for ($i = 0; $i < count($db_array); $i++) {
        // $sql = joindatabase($database_table_14, $database_table_13, $database_table_14_tripnum_field, $database_table_2_id_field, $database_table_2_name_field, $database_table_2_address_field, $database_table_2_lat_field, $database_table_2_lng_field, $database_table_2_type_field);
        // echo $sql;
    }

    exit();
}
