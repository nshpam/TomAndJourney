<!-- import config.php -->
<?php include("config.php") ?>
<!-- end import config.php -->

</div>
<!-- end wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Sweet alert -->
<script src="dist/js/tomandjourney/sweetalert.js"></script>

<!-- footer -->
<footer class="main-footer fixed-bottom text-sm bg-dark">

    <!-- import version from config.php -->
    <!-- footer right text -->
    <?php
    echo "
    <div class='float-right d-none d-sm-block'>
        Version $VERSION
    </div>
    ";
    ?>

    <!-- footer left text -->
    ©KMUTNB Trademarks and brands are the property of their respective owners.
</footer>
<!-- end footer -->

</body>
<!-- end body -->

</html>
<!-- end html -->


<style>
    /* body */
    body {
        font-family: 'Roboto', sans-serif;
        background-color: white;
    }

    /* footer */
    .main-footer {
        border-top: 1px solid #343a40 !important;

    }

    /* form control */

    .form-control:focus {
        border-color: inherit;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    /* --- navbar --- */
    #custom-nav-bar {
        background-color: #A64343 !important;
        border-color: #A64343;
    }

    .nav-link {
        color: white !important;
    }

    .nav-item {
        padding-left: 5px;
        padding-right: 5px;
    }

    .nav-item :hover {
        color: #A64343 !important;
        background-color: white;
        padding: 10px 5px;
        border-radius: 5px;
        font-weight: 500;
    }

    .nav-item .active {
        color: #A64343 !important;
        background-color: white;
        padding: 10px 5px;
        border-radius: 5px;
        font-weight: 500;
    }

    #brand-logo {
        vertical-align: middle;
    }

    /* content form */

    #form-frame {
        background-color: white;
        outline: 1px solid black;
        border-radius: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .content-wrapper {
        background-color: white;
    }

    /* content-header */

    .login-box-msg-group {
        line-height: 1%;
    }

    .text-1 {
        padding-bottom: 10px;
    }

    .login-box-msg-group {
        padding-bottom: 2%;
    }
</style>