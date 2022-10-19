<?php include("config.php") ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<footer class="main-footer fixed-bottom text-sm bg-dark">
    <?php
    echo "
    <div class='float-right d-none d-sm-block'>
        Version $VERSION
    </div>
    ";
    ?>

    ©KMUTNB Trademarks and brands are the property of their respective owners.
</footer>

</body>

</html>


<style>
    /* body */
    body {
        font-family: 'Roboto', sans-serif;
        background-color: white;
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

    .active {
        color: #A64343 !important;
        background-color: white;
        padding: 10px 5px;
        border-radius: 5px;
        font-weight: 500;
    }

    #brand-logo {
        vertical-align: middle;
    }

    /* footer */


    /* --- login form ---*/

    /* content-header */

    .login-box-msg-group {
        line-height: 1%;
    }

    .text-1 {
        padding-bottom: 10px;
    }

    .login-box-msg-group {
        padding-top: 5%;
        padding-bottom: 2%;
    }

    /* content form */

    #form-frame {
        background-color: white;
        outline: 1px solid black;
        border-radius: 20px;
        margin: 0px 30%;
        padding: 5px 10% 10px;
    }

    .content-wrapper {
        background-color: white;
    }

    /* input username */

    .input-group-1 {
        margin-top: 30px;
        outline: 1px solid #A64343;
        border-color: black;
        border-radius: 10px;
    }

    #username {
        border-radius: 10px;
        border-color: transparent;

    }

    .input-group-1 #username-logo {
        margin-top: auto;
        margin-bottom: auto;
        padding-left: 15px;
        padding-right: 15px;
        color: grey;
    }

    /* input password */

    .input-group-2 {
        margin-top: 30px;
        outline: 1px solid #A64343;
        border-color: black;
        border-radius: 10px;

    }

    .input-group-2 #password-logo {
        margin-top: auto;
        margin-bottom: auto;
        padding-left: 15px;
        padding-right: 15px;
        color: grey;
    }

    #password {
        border-radius: 10px;
        border-color: transparent;
    }

    /* remember me and forgot password */

    #remember-group {
        color: grey;
        margin: 20px auto 20px auto;
    }



    .blank-buffer {
        width: auto;
    }

    #remember-group label {
        font-weight: 400;
    }

    #remember-group input:hover {
        margin-left: auto;
        color: grey;
    }

    #top-buffer-1 {
        color: #A64343;
        margin: 20px auto 20px auto;
    }

    /* login button */
    #login-button {
        background-color: #A64343;
        border-radius: 10px;
        color: white;
        font-weight: 700;
        margin-bottom: 10px;
    }

    #text-1 {
        color: grey;
    }

    #register-text {
        color: #A64343 !important;
    }

    /* register text */

    #outside-text {
        padding-top: 10px;
    }

    #outside-text a {
        color: #A64343;
    }

    #outside-text p {
        padding-right: 10px;
    }

    /* --- register form --- */

    /* username-field */
    #username-field input {
        border-color: #A64343;
        border-radius: 10px;
    }

    #username-field label {
        margin-top: 10px;
        color: grey;
        font-weight: 400;
    }

    /* email-adress-field */
    #email-field input {
        border-color: #A64343;
        border-radius: 10px;
    }

    #email-field label {
        color: grey;
        font-weight: 400;
    }

    /* password-field */
    #password-field input {
        border-color: #A64343;
        border-radius: 10px;
    }

    #password-field label {
        color: grey;
        font-weight: 400;
    }

    /* comfirm password-field */
    #comfirm-password-field input {
        border-color: #A64343;
        border-radius: 10px;
    }

    #comfirm-password-field label {
        color: grey;
        font-weight: 400;
    }


    /* trip planner form */

    .card-input-1 {
        border: none;
        border-bottom: 1px solid black;
        outline: none;
        border-radius: 0px;
    }

    .card-input-2 {
        border: none;
        border-bottom: 1px solid black;
        outline: none;
        border-radius: 0px;
        /* width: 50%; */
    }

    .card-body-1 {
        padding: 10px 50px 10px 20px;
    }

    .card-body-1-1 {
        border-radius: 0px;
    }

    .card-body-1-2 {
        border-radius: 0px;
    }

    .form-row {
        margin-top: 5%;
    }



    #plan-button {
        background-color: #A64343;
        color: white;
        width: auto;
        height: 100%;
    }

    .plan-button-div {
        padding-left: 0px !important;
    }

    .card-group {
        padding-right: 0px !important;
    }

    .card-body-2 {
        margin-left: 50px;
    }



    #plan-button {
        width: 100%;

    }

    /* .underline-input-1 {
        outline: 1px solid black;
        z-index: 2;
    } */
</style>