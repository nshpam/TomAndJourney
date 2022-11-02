<!DOCTYPE html>
<html>

<head>
    <title>W3.CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
    .mySlides {
        display: none;
    }
    </style>
</head>

<body>

    <h2 class="w3-center">Automatic Slideshow</h2>

    <div class="w3-content w3-section" style="max-width:500px">
        <div class="mySlides" data-active>
            <img src="./dist/img/banner-2.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <img src="./dist/img/banner-3.jpg" style="width:100%">
        </div>


        <div class="mySlides">
            <img src="./dist/img/banner-4.jpg" style="width:100%">
        </div>

    </div>

    <script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        console.log(x);
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
    </script>

</body>

</html>