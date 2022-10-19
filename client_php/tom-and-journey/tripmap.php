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
    //find cordinates

    // map.on(("click"),
    //     function(e) {
    //         geocodeService.reverse().latlng(e.latlng).run(function(error, result) {
    //             if (error) {
    //                 layer.bindPopup('no place match');
    //             }

    //             layer.bindPopup(result.address.Match_addr);
    //         });
    //     });




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

    //gas pump
    icon_mountain = L.AwesomeMarkers.icon({
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

    map.on('click', function(e) {
        geocodeService.reverse().latlng(e.latlng).run(function(error, result) {
            if (error) {
                L.marker(e.latlng).addTo(map).bindPopup('no place match').openPopup();
            }
            console.log(result);
            L.marker(e.latlng).addTo(map).bindPopup(result.address.Match_addr).openPopup();
        });
    });


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
        camera_lat_long = [mark_photo_1, mark_photo_2, mark_photo_3, mark_photo_4, mark_photo_5]
        // bed
        // camera
        if (filter_name == 'camera' && action == 'add') {
            markers_id = [];
            var layerGroup = L.layerGroup(camera_markers);
            layerGroup.addTo(map);

            for (let i = 0; i < camera_markers.length; i++) {
                markers_id.push(camera_markers[i]._leaflet_id);
            }

            map.eachLayer(function(layer) {
                for (let i = 0; i < camera_markers.length; i++) {
                    id = markers_id[i];
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
                    id = markers_id[i];
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