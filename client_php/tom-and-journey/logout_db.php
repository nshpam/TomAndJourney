<?php 
    session_start();
    include('admin/config/server.php');

    if(isset($_POST['logout_btn']))
    {
       // session_destroy();
        unset($_SESSION['auth']);
        
        

        $_SESSION['status'] = "Logout Successfully!";
        $_SESSION['status_detail'] = "Logout Successfully!";
        $_SESSION['status_code'] = "success";
        header("location: index.php");
        exit(0);

    }

    if(isset($_POST['edit_email']))
    {
       
        
        header("location: edit_profile_email.php");
        

    }

    if(isset($_POST['edit_pass']))
    {
       
        
        header("location: edit_profile_pass.php");
        

    }
    

?>