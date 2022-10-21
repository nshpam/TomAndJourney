<?php
include('header.php');
?>
<!-- /.navbar -->


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="row">
            <div class="carousel" id="custom-carousel" data-carousel>
                <div data-slides>
                    <div class="slide" data-active>
                        <img class="img-display img-fluid" src="/tom-and-journey/dist/img/banner1.png">
                    </div>
                    <div class="slide" data-active>
                        <img class="img-display img-fluid" src="/tom-and-journey/dist/img/banner2.png">
                    </div>
                    <div class="slide" data-active>
                        <img class="img-display img-fluid" src="/tom-and-journey/dist/img/banner3.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <form method="POST">
            <div class="row justify-content-center form-row">
                <div class="card-group col-md-8">
                    <div class="card card-body-1-1">
                        <div class="card-body card-body-1 ">
                            <div class="input-group ">
                                <input type="text" class="form-control card-input-1" placeholder="START" id="start-field">
                            </div>
                            <div class="underline-input-1"></div>
                        </div>
                    </div>

                    <div class="card card-body-1-2 ">
                        <div class="card-body card-body-1 ">
                            <div class="input-group ">
                                <input type="text" class="form-control card-input-2 " placeholder="DESTINATION" id="destination-field">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="plan-button-div col-md-2">
                    <button type="button" class="btn btn-default btn-block " id="plan-button" onclick="GoToMap()">PLAN</button>
                </div>
            </div>


    </div>
    </form>
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('footer.php');
?>

<style>
    /* fix horizontal overflow */
    .row {
        margin-left: 0px;
        margin-right: 0px;
    }

    /* responsive */
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

        /* .content-header {
            width: 100vw;
            height: 20vh;
            position: relative;
        }

        #custom-carousel {
            width: 100%;
            height: 20vh;
        } */

    }

    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (min-width: 600px) {

        #ul-custom-nav-bar {
            flex-direction: row !important;
        }

        /* .content-header {
            width: 100vw;
            height: 50vh;
            position: relative;
        }

        #custom-carousel {
            width: 100%;
            height: 38vh;
        } */

    }

    @media only screen and (max-width: 992px) {
        /* .content-header {
            width: 100%;
            height: 50vh;
            position: relative;
        }

        #custom-carousel {
            width: 100%;
            height: 38vh;
        } */
    }




    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (min-width: 600px) and (max-height: 693px) {

        #ul-custom-nav-bar {
            flex-direction: row !important;
        }

        /* .carousel {
            width: 82vw !important;
            height: 49vh !important;
            margin-left: auto;
            margin-right: auto;
        } */
    }

    /* Medium devices (landscape tablets, 768px and up) */
    @media only screen and (min-width: 768px) and (min-height: 769px) {}

    /* Medium devices (landscape tablets, 768px and up) */
    @media only screen and (min-width: 768px) and (max-height: 693px) {}

    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) and (min-height: 769px) {
        /* .carousel {
            width: 75% !important;
            height: 49vh !important;
            margin-left: auto;
            margin-right: auto;
        } */
    }

    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) and (max-height: 693px) {
        /* .carousel {
            width: 66% !important;
            height: 49vh !important;
            margin-left: auto;
            margin-right: auto;
        } */
    }

    /* Extra large devices (large laptops and desktops, 1200px and up) */
    @media only screen and (min-width: 1200px) and (min-height: 769px) {
        /* .carousel {
            width: 57% !important;
            height: 49vh !important;
            margin-left: auto;
            margin-right: auto;
        } */
    }

    /* Extra large devices (large laptops and desktops, 1200px and up) */
    @media only screen and (min-width: 2560px) {}


    .content-header {
        padding: 0px;
    }

    .carousel {
        margin-left: auto;
        margin-right: auto;
        width: 100%;
        height: 50vh;
        position: relative;
    }

    .carousel>ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .slide {
        position: absolute;
        inset: 0;
        opacity: 0;
        transition: 300ms opacity ease-in-out;
    }

    .slide>img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    .slide[data-active] {
        opacity: 1;
    }

    .carousel-button {
        position: absolute;
        z-index: 2;
        background: none;
        border: none;
        font-size: 4rem;
        top: 50%;
        transform: translateY(-50%);
        color: rgba(255, 255, 255, .5);
        cursor: pointer;
        padding: 0.5rem;
        background-color: rgba(0, 0, 0, .1);
    }

    .carousel-button :hover,
    .carousel-button :focus {
        color: white;
        background-color: rgba(0, 0, 0, .2);
    }

    .carousel-button:focus {
        outline: 1px solid black;
    }

    .carousel-button.prev {
        left: 1rem;
    }

    .carousel-button.next {
        right: 1rem;
    }
</style>

<script>
    function GoToMap() {
        document.location.href = 'http://localhost:8080/tom-and-journey/tripmap.php';
    }

    let slideIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("img-display");
        console.log(x);
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > x.length) {
            slideIndex = 1
        }
        x[slideIndex - 1].style.display = "block";

        setTimeout(carousel, 3000); // Change image every 2 seconds
    }

    home = document.getElementById("trip-planner-link");
    home.classList.add("active");
</script>