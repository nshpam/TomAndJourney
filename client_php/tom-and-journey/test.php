<?php

include('config.php');
$conn = mysqli_connect($servername, $username, $password, $dbname);

$content = json_decode(trim(file_get_contents('php://input')), true);

if (isset($content["id"]) && isset($content["name"])) {

    // echo 'receive the data';
    // $username = $content['username'];
    // $password = $content['password'];
    // $email = $content['email'];
    // $role_as = $content['role'];
    // $status = $content['status'];

    // $sql = "INSERT INTO user (username,email,password,role_as,status) VALUES ('$username','$email','$password','$role_as','$status')";
    // $query = mysqli_query($conn, $sql);

    // if ($query) {
    echo 'DELETE success';
    // } else {
    // echo 'POST request failed';
    // }
}

// $sql = "INSERT INTO user (username,email,password,role_as,status) VALUES ('$username','$email','$password','$role_as','$status')";
// mysqli_query($conn, $sql);

// $sql = "SELECT * FROM $database_table_2";
// $query = mysqli_query($conn, $sql);

// $data_array = array();

// while ($row = mysqli_fetch_row($query)) {
//     $data = array(
//         // 'id' => $row[0],
//         // 'name' => $row[1],
//         // 'address' => $row[2],
//         // 'lat' => $row[3],
//         // 'lng' => $row[4],
//         'type' => $row[5],
//     );
//     array_push(
//         $data_array,
//         $data
//     );
// }

// echo json_encode($data_array);
