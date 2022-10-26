<?php
session_start();
include('config/server.php');



if(!isset($_SESSION['auth']))
{
    $_SESSION['status'] = "Cannot Go Admin Dashboard";
    $_SESSION['status_detail'] = "Please Login with Admin Account";
    $_SESSION['status_code'] = "error";
    
    header("location: ../home.php");

    exit(0);
}
else
{
    if($_SESSION['auth_role'] != "1")
    {
        $_SESSION['status'] = "Cannot Go Admin Dashboard";
        $_SESSION['status_detail'] = "Please Login with Admin Account";
        $_SESSION['status_code'] = "error";
        header("location: ../home.php");
        exit(0);
    }
}

?>