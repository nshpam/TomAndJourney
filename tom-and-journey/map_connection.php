<?php
//import config file
include('config.php');
session_start();
//connect to db
$conn = mysqli_connect($servername, $username, $password, $dbname);
$db_array = array();
$data_array = array();

function joindatabase($main_db, $join_db, $field_to_compare, $field_to_join_1, $field_to_join_2, $field_to_join_3)
{
    $sql = "SELECT $main_db.$field_to_compare, $join_db.$field_to_join_1, $join_db.$field_to_join_2, $join_db.$field_to_join_3
    FROM $main_db
    INNER JOIN $join_db
    ON $main_db.$field_to_compare = $join_db.$field_to_compare";

    // $sql = "SELECT map_location.type, hotel_location.name
    // FROM map_location
    // INNER JOIN hotel_location
    // ON map_location.type = hotel_location.type";

    return $sql;
}

if ($conn) {

    //push database name to array

    if (isset($_POST['get_map_filter'])) {
        $db_array = array();
        array_push(
            $db_array,
            $database_table_3,
            $database_table_4,
            $database_table_5,
            $database_table_6,
            $database_table_7,
            $database_table_8,
            $database_table_9,
            $database_table_10,
            $database_table_11,
            $database_table_12,
        );

        for ($i = 0; $i < count($db_array); $i++) {
            $sql = joindatabase($database_table_2, $db_array[$i], $database_table_2_type_field, $database_table_2_name_field, $database_table_2_lat_field, $database_table_2_lng_field);
            $query = mysqli_query($conn, $sql);

            if ($query) {
                while ($row = mysqli_fetch_row($query)) {
                    $data = array(
                        'type' => $row[0],
                        'name' => $row[1],
                        'lat' => $row[2],
                        'lng' => $row[3],
                    );
                    array_push(
                        $data_array,
                        $data
                    );
                }
            } else {
                echo 'failed';
                break;
            }
        }
        echo json_encode($data_array, JSON_UNESCAPED_UNICODE);
    }

    if (isset($_POST['get_map_info'])) {
        $ids = $_POST['id_array'];
        $db_array = array();

        // echo ($ids);
        for ($i = 0; $i < strlen($ids); $i++) {
            if ($ids[$i] != ',') {

                // echo $ids[$i];
                $sql_2 = "SELECT $database_table_14.$database_table_14_tripnum_field, $database_table_13.$database_table_2_id_field, $database_table_13.$database_table_2_name_field, $database_table_13.$database_table_2_address_field, $database_table_13.$database_table_2_lat_field, $database_table_13.$database_table_2_lng_field, $database_table_13.$database_table_2_type_field
                        FROM $database_table_14
                        INNER JOIN $database_table_13
                        ON " . $ids[$i] . "= $database_table_13.$database_table_2_id_field";


                $query_2 = mysqli_query($conn, $sql_2);
                if ($query_2) {

                    while ($row_2 = mysqli_fetch_row($query_2)) {
                        // echo $ids[$i] . ':';
                        // echo $row_2[1];
                        // echo '<br>';
                        if ($row_2[1] == $ids[$i]) {
                            $temp_data = array(
                                'name' =>  $row_2[2],
                                'address' =>  $row_2[3],
                                'lat' =>  $row_2[4],
                                'lng' =>  $row_2[5],
                            );
                            array_push(
                                $db_array,
                                $temp_data,
                            );
                            break;
                        }
                    }
                }
            }
        }
        echo json_encode($db_array, JSON_UNESCAPED_UNICODE);
    }
}
