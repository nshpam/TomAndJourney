<?php

// version
$VERSION = "1.0.0";
$MAP_ORIGIN = [13.7520, 100.4917];

//page url
$trip_url = "http://localhost:8080/tom-and-journey/trip.php";

//database config
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register_db";

//user table
$database_table_1 = "user";
$database_table_1_id_field = "id";
$database_table_1_username_field = "username";
$database_table_1_email_field = "email";
$database_table_1_password_field = "password";
$database_table_1_role_as_field = "role_as";
$database_table_1_status_field = "status";
$database_table_1_created_at_field = "created_at";

//map table
$database_table_2 = "map_location";
$database_table_2_id_field = "id";
$database_table_2_name_field = "name";
$database_table_2_address_field = "address";
$database_table_2_image_field = "image";
$database_table_2_lat_field = "lat";
$database_table_2_lng_field = "lng";
$database_table_2_type_field = "type";
