<?php include('header.php');
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
            <h1 class=" login-box-msg text-dark text-1">Register</h1>
            <p class="login-box-msg text-dark text-2">Register your account</p>
        </div>

        <div id="form-frame">
            <form method="POST" id="register_form">

                <!-- username field -->
                <div id="username-field">
                    <label for="username-field-input">Username</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Enter your Username" id="username-field-input">
                    </div>
                </div>

                <!-- email field -->
                <div id="email-field">
                    <label for="email-field-input">Email Address</label>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Enter your Email" id="email-field-input">
                    </div>
                </div>

                <!-- password field -->
                <div id="password-field">
                    <label for="password-field-input">Password</label>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Enter your password" id="password-field-input">
                    </div>
                </div>

                <!-- comfirm password field -->
                <div id="comfirm-password-field">
                    <label for="comfirm-password-field-input">Comfirm Password</label>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Confirm your password" id="comfirm-password-field-input">
                    </div>
                </div>

                <p class="text-center text-danger" id='warning_text'></p>


                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-default btn-block " id="login-button" onclick="Login()">REGISTER</button>
                </div>

            </form>



        </div>




        <!-- /.social-auth-links -->



    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('footer.php');
?>

<script>
    home = document.getElementById("trip-planner-link");
    home.classList.add("active");
</script>