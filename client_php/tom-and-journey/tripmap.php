<?php
session_start();
include('config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Trip Planner Map</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/tom-and-journey/plugins/leaftlet-openstreetmap/leaflet.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css">
    <link rel="stylesheet" href="/tom-and-journey/plugins/Leaflet.awesome-markers-2.0-develop/dist/leaflet.awesome-markers.css">
    <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@3.1.3/dist/esri-leaflet-geocoder.css" integrity="sha512-IM3Hs+feyi40yZhDH6kV8vQMg4Fh20s9OzInIIAc4nx7aMYMfo+IenRUekoYsHZqGkREUgx0VvlEsgm7nCDW9g==" crossorigin="">
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <link rel="stylesheet" href="/tom-and-journey/plugins/Leaflet.ExtraMarkers-master/dist/css/leaflet.extra-markers.min.css">

    <!-- tripmappage.css -->
    <link rel="stylesheet" href="/tom-and-journey/dist/css/tomandjourney/tripmappage.css">

</head>

<body class="hold-transition layout-top-nav layout-footer-fixed layout-navbar-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class=" main-header navbar navbar-expand-md  " id="custom-nav-bar">
            <div class="container">
                <span class="align-middle text-light">Tom & Journey</span>

                <!-- Left navbar links -->
                <ul class="navbar-nav ml-auto" id="ul-custom-nav-bar">
                    <li class="nav-item">
                        <a class="nav-link" href="/tom-and-journey/home.php" id="home-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/tom-and-journey/trip.php" class="nav-link trip-planner-class" id="trip-planner-link">Trip Planner</a>
                    </li>
                    <?php if (isset($_SESSION['auth'])) : ?>
                        <div>
                            <li class="nav-item">
                                <a href="/tom-and-journey/Profile.php" class="nav-link" id="login-link">Profile</a>
                            </li>
                        </div>
                    <?php else : ?>
                        <li class="nav-item">
                            <a href="/tom-and-journey/index.php" class="nav-link" id="login-link">Login</a>
                        </li>

                    <?php endif ?>
                </ul>
            </div>
        </nav>


        <div class="content-wrapper">

            <!-- Main content -->
            <div class="content">
                <div id="map"></div>

                <!-- login-block design -->

                <?php if (!isset($_SESSION['auth'])) : ?>
                    <div class="card login-block">
                        <div class="row">
                            <p>Already a member? sign in for better experience</p>

                            <button class="btn btn-default" onclick="GoToLogin()">LOGIN</button>
                        </div>
                    </div>


                <?php endif ?>

                <!-- filter and info design -->
                <div class="card d-flex info-block">
                    <div class="card-header info-block-body">
                        <div class="d-flex">
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

                                <div class="icon-text d-flex justify-content-center align-items-center">
                                    <i class="fas fa-chevron-down" onclick="ExpandTab()"></i>
                                </div>

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

                <div class="card route-main-block ">

                    <div class="card-header location-img" data-spy="scroll">
                        <div class="location-img-div">
                            <img src="/tom-and-journey/dist/img/bangkok-thailand.jpg" alt="">

                            <div class="row location-text d-flex justify-content-center align-items-center centered">
                                <i class="fas fa-map-marker-alt d-flex justify-content-center align-items-center"></i>
                                <p class="d-flex justify-content-center align-items-center">Bangkok, Thailand</p>
                            </div>

                        </div>
                    </div>
                    <div class="card-body col-md-12 card-context-1">
                        <div class="container">
                            <div class="row">
                                <div class="container route-1 col-md-7">
                                    <h5>สวนลุมพินี</h5>
                                    <p>ปทุมวัน, กรุงเทพ</p>
                                </div>
                                <i class="fas fa-map-marker-alt fa-lg col-md-4 d-flex justify-content-end align-items-center" style="color: black;"></i>
                                <p class="sequence">1</p>
                            </div>
                            <div class="row col-md-12 route-detail-1 ">
                                <hr class="col-md-4 line-place">
                                <div class="col-md-3 travel-distance d-flex justify-content-center align-items-center">
                                    <i class="fas fa-car"></i>
                                    <p>5km</p>
                                </div>
                                <div class="col-md-3 travel-time d-flex justify-content-center align-items-center">
                                    <i class="fas fa-clock "></i>
                                    <p>10m</p>
                                </div>
                            </div>
                        </div>

                        <div class="blank-between-container"></div>

                        <div class="container">
                            <div class="row">
                                <div class="container route-1 col-md-7">
                                    <h5>วัดไตรมิตรวิทยารามวรวิหาร</h5>
                                    <p>สัมพันธวงศ์, กรุงเทพ</p>
                                </div>
                                <i class="fas fa-map-marker-alt fa-lg col-md-4 d-flex justify-content-end align-items-center" style="color: black;"></i>
                                <p class="sequence">2</p>
                            </div>
                            <div class="row col-md-12 route-detail-1 ">
                                <hr class="col-md-4 line-place">
                                <div class="col-md-3 travel-distance d-flex justify-content-center align-items-center">
                                    <i class="fas fa-car"></i>
                                    <p>1km</p>
                                </div>
                                <div class="col-md-3 travel-time d-flex justify-content-center align-items-center">
                                    <i class="fas fa-clock "></i>
                                    <p>4m</p>
                                </div>
                            </div>
                        </div>

                        <div class="blank-between-container"></div>

                        <div class="container">
                            <div class="row">
                                <div class="container route-1 col-md-7">
                                    <h5>วัดสระเกศราชวรมหาวิหาร (ภูเขาทอง)</h5>
                                    <p>ป้อมปราบศัตรูพ่าย, กรุงเทพ</p>
                                </div>
                                <i class="fas fa-map-marker-alt fa-lg col-md-4 d-flex justify-content-end align-items-center" style="color: black;"></i>
                                <p class="sequence">3</p>
                            </div>
                            <div class="row col-md-12 route-detail-1 ">
                                <hr class="col-md-4 line-place">
                                <div class="col-md-3 travel-distance d-flex justify-content-center align-items-center">
                                    <i class="fas fa-car"></i>
                                    <p>2km</p>
                                </div>
                                <div class="col-md-3 travel-time d-flex justify-content-center align-items-center">
                                    <i class="fas fa-clock "></i>
                                    <p>5m</p>
                                </div>
                            </div>
                        </div>

                        <div class="blank-between-container"></div>

                        <div class="container">
                            <div class="row">
                                <div class="container route-1 col-md-7">
                                    <h5>วัดเบญจมบพิตรดุสิตวนาราม</h5>
                                    <p>ดุสิต, กรุงเทพ</p>
                                </div>
                                <i class="fas fa-map-marker-alt fa-lg col-md-4 d-flex justify-content-end align-items-center" style="color: black;"></i>
                                <p class="sequence">4</p>
                            </div>
                            <div class="row col-md-12 route-detail-1 ">
                                <hr class="col-md-4 line-place">
                                <div class="col-md-3 travel-distance d-flex justify-content-center align-items-center">
                                    <i class="fas fa-car"></i>
                                    <p>2km</p>
                                </div>
                                <div class="col-md-3 travel-time d-flex justify-content-center align-items-center">
                                    <i class="fas fa-clock "></i>
                                    <p>5m</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer info-block-body-2 d-flex justify-content-center align-items-center">

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
                            <div class="icon-text d-flex justify-content-center align-items-center">
                                <i class="fas fa-chevron-up" onclick="MinimizeTab()"></i>
                            </div>


                        </div>
                        </a>
                    </div>

                </div>
            </div>

        </div>

        <!-- leaflet -->
        <script src="/tom-and-journey/plugins/leaftlet-openstreetmap/leaflet.js"></script>

        <!-- leaflet marker -->
        <script src="/tom-and-journey/plugins/Leaflet.awesome-markers-2.0-develop/dist/leaflet.awesome-markers.js"></script>
        <script src="/tom-and-journey/plugins/Leaflet.ExtraMarkers-master/dist/js/leaflet.extra-markers.min.js"></script>

        <script src="https://unpkg.com/esri-leaflet@3.0.8/dist/esri-leaflet.js" integrity="sha512-E0DKVahIg0p1UHR2Kf9NX7x7TUewJb30mxkxEm2qOYTVJObgsAGpEol9F6iK6oefCbkJiA4/i6fnTHzM6H1kEA==" crossorigin=""></script>

        <script src="https://unpkg.com/esri-leaflet-geocoder@3.1.3/dist/esri-leaflet-geocoder.js" integrity="sha512-mwRt9Y/qhSlNH3VWCNNHrCwquLLU+dTbmMxVud/GcnbXfOKJ35sznUmt3yM39cMlHR2sHbV9ymIpIMDpKg4kKw==" crossorigin=""></script>

        <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

        <!-- control.js -->
        <script src="/tom-and-journey/dist/js/tomandjourney/control.js"></script>


        <?php
        include('footer.php');
        ?>

        <style>
            .active-nav {
                color: #A64343 !important;
            }
        </style>

        <script>
            //navigation bar
            a = document.getElementById('trip-planner-link');
            a.classList.add('active-nav');

            //filter array
            filter_array = ['camera', 'bed', 'gaspump', 'dinner', 'train', 'museum', 'market', 'anchor', 'cafe', 'bar'];

            //name array
            photo_array = [];
            hotel_array = [];
            pump_array = [];
            food_array = [];
            train_array = [];
            museum_array = [];
            market_array = [];
            anchor_array = [];
            cafe_array = [];
            bar_array = [];

            //marker id for delete
            markers_id = [];

            //filter markers array
            filter_markers_array = [];

            //data array
            data_array = [photo_array, hotel_array, pump_array, food_array, train_array, museum_array, market_array, anchor_array, cafe_array, bar_array]

            function lat_lng_to_JSON(res_type, res_name, res_lat, res_lng) {
                if (res_type == 'photo') {
                    photo_array.push([res_name, [res_lat, res_lng]]);
                } else if (res_type == 'hotel') {
                    hotel_array.push([res_name, [res_lat, res_lng]]);
                } else if (res_type == 'pump') {
                    pump_array.push([res_name, [res_lat, res_lng]]);
                } else if (res_type == 'food') {
                    food_array.push([res_name, [res_lat, res_lng]]);
                } else if (res_type == 'train') {
                    train_array.push([res_name, [res_lat, res_lng]]);
                } else if (res_type == 'museum') {
                    museum_array.push([res_name, [res_lat, res_lng]]);
                } else if (res_type == 'market') {
                    market_array.push([res_name, [res_lat, res_lng]]);
                } else if (res_type == 'anchor') {
                    anchor_array.push([res_name, [res_lat, res_lng]]);
                } else if (res_type == 'cafe') {
                    cafe_array.push([res_name, [res_lat, res_lng]]);
                } else if (res_type == 'bar') {
                    bar_array.push([res_name, [res_lat, res_lng]]);
                }
            }


            // id_array = [];
            // markers_id = [];

            $(document).ready(function() {

                $.ajax({
                    url: 'map_connection.php',
                    type: 'get',
                    success: function(response) {

                        if (response != '') {
                            // console.log(response);
                            res = JSON.parse(response);
                            for (i = 0; i < res.length; i++) {

                                //insert geo data to array
                                lat_lng_to_JSON(res[i].type, res[i].name, res[i].lat, res[i].lng);
                            }
                            // console.log(photo_array);
                        }

                        // if (response.indexOf('success') != -1) {
                        //     // $('#modal-default').modal('toggle');
                        // }
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        console.log('error');
                    }
                });
            });

            center_map = [13.7528, 100.5173];

            // start point and end point for route page
            pin_1 = [13.754850589446578, 100.49297332763673]; //start
            pin_2 = [13.758921064889215, 100.50036002672189];
            pin_3 = [13.753859775676801, 100.50663402825472];
            pin_4 = [13.760644679289063, 100.51898002624513]; //end

            routing_markers = [pin_1, pin_2, pin_3, pin_4];

            //create awesomemarkers icon
            function GenerateMarkers(icon_name, marker_color) {
                return L.AwesomeMarkers.icon({
                    icon: icon_name,
                    prefix: "fa",
                    markerColor: marker_color,
                    iconColor: "white"
                });
            }

            //render map
            let mapOptions = {
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

            //check lat and long on map

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
                window.location.href = "index.php";
            }

            //render mark with click the filter
            function ActiveIcon(icon_num) {
                for (i = 0; i < filter_array.length; i++) {
                    num = (i + 1).toString();
                    icon_block = document.getElementById('icon-box-' + num);

                    if (icon_num == 'active_' + num) {
                        div = document.querySelector('#icon-box-' + num);
                        if (div.classList.contains('icon-block-' + num) == true) {
                            icon_block.classList.remove("icon-block-" + num);
                            RenderFilter(filter_array[i], data_array[i], 'remove');
                        } else {
                            icon_block.classList.add("icon-block-" + num);
                            RenderFilter(filter_array[i], data_array[i], 'add');
                        }
                    }
                }
            }

            //generate filter marker
            function GenerateFilterMarker(name_array, markers_array, push_array, icon_function) {
                for (j = 0; j < name_array.length; j++) {
                    let marker = new L.marker(markers_array[j][1], {
                        icon: icon_function,
                    })
                    push_array.push(marker);
                }
            }

            //render filter marker
            function RenderFilter(filter_name, data_array_name, action) {

                //filter markers arrray
                camera_markers = [];
                hotel_markers = [];
                gas_station_markers = [];
                dinner_markers = [];
                train_markers = [];
                museum_markers = [];
                market_markers = [];
                anchor_markers = [];
                cafe_markers = [];
                bar_markers = [];

                filter_markers_array = [
                    [photo_array, camera_markers, GenerateMarkers("fa-camera", "blue")],
                    [hotel_array, hotel_markers, GenerateMarkers("fa-bed", "black")],
                    [pump_array, gas_station_markers, GenerateMarkers("fa-gas-pump", "green")],
                    [food_array, dinner_markers, GenerateMarkers("fa-utensils", "lightgray")],
                    [train_array, train_markers, GenerateMarkers("fa-train", "darkblue")],
                    [museum_array, museum_markers, GenerateMarkers("fa-landmark", "red")],
                    [market_array, market_markers, GenerateMarkers("fa-store", "lightred")],
                    [anchor_array, anchor_markers, GenerateMarkers("fa-anchor", "cadetblue")],
                    [cafe_array, cafe_markers, GenerateMarkers("fa-coffee", "orange")],
                    [bar_array, bar_markers, GenerateMarkers("fa-wine-glass-alt", "purple")],
                ]


                for (i = 0; i < filter_markers_array.length; i++) {
                    GenerateFilterMarker(data_array[i], filter_markers_array[i][0], filter_markers_array[i][1], filter_markers_array[i][2]);
                }

                //markers array

                if (filter_name == 'camera') {
                    marker_array = camera_markers;
                } else if (filter_name == 'bed') {
                    marker_array = hotel_markers;
                } else if (filter_name == 'gaspump') {
                    marker_array = gas_station_markers;
                } else if (filter_name == 'dinner') {
                    marker_array = dinner_markers;
                } else if (filter_name == 'train') {
                    marker_array = train_markers;
                } else if (filter_name == 'museum') {
                    marker_array = museum_markers;
                } else if (filter_name == 'market') {
                    marker_array = market_markers;
                } else if (filter_name == 'anchor') {
                    marker_array = anchor_markers;
                } else if (filter_name == 'cafe') {
                    marker_array = cafe_markers;
                } else if (filter_name == 'bar') {
                    marker_array = bar_markers;
                }

                //markers id array

                if (action == 'add') {

                    id_array = [];

                    var layerGroup = L.layerGroup(marker_array);
                    layerGroup.addTo(map);

                    for (let i = 0; i < marker_array.length; i++) {
                        id_array.push(marker_array[i]._leaflet_id);
                    }

                    markers_id.push([filter_name, id_array]);

                    map.eachLayer(function(layer) {
                        for (let i = 0; i < marker_array.length; i++) {
                            id = id_array[i][1];
                            lat = data_array_name[i][0];
                            lng = data_array_name[i][1];

                            if (layer._leaflet_id == id) {
                                geocodeService.reverse().latlng({
                                    "lat": lat,
                                    "lng": lng,
                                }).run(function(error, result) {
                                    if (error) {
                                        layer.bindPopup('NO PLACE MATCH');
                                    } else {
                                        layer.bindPopup(photo_array[i][0]);
                                    }
                                })
                            }
                        }
                    });

                } else {
                    map.eachLayer(function(layer) {

                        console.log(markers_id);

                        for (let i = 0; i < markers_id.length; i++) {
                            if (markers_id[i][0] == filter_name) {
                                for (let j = 0; j < markers_id[i][1].length; j++) {
                                    id = markers_id[i][1];
                                    if (layer._leaflet_id == id[j]) {
                                        map.removeLayer(layer);
                                    }
                                }
                            }
                        }
                    });

                }
            }

            function MinimizeTab() {

                element_config = [
                    ['.route-main-block', 'hidden'],
                    ['.login-block', 'visible'],
                    ['.info-block', 'visible']
                ];

                for (i = 0; i < element_config.length; i++) {
                    element_block = document.querySelectorAll(element_config[i][0]);
                    element_block.forEach(e => {
                        e.style.visibility = element_config[i][1];
                    });
                }

                leaflet_zoom_block = document.querySelectorAll('.leaflet-control-container');
                leaflet_zoom_block.forEach(e => {
                    e.style.right = '5%';
                });

                routing_markers_id = [];

                // clear layers system
                map.eachLayer(function(layer) {
                    for (let i = 0; i < routing_markers_list.length; i++) {
                        routing_markers_id.push(routing_markers_list[i]._leaflet_id);

                    }
                })
                map.eachLayer(function(layer) {
                    for (let i = 0; i < routing_markers.length; i++) {
                        id = routing_markers_id[i];
                        if (layer._leaflet_id == id) {
                            map.removeLayer(layer);
                        }
                    }
                });

                map.removeControl(routing);

            }

            function ExpandTab() {
                element_config = [
                    ['.route-main-block', 'visible'],
                    ['.login-block', 'hidden'],
                    ['.info-block', 'hidden']
                ];

                for (i = 0; i < element_config.length; i++) {
                    element_block = document.querySelectorAll(element_config[i][0]);
                    element_block.forEach(e => {
                        e.style.visibility = element_config[i][1];
                    });
                }

                leaflet_zoom_block = document.querySelectorAll('.leaflet-control-container');
                leaflet_zoom_block.forEach(e => {
                    e.style.right = '35%';
                })

                routing_markers_list = [];

                // routing system
                routing = L.Routing.control({
                    waypoints: [
                        pin_1,
                        pin_2,
                        pin_3,
                        pin_4,
                    ],
                    createMarker: function(i, start, n) {
                        var marker_icon = null;
                        var others_marker = [pin_2, pin_3];

                        // start icon
                        if (i == 0) {
                            marker = L.marker(pin_1, {
                                draggable: true,
                                bounceOnAdd: false,
                                bounceOnAddOptions: {
                                    duration: 1000,
                                    height: 800,
                                },
                                icon: GenerateMarkers("fa-flag", "green"),
                            }, )

                            routing_markers_list.push(marker);

                        }
                        // end icon
                        else if (i == n - 1) {
                            // marker_icon = icon_end;
                            marker = L.marker(pin_4, {
                                draggable: true,
                                bounceOnAdd: false,
                                bounceOnAddOptions: {
                                    duration: 1000,
                                    height: 800,
                                },
                                icon: GenerateMarkers("fa-flag", "black"),
                            }, )
                            routing_markers_list.push(marker);

                        } else {

                            marker_icon = L.ExtraMarkers.icon({
                                icon: 'fa-number',
                                number: i,
                                markerColor: "black",
                                iconColor: "white"
                            });

                            marker = L.marker(others_marker[i - 1], {
                                draggable: true,
                                bounceOnAdd: false,
                                bounceOnAddOptions: {
                                    duration: 1000,
                                    height: 800,
                                },
                                icon: marker_icon,
                            }, )
                            routing_markers_list.push(marker);
                        }
                        return marker;
                    }
                }).addTo(map);


            }
        </script>