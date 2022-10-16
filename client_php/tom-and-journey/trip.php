<?php
include('header.php');
?>
<!-- /.navbar -->


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="carousel" data-carousel>
            <div data-slides>
                <div class="slide" data-active>
                    <img class="img-display" src="./dist/img/banner-2.jpg">
                </div>
                <div class="slide" data-active>
                    <img class="img-display" src="./dist/img/banner-3.jpg">
                </div>
                <div class="slide" data-active>
                    <img class="img-display" src="./dist/img/banner-4.jpg">
                </div>
                <div class="slide" data-active>
                    <img class="img-display" src="./dist/img/banner-5.jpg">

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
                    <button type="button" class="btn btn-default btn-block " id="plan-button">PLAN</button>
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
    .content-header {
        padding: 0px;
    }

    .carousel {
        width: 100vw;
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

        setTimeout(carousel, 5000); // Change image every 2 seconds
    }

    home = document.getElementById("trip-planner-link");
    home.classList.add("active");
</script>