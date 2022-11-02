<?php
//import config file
include('config.php');

//connect to db
$conn = mysqli_connect($servername, $username, $password, $dbname);
$db_data = array();

if ($conn) {

    //get data from photo_location database
    $sql = "SELECT * FROM $database_table_3";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        while ($row = mysqli_fetch_row($query)) {
            $data = array(
                "test1" => 'AMD',
                "test2" => 'INTEL',
            );
            array_push(
                $db_data,
                $data
            );
        }
    }
}


// $db_data = array();
// $data = array(
//     "test1" => 'AMD',
//     "test2" => 'INTEL',
// );
// array_push(
//     $db_data,
//     $data
// );
// echo json_encode($db_data);