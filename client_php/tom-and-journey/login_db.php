<?php 
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        

        
        if (empty($username)) {
            array_push($errors, "Username is required");
        }

        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $password = ($password);
            $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) == 1) {
                $_SESSION['username'] = $username;
                
                
                foreach($result as $data){
                    $user_id = $data['id'];
                    $user_name = $data['username'];
                    $user_email = $data['email'];
                    $user_password = $data['password'];
                    $role_as = $data['role_as'];
                }
                $_SESSION['auth'] = true;
                $_SESSION['auth_role'] = $role_as; // 1 = admin , 0 = user
                $_SESSION['auth_user'] = [
                    'user_id' => $user_id,
                    'user_name' => $user_name,
                    'user_email' => $user_email,
                    'user_password' => $user_password,

                ];

                if($_SESSION['auth_role'] == '1') // admin
                {
                    // alert
                $_SESSION['status'] = "Successfully!";
                $_SESSION['status_detail'] = "Your are logged in Admin Dashboard";
                $_SESSION['status_code'] = "success";

                header("location: admin/index.php");

                }
                elseif($_SESSION['auth_role'] == '0') //user
                {
                    // alert
                $_SESSION['status'] = "Successfully!";
                $_SESSION['status_detail'] = "Your are now logged in";
                $_SESSION['status_code'] = "success";

                header("location: home.php");

                }

                
                
            } else {
                array_push($errors, "Wrong Username or Password");
                $_SESSION['error'] = "Wrong Username or Password!";

                $_SESSION['status'] = "Login not Successfully!";
                $_SESSION['status_detail'] = "Wrong Username or Password!";
                $_SESSION['status_code'] = "error";

                header("location: index.php");
            }
        } else {
            array_push($errors, "Username & Password is required");
            $_SESSION['error'] = "Username & Password is required";

            $_SESSION['status'] = "Login not Successfully!";
            $_SESSION['status_detail'] = "Username & Password is required";
            $_SESSION['status_code'] = "error";

            header("location: index.php");
        }

        
        
    }
    

?>
