<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.php">Tom and Dashboard</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
    </form>
    <a class="text-light logout-btn" onclick="LogOut()" name="logout_btn">Logout</a>

</nav>
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>

<style>
    .logout-btn {
        text-decoration: none;
        margin-right: 5%;
        cursor: pointer;
        font-weight: 500;
    }
</style>

<script>
    function LogOut() {

        //send data to server.php to logout

        $.ajax({
            url: 'config/server.php',
            type: 'post',
            data: {
                ajax: 1,
                logout: 1,
            },
            success: function(response) {

                if (response.indexOf('logout') != -1) {
                    window.location.href = '../index.php';
                } else {
                    $_SESSION['status'] = "Failed to sign out";
                    $_SESSION['status_detail'] = "Please try again later.";
                    $_SESSION['status_code'] = "error";
                }
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                $_SESSION['status'] = "Failed to sign out";
                $_SESSION['status_detail'] = "Please try again later.";
                $_SESSION['status_code'] = "error";
            }
        });
    }
</script>