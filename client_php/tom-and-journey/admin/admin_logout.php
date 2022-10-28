<?php 
    include('config/authentication.php');

    if(isset($_POST['logout_btn']))
    {
       // session_destroy();
        unset($_SESSION['auth']);
        
        

        $_SESSION['status'] = "Logout Successfully!";
        $_SESSION['status_detail'] = "Logout Successfully!";
        $_SESSION['status_code'] = "success";
        header("location: home.php");
        exit(0);

    }
    

?>