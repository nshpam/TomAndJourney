

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
$database_table_2_lat_field = "lat";
$database_table_2_lng_field = "lng";
$database_table_2_type_field = "type";

//photo table
$database_table_3 = "photo_location";

//hotel table
$database_table_4 = "hotel_location";

//pump table
$database_table_5 = "pump_location";

//food table
$database_table_6 = "food_location";

//train table
$database_table_7 = "train_location";

//museum table
$database_table_8 = "museum_location";

//market table
$database_table_9 = "market_location";

//anchor table
$database_table_10 = "anchor_location";

//cafe table
$database_table_11 = "cafe_location";

//bar table
$database_table_12 = "bar_location";

$database_table_13 = "trip_locations";
$database_table_13_status_field = "status";
