<?php
include('header.php');
?>
<!-- /.navbar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">

    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">


        <div class="login-box-msg-group">
            <h1 class=" login-box-msg text-dark text-1">SIGN IN</h1>
            <p class="login-box-msg text-dark text-2">Sign in to your account</p>
        </div>

        <div id="form-frame">
            <form method="POST" id="login_form">
                <div class="input-group mb-3 input-group-1">

                    <div id="username-logo">
                        <i class="fas fa-user"></i>
                    </div>

                    <input type="text" class="form-control" placeholder="Username" id="username">

                </div>
                <div class="input-group mb-3 input-group-2">


                    <div id="password-logo">
                        <i class="fas fa-lock"></i>
                    </div>

                    <input type="password" class="form-control" placeholder="Password" id="password">
                </div>

                <p class="text-center text-danger" id='warning_text'></p>

                <div class="row">
                    <a href="#" id="top-buffer-1">Forgot password?</a>
                    <div id="remember-group">
                        <input type="checkbox" id="Remember">
                        <label for="Remember">Remember me</label>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-default btn-block " id="login-button" onclick="Login()">LOGIN</button>
                </div>

            </form>



        </div>
        <div class="row justify-content-center" id="outside-text">
            <p>Don't have an account?</p>
            <a href="#" id="resgister-text">Sign Up Now</a>
        </div>



        <!-- /.social-auth-links -->



    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('footer.php');
?>

<script>
    home = document.getElementById("login-link");
    home.classList.add("active");
</script>