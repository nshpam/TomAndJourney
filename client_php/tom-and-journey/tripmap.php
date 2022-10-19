<?php
include('config.php');
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/tom-and-journey/plugins/leaftlet-openstreetmap/leaflet.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css">
    <link rel="stylesheet" href="/tom-and-journey/plugins/Leaflet.awesome-markers-2.0-develop/dist/leaflet.awesome-markers.css">
    <!-- <link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.css" /> -->
    <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@3.1.3/dist/esri-leaflet-geocoder.css" integrity="sha512-IM3Hs+feyi40yZhDH6kV8vQMg4Fh20s9OzInIIAc4nx7aMYMfo+IenRUekoYsHZqGkREUgx0VvlEsgm7nCDW9g==" crossorigin="">

    <title>Trip Planner Map</title>
</head>

<body>

    <div class="content-wrapper">

        <!-- Main content -->
        <div class="content">
            <div id="map"></div>

            <!-- login-block design -->
            <!-- <div class="card login-block">
                <div class="row">
                    <p>Already a member? sign in for better experience</p>

                    <button class="btn btn-default" onclick="GoToLogin()">LOGIN</button>
                </div>
            </div> -->

            <!-- filter and info design -->
            <div class="card d-flex info-block">
                <div class="card-header info-block-body">
                    <div class="row">
                        <div class="icon-text d-flex justify-content-center align-items-center">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>4</p>
                        </div>
                        <div class="icon-text d-flex justify-content-center align-items-center">
                            <i class="fas fa-clock"></i>
                            <p>27m</p>
                        </div>
                        <div class="icon-text d-flex justify-content-center align-items-center">
                            <i class="fas fa-truck"></i>
                            <p>10km</p>
                        </div>
                        <div class="icon-text d-flex justify-content-center align-items-center">
                            <i class="fab fa-bitcoin"></i>
                            <p>100B</p>
                        </div>

                    </div>
                </div>
                <div class="card-body d-flex filter-block justify-content-center align-items-center">
                    <div class="row filter-block-body d-flex justify-content-center align-items-center">
                        <div class="" id="icon-box-1">
                            <i class="fas fa-camera d-flex active-1" id="map-icons" onclick="ActiveIcon('active_1')"></i>
                        </div>

                        <div class="blank_div"></div>

                        <div class="" id="icon-box-2">
                            <i class="fas fa-bed d-flex active-2" id="map-icons" onclick="ActiveIcon('active_2')"></i>
                        </div>
                        <div class="blank_div"></div>

                        <div class="" id="icon-box-3"><i class="fas fa-gas-pump d-flex active-3" id="map-icons" onclick="ActiveIcon('active_3')"></i></div>
                        <div class="blank_div"></div>
                        <div class="" id="icon-box-4"><i class="fas fa-utensils d-flex active-4" id="map-icons" onclick="ActiveIcon('active_4')"></i></div>
                        <div class="blank_div"></div>
                        <div class="" id="icon-box-5"><i class="fas fa-train d-flex active-5" id="map-icons" onclick="ActiveIcon('active_5')"></i></div>
                        <div class="blank_div"></div>
                        <div class="" id="icon-box-6"><i class="fas fa-landmark d-flex active-6" id="map-icons" onclick="ActiveIcon('active_6')"></i></div>
                        <div class="blank_div"></div>
                        <div class="" id="icon-box-7"><i class="fas fa-store d-flex active-7" id="map-icons" onclick="ActiveIcon('active_7')"></i></div>
                        <div class="blank_div"></div>
                        <div class="" id="icon-box-8"><i class="fas fa-anchor d-flex active-8" id="map-icons" onclick="ActiveIcon('active_8')"></i></div>
                        <div class="blank_div"></div>
                        <div class="" id="icon-box-9"><i class="fas fa-coffee d-flex active-9" id="map-icons" onclick="ActiveIcon('active_9')"></i></div>
                        <div class="blank_div"></div>
                        <div class="" id="icon-box-10"><i class="fas fa-wine-glass-alt d-flex active-10" id="map-icons" onclick="ActiveIcon('active_10')"></i></div>
                    </div>
                </div>
            </div>

            <!-- filter, info, route design -->
            <!-- <div class="card route-main-block">
                <div class="location-img"><img src="" alt=""></div>
            </div> -->
        </div>

    </div>
    <!-- /.content -->
    </div>
    <!-- <div id="map"></div> -->

    <!-- leaflet -->
    <script src="/tom-and-journey/plugins/leaftlet-openstreetmap/leaflet.js"></script>

    <!-- leaflet marker -->
    <script src="/tom-and-journey/plugins/Leaflet.awesome-markers-2.0-develop/dist/leaflet.awesome-markers.js"></script>

    <script src="https://unpkg.com/esri-leaflet@3.0.8/dist/esri-leaflet.js" integrity="sha512-E0DKVahIg0p1UHR2Kf9NX7x7TUewJb30mxkxEm2qOYTVJObgsAGpEol9F6iK6oefCbkJiA4/i6fnTHzM6H1kEA==" crossorigin=""></script>

    <script src="https://unpkg.com/esri-leaflet-geocoder@3.1.3/dist/esri-leaflet-geocoder.js" integrity="sha512-mwRt9Y/qhSlNH3VWCNNHrCwquLLU+dTbmMxVud/GcnbXfOKJ35sznUmt3yM39cMlHR2sHbV9ymIpIMDpKg4kKw==" crossorigin=""></script>
    <!-- mapquest -->
    <script src="https://www.mapquestapi.com/sdk/leaflet/v2.2/mq-map.js?key=1yxyC7dPYmAcaQ9PNHnLZTDE3pV1dkkE"></script>
    <script src="https://www.mapquestapi.com/sdk/leaflet/v2.2/mq-routing.js?key=1yxyC7dPYmAcaQ9PNHnLZTDE3pV1dkkE"></script>


</body>

</html>



<style>
    body {
        overflow: hidden;
    }

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

    .leaflet-control-container {
        position: absolute;
        right: 5%;
        top: 40%;
    }

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
        left: 70%;
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
        /* padding: 10px 1px; */
        border-radius: 5px;
        /* margin-right: 3px; */
    }

    /* bed */
    .icon-block-2 {
        background-color: black;
        /* padding: 10px 1px; */
        border-radius: 5px;
        /* margin-right: 3px; */
    }

    /* gas station */
    .icon-block-3 {
        background-color: #6EAA25;
        /* padding: 10px 1px; */
        border-radius: 5px;
        /* margin-right: 3px; */
    }

    /* dinner */
    .icon-block-4 {
        background-color: #A3A3A3;
        /* padding: 10px 1px; */
        border-radius: 5px;
        /* margin-right: 3px; */
    }

    /* train */
    .icon-block-5 {
        background-color: #00659F;
        /* padding: 10px 1px; */
        border-radius: 5px;
        /* margin-right: 3px; */
    }

    /* museum */
    .icon-block-6 {
        background-color: #D33D2A;
        /* padding: 10px 1px; */
        border-radius: 5px;
        /* margin-right: 3px; */
    }

    /* market */
    .icon-block-7 {
        background-color: #EB7D7F;
        /* padding: 10px 1px; */
        border-radius: 5px;
        /* margin-right: 3px; */
    }

    /* anchor */
    .icon-block-8 {
        background-color: #436978;
        /* padding: 10px 1px; */
        border-radius: 5px;
        /* margin-right: 3px; */
    }

    /* cafe */
    .icon-block-9 {
        background-color: #F2952F;
        /* padding: 10px 1px; */
        border-radius: 5px;
        /* margin-right: 3px; */
    }

    /* bar */
    .icon-block-10 {
        background-color: #CB4FB3;
        /* padding: 10px 1px; */
        border-radius: 5px;
        /* margin-right: 3px; */
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
</style>

<script>
    center_map = [13.7528, 100.5173];

    //camera
    mark_photo_1 = [13.7581464, 100.4915310];
    mark_photo_2 = [13.7551568, 100.4930706];
    mark_photo_3 = [13.7498524, 100.4915753];
    mark_photo_4 = [13.7538724, 100.5067137];
    mark_photo_5 = [13.7565088, 100.5028196];

    //hotel
    mark_photo_6 = [13.745714785066127, 100.50327803605421];
    mark_photo_7 = [13.747235692595325, 100.5034747427693];
    mark_photo_8 = [13.755647523176037, 100.50353409998507];
    mark_photo_9 = [13.757181929556896, 100.50271810972956];
    mark_photo_10 = [13.751511466139618, 100.50318940973199];

    //gas station
    mark_photo_11 = [13.750008223674683, 100.50011083254003];
    mark_photo_12 = [13.750660000000039, 100.50430000000006];
    mark_photo_13 = [13.747536290688117, 100.52213113359352];
    mark_photo_14 = [13.755301502918087, 100.52491993873207];
    mark_photo_15 = [13.734679819949179, 100.52496377989144];

    // dinner
    mark_photo_16 = [13.752291670976035, 100.50466082808123];
    mark_photo_17 = [13.753840000000025, 100.50118000000003];
    mark_photo_18 = [13.753690000000063, 100.49849000000006];
    mark_photo_19 = [13.754590000000064, 100.49838000000005];
    mark_photo_20 = [13.75743456867275, 100.49630008668629];

    // train
    mark_photo_21 = [13.74932922820625, 100.50157275585474];
    mark_photo_22 = [13.75133183116638, 100.4968466115885];
    mark_photo_23 = [13.75417338551943, 100.48957167983534];
    mark_photo_24 = [13.750000000000057, 100.51700000000005];
    mark_photo_25 = [13.756495119590486, 100.51156678666601];

    // museum
    mark_photo_26 = [13.758307915999694, 100.49165624216744];
    mark_photo_27 = [13.759151869915854, 100.49407896861152];
    mark_photo_28 = [13.759040988512766, 100.49472934197593];
    mark_photo_29 = [13.751014817334124, 100.49015947336244];
    mark_photo_30 = [13.751401002738078, 100.49993721790884];

    // market
    mark_photo_31 = [13.757928665468967, 100.49916360709642];
    mark_photo_32 = [13.758891599969672, 100.49708653954536];
    mark_photo_33 = [13.75248125466527, 100.50439773412478];
    mark_photo_34 = [13.750620000000026, 100.51273000000003];
    mark_photo_35 = [13.757023402177936, 100.51685891942668];

    // anchor
    mark_photo_36 = [13.756509478309624, 100.48867444496369];
    mark_photo_37 = [13.754715008785922, 100.4885122633741];
    mark_photo_38 = [13.752480000000048, 100.48828000000003];
    mark_photo_39 = [13.755532005756095, 100.50649057873318];
    mark_photo_40 = [13.762721117891658, 100.49861658710779];

    // cafe
    mark_photo_41 = [13.763508463754022, 100.49500696398519];
    mark_photo_42 = [13.765792844058751, 100.49792327258729];
    mark_photo_43 = [13.761700000000076, 100.50386000000003];
    mark_photo_44 = [13.76320000000004, 100.50473000000005];
    mark_photo_45 = [13.750070789902168, 100.51460174322085];

    // bar
    mark_photo_46 = [13.755541027788865, 100.50354997804283];
    mark_photo_47 = [13.752240000000029, 100.49826000000007];
    mark_photo_48 = [13.75636929579997, 100.49855979290129];
    mark_photo_49 = [13.759015587420436, 100.4977388159167];
    mark_photo_50 = [13.759416750878813, 100.49704443239227];

    // photo
    icon_photo = L.AwesomeMarkers.icon({
        icon: "fa-camera",
        prefix: "fa",
        markerColor: "blue",
        iconColor: "white"
    });

    //bed
    icon_bed = L.AwesomeMarkers.icon({
        icon: "fa-bed",
        prefix: "fa",
        markerColor: "black",
        iconColor: "white"
    });

    //gas station
    icon_gas_station = L.AwesomeMarkers.icon({
        icon: "fa-gas-pump",
        prefix: "fa",
        markerColor: "green",
        iconColor: "white"
    });

    //dinner
    icon_dinner = L.AwesomeMarkers.icon({
        icon: "fa-utensils",
        prefix: "fa",
        markerColor: "lightgray",
        iconColor: "white"
    });

    //train
    icon_train = L.AwesomeMarkers.icon({
        icon: "fa-train",
        prefix: "fa",
        markerColor: "darkblue",
        iconColor: "white"
    });

    // museum
    icon_museum = L.AwesomeMarkers.icon({
        icon: "fa-landmark",
        prefix: "fa",
        markerColor: "red",
        iconColor: "white"
    });

    // market
    icon_market = L.AwesomeMarkers.icon({
        icon: "fa-store",
        prefix: "fa",
        markerColor: "lightred",
        iconColor: "white"
    });

    // anchor
    icon_anchor = L.AwesomeMarkers.icon({
        icon: "fa-anchor",
        prefix: "fa",
        markerColor: "cadetblue",
        iconColor: "white"
    });

    //cafe
    icon_cafe = L.AwesomeMarkers.icon({
        icon: "fa-coffee",
        prefix: "fa",
        markerColor: "orange",
        iconColor: "white"
    });

    // bar
    icon_bar = L.AwesomeMarkers.icon({
        icon: "fa-wine-glass-alt",
        prefix: "fa",
        markerColor: "purple",
        iconColor: "white"
    });


    //render map
    let mapOptions = {
        layer: MQ.mapLayer(),
        center: center_map,
        zoom: 15,
    }

    let map = new L.map('map', mapOptions);

    api_key = 'AAPK6a129063e4204ecebc25aec56cafc278C86dfz7fQPwVX_gKp1DvVfnEe6gQInTNBMAc2m5Iivx9QUEIMRz2DwMmafFP6xX6';

    var geocodeService = L.esri.Geocoding.geocodeService({
        apikey: api_key // replace with your api key - https://developers.arcgis.com
    });

    let layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
    map.addLayer(layer);

    let marker1 = new L.marker(mark_photo_1, {
        icon: icon_photo,
    })

    //query map

    // map.on('click', function(e) {
    //     geocodeService.reverse().latlng(e.latlng).run(function(error, result) {
    //         if (error) {
    //             L.marker(e.latlng).addTo(map).bindPopup('no place match').openPopup();
    //         }
    //         console.log(result);
    //         L.marker(e.latlng).addTo(map).bindPopup(result.address.Match_addr).openPopup();
    //     });
    // });


    function GoToLogin() {
        window.location.href = "http://localhost:8080/tom-and-journey/index.php";
    }

    function ActiveIcon(icon_num) {
        //define block
        icon_block_1 = document.getElementById('icon-box-1');
        icon_block_2 = document.getElementById('icon-box-2');
        icon_block_3 = document.getElementById('icon-box-3');
        icon_block_4 = document.getElementById('icon-box-4');
        icon_block_5 = document.getElementById('icon-box-5');
        icon_block_6 = document.getElementById('icon-box-6');
        icon_block_7 = document.getElementById('icon-box-7');
        icon_block_8 = document.getElementById('icon-box-8');
        icon_block_9 = document.getElementById('icon-box-9');
        icon_block_10 = document.getElementById('icon-box-10');

        if (icon_num == 'active_1') {
            div = document.querySelector('#icon-box-1');
            if (div.classList.contains('icon-block-1') == true) {
                icon_block_1.classList.remove("icon-block-1");
                RenderFilter('camera', 'remove');
            } else {
                icon_block_1.classList.add("icon-block-1");
                RenderFilter('camera', 'add');
            }

        } else if (icon_num == 'active_2') {
            div = document.querySelector('#icon-box-2');
            if (div.classList.contains('icon-block-2') == true) {
                icon_block_2.classList.remove("icon-block-2");
                RenderFilter('bed', 'remove');
            } else {
                icon_block_2.classList.add("icon-block-2");
                RenderFilter('bed', 'add');
            }

        } else if (icon_num == 'active_3') {
            div = document.querySelector('#icon-box-3');
            if (div.classList.contains('icon-block-3') == true) {
                icon_block_3.classList.remove("icon-block-3");
                RenderFilter('gaspump', 'remove');
            } else {
                icon_block_3.classList.add("icon-block-3");
                RenderFilter('gaspump', 'add');
            }

        } else if (icon_num == 'active_4') {
            div = document.querySelector('#icon-box-4');
            if (div.classList.contains('icon-block-4') == true) {
                icon_block_4.classList.remove("icon-block-4");
                RenderFilter('dinner', 'remove');
            } else {
                icon_block_4.classList.add("icon-block-4");
                RenderFilter('dinner', 'add');
            }

        } else if (icon_num == 'active_5') {
            div = document.querySelector('#icon-box-5');
            if (div.classList.contains('icon-block-5') == true) {
                icon_block_5.classList.remove("icon-block-5");
                RenderFilter('train', 'remove');
            } else {
                icon_block_5.classList.add("icon-block-5");
                RenderFilter('train', 'add');
            }
        } else if (icon_num == 'active_6') {
            div = document.querySelector('#icon-box-6');
            if (div.classList.contains('icon-block-6') == true) {
                icon_block_6.classList.remove("icon-block-6");
                RenderFilter('museum', 'remove');
            } else {
                icon_block_6.classList.add("icon-block-6");
                RenderFilter('museum', 'add');
            }
        } else if (icon_num == 'active_7') {
            div = document.querySelector('#icon-box-7');
            if (div.classList.contains('icon-block-7') == true) {
                icon_block_7.classList.remove("icon-block-7");
                RenderFilter('market', 'remove');
            } else {
                icon_block_7.classList.add("icon-block-7");
                RenderFilter('market', 'add');
            }
        } else if (icon_num == 'active_8') {
            div = document.querySelector('#icon-box-8');
            if (div.classList.contains('icon-block-8') == true) {
                icon_block_8.classList.remove("icon-block-8");
                RenderFilter('anchor', 'remove');
            } else {
                icon_block_8.classList.add("icon-block-8");
                RenderFilter('anchor', 'add');
            }
        } else if (icon_num == 'active_9') {
            div = document.querySelector('#icon-box-9');
            if (div.classList.contains('icon-block-9') == true) {
                icon_block_9.classList.remove("icon-block-9");
                RenderFilter('cafe', 'remove');
            } else {
                icon_block_9.classList.add("icon-block-9");
                RenderFilter('cafe', 'add');
            }
        } else if (icon_num == 'active_10') {
            div = document.querySelector('#icon-box-10');
            if (div.classList.contains('icon-block-10') == true) {
                icon_block_10.classList.remove("icon-block-10");
                RenderFilter('bar', 'remove');
            } else {
                icon_block_10.classList.add("icon-block-10");
                RenderFilter('bar', 'add');
            }
        }

    }

    function RenderFilter(filter_name, action) {

        //camera markers
        let marker1 = new L.marker(mark_photo_1, {
            icon: icon_photo,
        })
        let marker2 = new L.marker(mark_photo_2, {
            icon: icon_photo,
        })
        let marker3 = new L.marker(mark_photo_3, {
            icon: icon_photo,
        })
        let marker4 = new L.marker(mark_photo_4, {
            icon: icon_photo,
        })
        let marker5 = new L.marker(mark_photo_5, {
            icon: icon_photo,
        })

        camera_markers = [marker1, marker2, marker3, marker4, marker5];
        camera_lat_long = [mark_photo_1, mark_photo_2, mark_photo_3, mark_photo_4, mark_photo_5];

        // camera
        if (filter_name == 'camera' && action == 'add') {
            camera_dinner_markers_id = [];
            var layerGroup = L.layerGroup(camera_markers);
            layerGroup.addTo(map);

            for (let i = 0; i < camera_markers.length; i++) {
                camera_dinner_markers_id.push(camera_markers[i]._leaflet_id);
            }

            map.eachLayer(function(layer) {
                for (let i = 0; i < camera_markers.length; i++) {
                    id = camera_dinner_markers_id[i];
                    lat = camera_lat_long[i][0];
                    lng = camera_lat_long[i][1];

                    if (layer._leaflet_id == id) {
                        geocodeService.reverse().latlng({
                            "lat": lat,
                            "lng": lng,
                        }).run(function(error, result) {
                            if (error) {
                                layer.bindPopup('no place match');
                            }
                            if (result.address.PlaceName != '') {
                                layer.bindPopup(result.address.PlaceName);
                            } else {
                                layer.bindPopup(result.address.LongLabel);
                            }
                        })
                    }
                }
            });


        } else if (filter_name == 'camera' && action == 'remove') {
            map.eachLayer(function(layer) {
                for (let i = 0; i < camera_markers.length; i++) {
                    id = camera_dinner_markers_id[i];
                    if (layer._leaflet_id == id) {
                        map.removeLayer(layer);
                    }
                }
            });

        }

        // bed
        let marker6 = new L.marker(mark_photo_6, {
            icon: icon_bed,
        })
        let marker7 = new L.marker(mark_photo_7, {
            icon: icon_bed,
        })
        let marker8 = new L.marker(mark_photo_8, {
            icon: icon_bed,
        })
        let marker9 = new L.marker(mark_photo_9, {
            icon: icon_bed,
        })
        let marker10 = new L.marker(mark_photo_10, {
            icon: icon_bed,
        })

        hotel_markers = [marker6, marker7, marker8, marker9, marker10];
        hotel_lat_long = [mark_photo_6, mark_photo_7, mark_photo_8, mark_photo_9, mark_photo_10];

        if (filter_name == 'bed' && action == 'add') {
            hotel_dinner_markers_id = [];
            var layerGroup = L.layerGroup(hotel_markers);
            layerGroup.addTo(map);

            for (let i = 0; i < hotel_markers.length; i++) {
                hotel_dinner_markers_id.push(hotel_markers[i]._leaflet_id);
            }

            map.eachLayer(function(layer) {
                for (let i = 0; i < hotel_markers.length; i++) {
                    id = hotel_dinner_markers_id[i];
                    lat = hotel_lat_long[i][0];
                    lng = hotel_lat_long[i][1];

                    if (layer._leaflet_id == id) {
                        geocodeService.reverse().latlng({
                            "lat": lat,
                            "lng": lng,
                        }).run(function(error, result) {
                            if (error) {
                                layer.bindPopup('no place match');
                            }
                            if (result.address.PlaceName != '') {
                                layer.bindPopup(result.address.PlaceName);
                            } else {
                                layer.bindPopup(result.address.LongLabel);
                            }
                        })
                    }
                }
            });


        } else if (filter_name == 'bed' && action == 'remove') {
            map.eachLayer(function(layer) {
                for (let i = 0; i < hotel_markers.length; i++) {
                    id = hotel_dinner_markers_id[i];
                    if (layer._leaflet_id == id) {
                        map.removeLayer(layer);
                    }
                }
            });

        }

        // gas station
        let marker11 = new L.marker(mark_photo_11, {
            icon: icon_gas_station,
        })
        let marker12 = new L.marker(mark_photo_12, {
            icon: icon_gas_station,
        })
        let marker13 = new L.marker(mark_photo_13, {
            icon: icon_gas_station,
        })
        let marker14 = new L.marker(mark_photo_14, {
            icon: icon_gas_station,
        })
        let marker15 = new L.marker(mark_photo_15, {
            icon: icon_gas_station,
        })

        gas_station_markers = [marker11, marker12, marker13, marker14, marker15];
        gas_station_lat_long = [mark_photo_11, mark_photo_12, mark_photo_13, mark_photo_14, mark_photo_15];

        if (filter_name == 'gaspump' && action == 'add') {
            gas_station_dinner_markers_id = [];
            var layerGroup = L.layerGroup(gas_station_markers);
            layerGroup.addTo(map);

            for (let i = 0; i < gas_station_markers.length; i++) {
                gas_station_dinner_markers_id.push(gas_station_markers[i]._leaflet_id);
            }

            map.eachLayer(function(layer) {
                for (let i = 0; i < gas_station_markers.length; i++) {
                    id = gas_station_dinner_markers_id[i];
                    lat = gas_station_lat_long[i][0];
                    lng = gas_station_lat_long[i][1];

                    if (layer._leaflet_id == id) {
                        geocodeService.reverse().latlng({
                            "lat": lat,
                            "lng": lng,
                        }).run(function(error, result) {
                            if (error) {
                                layer.bindPopup('no place match');
                            }
                            if (result.address.PlaceName != '') {
                                layer.bindPopup(result.address.PlaceName);
                            } else {
                                layer.bindPopup(result.address.LongLabel);
                            }
                        })
                    }
                }
            });


        } else if (filter_name == 'gaspump' && action == 'remove') {
            map.eachLayer(function(layer) {
                for (let i = 0; i < gas_station_markers.length; i++) {
                    id = gas_station_dinner_markers_id[i];
                    if (layer._leaflet_id == id) {
                        map.removeLayer(layer);
                    }
                }
            });

        }

        // dinner
        let marker16 = new L.marker(mark_photo_16, {
            icon: icon_dinner,
        })
        let marker17 = new L.marker(mark_photo_17, {
            icon: icon_dinner,
        })
        let marker18 = new L.marker(mark_photo_18, {
            icon: icon_dinner,
        })
        let marker19 = new L.marker(mark_photo_19, {
            icon: icon_dinner,
        })
        let marker20 = new L.marker(mark_photo_20, {
            icon: icon_dinner,
        })

        dinner_markers = [marker16, marker17, marker18, marker19, marker20];
        dinner_lat_long = [mark_photo_16, mark_photo_17, mark_photo_18, mark_photo_19, mark_photo_20];

        if (filter_name == 'dinner' && action == 'add') {
            dinner_markers_id = [];
            var layerGroup = L.layerGroup(dinner_markers);
            layerGroup.addTo(map);

            for (let i = 0; i < dinner_markers.length; i++) {
                dinner_markers_id.push(dinner_markers[i]._leaflet_id);
            }

            map.eachLayer(function(layer) {
                for (let i = 0; i < dinner_markers.length; i++) {
                    id = dinner_markers_id[i];
                    lat = dinner_lat_long[i][0];
                    lng = dinner_lat_long[i][1];

                    if (layer._leaflet_id == id) {
                        geocodeService.reverse().latlng({
                            "lat": lat,
                            "lng": lng,
                        }).run(function(error, result) {
                            if (error) {
                                layer.bindPopup('no place match');
                            }
                            if (result.address.PlaceName != '') {
                                layer.bindPopup(result.address.PlaceName);
                            } else {
                                layer.bindPopup(result.address.LongLabel);
                            }
                        })
                    }
                }
            });


        } else if (filter_name == 'dinner' && action == 'remove') {
            map.eachLayer(function(layer) {
                for (let i = 0; i < dinner_markers.length; i++) {
                    id = dinner_markers_id[i];
                    if (layer._leaflet_id == id) {
                        map.removeLayer(layer);
                    }
                }
            });
        }

        // train
        let marker21 = new L.marker(mark_photo_21, {
            icon: icon_train,
        })
        let marker22 = new L.marker(mark_photo_22, {
            icon: icon_train,
        })
        let marker23 = new L.marker(mark_photo_23, {
            icon: icon_train,
        })
        let marker24 = new L.marker(mark_photo_24, {
            icon: icon_train,
        })
        let marker25 = new L.marker(mark_photo_25, {
            icon: icon_train,
        })

        train_markers = [marker21, marker22, marker23, marker24, marker25];
        train_lat_long = [mark_photo_21, mark_photo_22, mark_photo_23, mark_photo_24, mark_photo_25];

        if (filter_name == 'train' && action == 'add') {
            train_markers_id = [];
            var layerGroup = L.layerGroup(train_markers);
            layerGroup.addTo(map);

            for (let i = 0; i < train_markers.length; i++) {
                train_markers_id.push(train_markers[i]._leaflet_id);
            }

            map.eachLayer(function(layer) {
                for (let i = 0; i < train_markers.length; i++) {
                    id = train_markers_id[i];
                    lat = train_lat_long[i][0];
                    lng = train_lat_long[i][1];

                    if (layer._leaflet_id == id) {
                        geocodeService.reverse().latlng({
                            "lat": lat,
                            "lng": lng,
                        }).run(function(error, result) {
                            if (error) {
                                layer.bindPopup('no place match');
                            }
                            if (result.address.PlaceName != '') {
                                layer.bindPopup(result.address.PlaceName);
                            } else {
                                layer.bindPopup(result.address.LongLabel);
                            }
                        })
                    }
                }
            });


        } else if (filter_name == 'train' && action == 'remove') {
            map.eachLayer(function(layer) {
                for (let i = 0; i < train_markers.length; i++) {
                    id = train_markers_id[i];
                    if (layer._leaflet_id == id) {
                        map.removeLayer(layer);
                    }
                }
            });
        }

        // museum
        let marker26 = new L.marker(mark_photo_26, {
            icon: icon_museum,
        })
        let marker27 = new L.marker(mark_photo_27, {
            icon: icon_museum,
        })
        let marker28 = new L.marker(mark_photo_28, {
            icon: icon_museum,
        })
        let marker29 = new L.marker(mark_photo_29, {
            icon: icon_museum,
        })
        let marker30 = new L.marker(mark_photo_30, {
            icon: icon_museum,
        })

        museum_markers = [marker26, marker27, marker28, marker29, marker30];
        museum_lat_long = [mark_photo_26, mark_photo_27, mark_photo_28, mark_photo_29, mark_photo_30];

        if (filter_name == 'museum' && action == 'add') {
            museum_markers_id = [];
            var layerGroup = L.layerGroup(museum_markers);
            layerGroup.addTo(map);

            for (let i = 0; i < museum_markers.length; i++) {
                museum_markers_id.push(museum_markers[i]._leaflet_id);
            }

            map.eachLayer(function(layer) {
                for (let i = 0; i < train_markers.length; i++) {
                    id = museum_markers_id[i];
                    lat = museum_lat_long[i][0];
                    lng = museum_lat_long[i][1];

                    if (layer._leaflet_id == id) {
                        geocodeService.reverse().latlng({
                            "lat": lat,
                            "lng": lng,
                        }).run(function(error, result) {
                            if (error) {
                                layer.bindPopup('no place match');
                            }
                            if (result.address.PlaceName != '') {
                                layer.bindPopup(result.address.PlaceName);
                            } else {
                                layer.bindPopup(result.address.LongLabel);
                            }
                        })
                    }
                }
            });


        } else if (filter_name == 'museum' && action == 'remove') {
            map.eachLayer(function(layer) {
                for (let i = 0; i < museum_markers.length; i++) {
                    id = museum_markers_id[i];
                    if (layer._leaflet_id == id) {
                        map.removeLayer(layer);
                    }
                }
            });
        }

        // market
        let marker31 = new L.marker(mark_photo_31, {
            icon: icon_market,
        })
        let marker32 = new L.marker(mark_photo_32, {
            icon: icon_market,
        })
        let marker33 = new L.marker(mark_photo_33, {
            icon: icon_market,
        })
        let marker34 = new L.marker(mark_photo_34, {
            icon: icon_market,
        })
        let marker35 = new L.marker(mark_photo_35, {
            icon: icon_market,
        })

        market_markers = [marker31, marker32, marker33, marker34, marker35];
        market_lat_long = [mark_photo_31, mark_photo_32, mark_photo_33, mark_photo_34, mark_photo_35];

        if (filter_name == 'market' && action == 'add') {
            market_markers_id = [];
            var layerGroup = L.layerGroup(market_markers);
            layerGroup.addTo(map);

            for (let i = 0; i < market_markers.length; i++) {
                market_markers_id.push(market_markers[i]._leaflet_id);
            }

            map.eachLayer(function(layer) {
                for (let i = 0; i < train_markers.length; i++) {
                    id = market_markers_id[i];
                    lat = market_lat_long[i][0];
                    lng = market_lat_long[i][1];

                    if (layer._leaflet_id == id) {
                        geocodeService.reverse().latlng({
                            "lat": lat,
                            "lng": lng,
                        }).run(function(error, result) {
                            if (error) {
                                layer.bindPopup('no place match');
                            }
                            if (result.address.PlaceName != '') {
                                layer.bindPopup(result.address.PlaceName);
                            } else {
                                layer.bindPopup(result.address.LongLabel);
                            }
                        })
                    }
                }
            });


        } else if (filter_name == 'market' && action == 'remove') {
            map.eachLayer(function(layer) {
                for (let i = 0; i < museum_markers.length; i++) {
                    id = market_markers_id[i];
                    if (layer._leaflet_id == id) {
                        map.removeLayer(layer);
                    }
                }
            });
        }

        // anchor
        let marker36 = new L.marker(mark_photo_36, {
            icon: icon_anchor,
        })
        let marker37 = new L.marker(mark_photo_37, {
            icon: icon_anchor,
        })
        let marker38 = new L.marker(mark_photo_38, {
            icon: icon_anchor,
        })
        let marker39 = new L.marker(mark_photo_39, {
            icon: icon_anchor,
        })
        let marker40 = new L.marker(mark_photo_40, {
            icon: icon_anchor,
        })

        anchor_markers = [marker36, marker37, marker38, marker39, marker40];
        anchor_lat_long = [mark_photo_36, mark_photo_37, mark_photo_38, mark_photo_39, mark_photo_40];

        if (filter_name == 'anchor' && action == 'add') {
            anchor_markers_id = [];
            var layerGroup = L.layerGroup(anchor_markers);
            layerGroup.addTo(map);

            for (let i = 0; i < anchor_markers.length; i++) {
                anchor_markers_id.push(anchor_markers[i]._leaflet_id);
            }

            map.eachLayer(function(layer) {
                for (let i = 0; i < train_markers.length; i++) {
                    id = anchor_markers_id[i];
                    lat = anchor_lat_long[i][0];
                    lng = anchor_lat_long[i][1];

                    if (layer._leaflet_id == id) {
                        geocodeService.reverse().latlng({
                            "lat": lat,
                            "lng": lng,
                        }).run(function(error, result) {
                            if (error) {
                                layer.bindPopup('no place match');
                            }
                            if (result.address.PlaceName != '') {
                                layer.bindPopup(result.address.PlaceName);
                            } else {
                                layer.bindPopup(result.address.LongLabel);
                            }
                        })
                    }
                }
            });


        } else if (filter_name == 'anchor' && action == 'remove') {
            map.eachLayer(function(layer) {
                for (let i = 0; i < anchor_markers.length; i++) {
                    id = anchor_markers_id[i];
                    if (layer._leaflet_id == id) {
                        map.removeLayer(layer);
                    }
                }
            });
        }

        // cafe
        let marker41 = new L.marker(mark_photo_41, {
            icon: icon_cafe,
        })
        let marker42 = new L.marker(mark_photo_42, {
            icon: icon_cafe,
        })
        let marker43 = new L.marker(mark_photo_43, {
            icon: icon_cafe,
        })
        let marker44 = new L.marker(mark_photo_44, {
            icon: icon_cafe,
        })
        let marker45 = new L.marker(mark_photo_45, {
            icon: icon_cafe,
        })

        cafe_markers = [marker41, marker42, marker43, marker44, marker45];
        cafe_lat_long = [mark_photo_41, mark_photo_42, mark_photo_43, mark_photo_44, mark_photo_45];

        if (filter_name == 'cafe' && action == 'add') {
            cafe_markers_id = [];
            var layerGroup = L.layerGroup(cafe_markers);
            layerGroup.addTo(map);

            for (let i = 0; i < cafe_markers.length; i++) {
                cafe_markers_id.push(cafe_markers[i]._leaflet_id);
            }

            map.eachLayer(function(layer) {
                for (let i = 0; i < train_markers.length; i++) {
                    id = cafe_markers_id[i];
                    lat = cafe_lat_long[i][0];
                    lng = cafe_lat_long[i][1];

                    if (layer._leaflet_id == id) {
                        geocodeService.reverse().latlng({
                            "lat": lat,
                            "lng": lng,
                        }).run(function(error, result) {
                            if (error) {
                                layer.bindPopup('no place match');
                            }
                            if (result.address.PlaceName != '') {
                                layer.bindPopup(result.address.PlaceName);
                            } else {
                                layer.bindPopup(result.address.LongLabel);
                            }
                        })
                    }
                }
            });


        } else if (filter_name == 'cafe' && action == 'remove') {
            map.eachLayer(function(layer) {
                for (let i = 0; i < cafe_markers.length; i++) {
                    id = cafe_markers_id[i];
                    if (layer._leaflet_id == id) {
                        map.removeLayer(layer);
                    }
                }
            });
        }

        // bar
        let marker46 = new L.marker(mark_photo_46, {
            icon: icon_bar,
        })
        let marker47 = new L.marker(mark_photo_47, {
            icon: icon_bar,
        })
        let marker48 = new L.marker(mark_photo_48, {
            icon: icon_bar,
        })
        let marker49 = new L.marker(mark_photo_49, {
            icon: icon_bar,
        })
        let marker50 = new L.marker(mark_photo_50, {
            icon: icon_bar,
        })

        bar_markers = [marker46, marker47, marker48, marker49, marker50];
        bar_lat_long = [mark_photo_46, mark_photo_47, mark_photo_48, mark_photo_49, mark_photo_50];

        if (filter_name == 'bar' && action == 'add') {
            bar_markers_id = [];
            var layerGroup = L.layerGroup(bar_markers);
            layerGroup.addTo(map);

            for (let i = 0; i < bar_markers.length; i++) {
                bar_markers_id.push(bar_markers[i]._leaflet_id);
            }

            map.eachLayer(function(layer) {
                for (let i = 0; i < bar_markers.length; i++) {
                    id = bar_markers_id[i];
                    lat = bar_lat_long[i][0];
                    lng = bar_lat_long[i][1];

                    if (layer._leaflet_id == id) {
                        geocodeService.reverse().latlng({
                            "lat": lat,
                            "lng": lng,
                        }).run(function(error, result) {
                            if (error) {
                                layer.bindPopup('no place match');
                            }
                            if (result.address.PlaceName != '') {
                                layer.bindPopup(result.address.PlaceName);
                            } else {
                                layer.bindPopup(result.address.LongLabel);
                            }
                        })
                    }
                }
            });


        } else if (filter_name == 'bar' && action == 'remove') {
            map.eachLayer(function(layer) {
                for (let i = 0; i < bar_markers.length; i++) {
                    id = bar_markers_id[i];
                    if (layer._leaflet_id == id) {
                        map.removeLayer(layer);
                    }
                }
            });
        }
    }
</script>

<?php
include('footer.php');
?>