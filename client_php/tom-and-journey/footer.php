<!-- import config.php -->
<?php include("./config.php") ?>
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

a {
    color: #A64343 !important;
}

.content-wrapper {
    display: flex;
    justify-content: center;
    flex-direction: column;
    vertical-align: middle;
}

/* custom register header */
/* .login-box-msg-group {
    margin-bottom: 0% !important;
    padding-bottom: 1% !important;
} */

/* username field */
#username-field input {
    border-color: #A64343;
    border-radius: 10px;
}

#username-field label {
    margin-top: 10px;
    color: grey;
    font-weight: 400;
}

/* email field */
#email-field input {

    border-color: #A64343;
    border-radius: 10px;
}

#email-field label {
    margin-top: 10px;
    color: grey;
    font-weight: 400;
}

/* password field */
#password-field input {
    border-color: #A64343;
    border-radius: 10px;
}

#password-field label {
    margin-top: 10px;
    color: grey;
    font-weight: 400;
}

/* comfirm password field */
#comfirm-password-field input {
    border-color: #A64343;
    border-radius: 10px;
    margin-bottom: 20px;
}

#comfirm-password-field label {
    margin-top: 10px;
    color: grey;
    font-weight: 400;
}




/* custom register button */
#register-button {
    background-color: #A64343;
    border-radius: 10px;
    color: white;
    font-weight: 700;
    margin-bottom: 20px;
}

/* responsive */
/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {

    /* nav bar */
    #custom-nav-bar {
        height: 10%;
    }

    #ul-custom-nav-bar {
        flex-wrap: wrap;
        flex-direction: row !important;
        text-align: center;
        align-items: center;
        justify-content: center;
    }

    .navbar-expand-md>.container,
    .navbar-expand-md>.container-fluid,
    .navbar-expand-md>.container-lg,
    .navbar-expand-md>.container-md,
    .navbar-expand-md>.container-sm,
    .navbar-expand-md>.container-xl {
        text-align: center;
    }

    .navbar .container,
    .navbar .container-fluid,
    .navbar .container-lg,
    .navbar .container-md,
    .navbar .container-sm,
    .navbar .container-xl {
        display: contents;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
    }

}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {

    /* navbar */
    #ul-custom-nav-bar {
        flex-direction: row !important;
    }

}


body {
    overflow: hidden;
}

a #fill-div {
    display: block;
    height: 100%;
    width: 100%;
    text-decoration: none;
}

.content-wrapper {
    display: flex;
    justify-content: center;
    flex-direction: column;
    vertical-align: middle;
}

/* responsive */
@media only screen and (max-width: 600px) {

    /* nav bar */
    #custom-nav-bar {
        height: 10%;
    }

    #ul-custom-nav-bar {
        flex-direction: row !important;
    }

}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {

    #ul-custom-nav-bar {
        flex-direction: row !important;
    }

}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {}

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {}

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {}

/* openstreetmap */

#map {
    width: 100%;
    height: 100vh;
    /* position: relative; */
}

.content-wrapper>.content {
    padding: 0px;
}

/* leaflet zoom control position */

/* for login page and filter page */
.leaflet-control-container {
    position: absolute;
    right: 5%;
    top: 40%;
}

/* for tripplanner page */
/* .leaflet-control-container {
                position: absolute;
                right: 35%;
                top: 40%;
            } */

.leaflet-bottom {
    display: none;
}

/* login block */

.login-block {
    background-color: #A64343;
    border-radius: 50px;
    position: fixed;
    top: 80%;
    left: 30%;
    margin-right: auto;
    margin-left: auto;
    padding: 1% 5%;
    z-index: 999;
}

.login-block p {
    color: white;
    font-weight: 500;
    text-align: center;
    margin: auto;
}

.login-block button {
    color: #A64343;
    font-weight: 700;
    background-color: white;
    border-radius: 10px;
    padding: 0 20px 0 20px;
    margin-left: 30px;
}

.login-block button:hover {
    color: #A64343 !important;
}

/* info block */
.info-block {
    background-color: black;
    border-radius: 5px;
    position: absolute;
    justify-content: flex-end;
    top: 2%;
    left: 65%;
    flex-wrap: wrap;
    display: flex;
    z-index: 999;
    color: white;
    vertical-align: center;
}

.info-block-body {
    padding: 0.5rem;
    margin: 0 auto;
}

.info-block-body-2 {
    background-color: black;
}

.icon-text p {
    margin-top: auto;
    margin-bottom: auto;
}

.icon-text {
    display: flex;
    margin: auto 5px auto 5px;
}

.fa-map-marker-alt {
    margin: 0 3px 0 6px;
    vertical-align: middle;
}

.fa-clock {
    margin-right: 3px;
}

.fa-truck {
    margin-right: 3px;
}

.fa-bitcoin {
    margin-right: 3px;
}

.fa-chevron-down {
    cursor: pointer;
}

.fa-chevron-up {
    cursor: pointer;
}

/* filter block */
.filter-block {
    background-color: white;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    padding: 0.3rem 0.8rem;
}

#icon-block {
    display: block;
}

#map-icons {
    padding: 10px;
    cursor: pointer;
}

.blank_div {
    width: 5px;
}

.icon-block-1 .fa-camera {
    color: white !important;
}

.icon-block-2 .active-2 {
    color: white !important;
}

.icon-block-3 .active-3 {
    color: white !important;
}

.icon-block-4 .active-4 {
    color: white !important;
}

.icon-block-5 .active-5 {
    color: white !important;
}

.icon-block-6 .active-6 {
    color: white !important;
}

.icon-block-7 .active-7 {
    color: white !important;
}

.icon-block-8 .active-8 {
    color: white !important;
}

.icon-block-9 .active-9 {
    color: white !important;
}

.icon-block-10 .active-10 {
    color: white !important;
}

/* camera */
.icon-block-1 {
    background-color: #36A5D7;
    border-radius: 5px;
}

/* bed */
.icon-block-2 {
    background-color: black;

    border-radius: 5px;

}

/* gas station */
.icon-block-3 {
    background-color: #6EAA25;

    border-radius: 5px;

}

/* dinner */
.icon-block-4 {
    background-color: #A3A3A3;

    border-radius: 5px;

}

/* train */
.icon-block-5 {
    background-color: #00659F;

    border-radius: 5px;

}

/* museum */
.icon-block-6 {
    background-color: #D33D2A;

    border-radius: 5px;

}

/* market */
.icon-block-7 {
    background-color: #EB7D7F;

    border-radius: 5px;

}

/* anchor */
.icon-block-8 {
    background-color: #436978;

    border-radius: 5px;

}

/* cafe */
.icon-block-9 {
    background-color: #F2952F;

    border-radius: 5px;

}

/* bar */
.icon-block-10 {
    background-color: #CB4FB3;

    border-radius: 5px;

}

#icon-box-1 .fa-camera {
    color: #36A5D7;
}

#icon-box-2 .fa-bed {
    color: black;
}

#icon-box-3 .fa-gas-pump {
    color: #6EAA25;
}

#icon-box-4 .fa-utensils {
    color: #A3A3A3;
}

#icon-box-5 .fa-train {
    color: #00659F;
}

#icon-box-6 .fa-landmark {
    color: #D33D2A;
}

#icon-box-7 .fa-store {
    color: #EB7D7F;

}

#icon-box-8 .fa-anchor {
    color: #436978;
}

#icon-box-9 .fa-coffee {
    color: #F2952F;
}

#icon-box-10 .fa-wine-glass-alt {
    color: #CB4FB3
}

.route-main-block {
    background-color: white;
    border-radius: 5px;
    position: absolute;
    top: 0%;
    left: 70%;
    z-index: 998;
    color: white;
    max-height: 85vh;
    visibility: hidden;
}

.location-img-div>img {
    width: 100%;
    height: 20vh;
    display: block;
    object-fit: cover;
    object-position: center;
    filter: blur(1px);
}

.location-img {
    /* width: 25vw; */

    padding: 0px;
}

.route-1 {
    margin-left: 0px;
}

.route-1 p {
    color: black;
    font-family: 'Kanit';
    margin-bottom: 0px;
}

.route-1 h5 {
    color: black;
    font-family: 'Kanit';
    margin-bottom: 0px;
}

.sequence {
    margin-top: auto;
    margin-bottom: auto;
    color: black;
}

.location-text p {
    margin-top: auto;
    margin-bottom: auto;
}

.centered {
    color: white;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: auto;
    margin-bottom: auto;
    transform: translate(-50%, -50%);
}

.line-place {
    border: 1px solid #B2B2B2;
    margin-left: 0px;
    margin-right: 0px;
}

.route-detail-1 .fa-car {
    margin-right: 5px;
    color: black;
}

.route-detail-1 .fa-clock {
    color: black;
}

.route-detail-1 p {
    color: black;
    margin-top: auto;
    margin-bottom: auto;
}

.travel-distance {
    margin-left: 10px;
    margin-right: 0px;
}

.blank-between-container {
    height: 20px;
}

.card-context-1 {

    overflow-y: scroll;
}

.main-footer {
    border-color: #869099;
}

/* hide leaflet routing */
.leaflet-routing-container {
    display: none;
}

.active-nav {
    background-color: white !important;
    padding: 10px 5px !important;
    border-radius: 5px !important;
    font-weight: 500 !important;
}
</style>