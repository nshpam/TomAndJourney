<?php 
    session_start();
    include('server.php');

    if(isset($_POST['logout_btn']))
    {
       // session_destroy();
        unset($_SESSION['username']);
        

        $_SESSION['status'] = "Logout Successfully!";
        $_SESSION['status_detail'] = "Logout Successfully!";
        $_SESSION['status_code'] = "success";
        header("location: index.php");
        exit(0);

    }
    

?>