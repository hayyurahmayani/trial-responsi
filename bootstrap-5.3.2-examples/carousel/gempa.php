<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Earthquake</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

    <!-- Search CSS Library -->
    <link rel="stylesheet" href="assets/plugins/leaflet-search/leaflet-search.css" />

    <!-- Geolocation CSS Library for Plugin -->
    <link rel="stylesheet"
        href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.css" />

    <!-- Leaflet Mouse Position CSS Library -->
    <link rel="stylesheet" href="assets/plugins/leaflet-mouseposition/L.Control.MousePosition.css" />

    <!-- Leaflet Measure CSS Library -->
    <link rel="stylesheet" href="assets/plugins/leaflet-measure/leaflet-measure.css" />

    <!-- EasyPrint CSS Library -->
    <link rel="stylesheet" href="assets/plugins/leaflet-easyprint/easyPrint.css" />

    <!-- MarkerCluster CSS Library -->
    <link rel="stylesheet" href="assets/plugins/leaflet-markercluster/MarkerCluster.css" />
    <link rel="stylesheet" href="assets/plugins/leaflet-markercluster/MarkerCluster.Default.css" />

    <!-- Routing CSS Library -->
    <link rel="stylesheet" href="assets/plugins/leaflet-routing/leaflet-routing-machine.css" />



    <style>
        #map {
            height: 97.5vh;
        }

        *.info {
            padding: 6px 8px;
            font: 14px/16px Arial, Helvetica, sans-serif;
            background: white;
            background: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            text-align: center;
        }

        .info h2 {
            margin: 0 0 5px;
            color: #777;
        }
    </style>
</head>

<body>
    <div id="map"></div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <!-- Search JavaScript Library -->
    <script src="assets/plugins/leaflet-search/leaflet-search.js"></script>

    <!-- Geolocation Javascript Library -->
    <script
        src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.min.js"></script>

    <!-- Leaflet Mouse Position JavaScript Library -->
    <script src="assets/plugins/leaflet-mouseposition/L.Control.MousePosition.js"></script>

    <!-- Leaflet Measure JavaScript Library -->
    <script src="assets/plugins/leaflet-measure/leaflet-measure.js"></script>

    <!-- EasyPrint JavaScript Library -->
    <script src="assets/plugins/leaflet-easyprint/leaflet.easyPrint.js"></script>

    <!-- Markercluster JavaScript Library -->
    <script src="assets/plugins/leaflet-markercluster/leaflet.markercluster.js"></script>
    <script src="assets/plugins/leaflet-markercluster/leaflet.markercluster-src.js"></script>

    <!-- Routing JavaScript Library -->
    <script src="assets/plugins/leaflet-routing/leaflet-routing-machine.js"></script>
    <script src="assets/plugins/leaflet-routing/leaflet-routing-machine.min.js"></script>

    <!-- Bottombar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-bottom">
    <a class="navbar-brand" href="cover.html"><b>📒 More Information</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#infoModal1">⛰️
            Active Fault 1</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#infoModal2">⛰️
            Active Fault 2</a>
            </li>
        </ul>
    </div>
    </nav>
    <!-- End of Bottombar -->

    <!-- Modal Info 1-->
    <div class="modal fade" id="infoModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header alert-info">
                    <h5 class="modal-title" id="exampleModalCenterTitle">⛰️ Active Fault 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                <div class="modal-body">
                <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                    <div class="p-3 mb-2 bg-danger text-white">Semangko Fault | Daerah Istimewa Aceh & Lampung</div>
                        <p>a horizontal fault that extends along 1,900 kilometers on the western side of Sumatra Island with a Slip rate of 5 mm/year.</p>
                    </div>
                    <div class="p-3 mb-2 bg-danger text-white">Opak Fault | Daerah Istimewa Yogyakarta</div>
                        <p>A vertical fault that extends from Wonosari highland to Yogyakarta with a Slip rate of 2.4 mm per year.</p>
                    </div>
                </div> 
                </div>
            </div>
    </div>
    <!-- End of Modal Info 1-->

    <!-- Modal Info 2-->
    <div class="modal fade" id="infoModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header alert-info">
                    <h5 class="modal-title" id="exampleModalCenterTitle">⛰️ Active Fault 2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                <div class="modal-body">
                <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                    <div class="p-3 mb-2 bg-danger text-white">Sorong Fault | Papua</div>
                        <p>A horizontal fault formed due to the collision of the Indo-Australian plate with the Pacific plate with a slip rate of 8.5 mm per year.</p>
                    </div>
                    <div class="p-3 mb-2 bg-danger text-white">Palu Koro Fault | Sulawesi Tengah</div>
                        <p>A horizontal fault that cuts across Sulawesi Island from Palu Gulf to Bone Valley with a slip rate of 30 - 44 mm per year.</p>
                    </div>
                </div>
                </div>
            </div>
    </div>
    <!-- End of Modal Info 2-->

    <script>
        var wfsgeoserver1 = L.geoJson(null, {

            pointToLayer: function (feature, latlng) {
                return L.marker(latlng, {
                    
                });
            },
            onEachFeature: function (feature, layer) {
                var content =
                "Provinsi : " + feature.properties.provinsi;

                layer.on({
                    click: function (e) {
                        wfsgeoserver1.bindPopup(content).openPopup();
                    },
                    mouseover: function (e) {
                        wfsgeoserver1
                            .bindTooltip(feature.properties.provinsi)
                            .openTooltip();
                    },
                    mouseout: function (e) {
                        wfsgeoserver1.closePopup();
                        wfsgeoserver1.closeTooltip();
                    },
                });
            },

        });

        $.getJSON("wfsgeoserver1.php", function (data) {
            wfsgeoserver1.addData(data);
            wfsgeoserver1.addTo(map);
            map.fitBounds(wfsgeoserver1.getBounds());
        });
        // Inisialisasi Peta
        var map = L.map("map").setView([-2.50, 117.90], 5);

        // Judul dan sub judul
        var title = new L.Control();
        title.onAdd = function (map) {
            this._div = L.DomUtil.create("div", "info");
            this.update();
            return this._div;
        };
        title.update = function () {
            this._div.innerHTML =
                this._div.innerHTML = '<h2>EARTHQUAKE</h2> INDONESIA'
        };
        title.addTo(map);

        // Legenda
        L.Control.Legend = L.Control.extend({
            onAdd: function (map) {
                var img = L.DomUtil.create("img");
                img.src = "assets/img/legend/earthquake.png";
                img.style.width = "300px";
                return img;
            },
        });
        L.control.Legend = function (opts) {
            return new L.Control.Legend(opts);
        };

        L.control.Legend({ position: "bottomleft" }).addTo(map);

        // Watermark
        L.Control.Watermark = L.Control.extend({
            onAdd: function (map) {
                var img = L.DomUtil.create("img");
                img.src = "assets/img/logo/LOGO_SIG_BLUE.png";
                img.style.width = "100px";
                return img;
            },
        });
        L.control.watermark = function (opts) {
            return new L.Control.Watermark(opts);
        };

        L.control.watermark({ position: "topleft" }).addTo(map);

        // Basemap
        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            maxZoom: 19,
            attribution:
                'Map data ©️ <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        }).addTo(map);

        var basemap1 = L.tileLayer(
            "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
            {
                attribution:
                    '<a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> | <a href="DIVSIGUGM" target="_blank">DIVSIG UGM</a>',
            }
        );

        var basemap2 = L.tileLayer(
            "https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}",
            {
                attribution:
                    'Tiles &copy; Esri | <a href="Latihan WebGIS" target="_blank">DIVSIG UGM</a>',
            }
        );

        var basemap3 = L.tileLayer(
            "https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}",
            {
                attribution:
                    'Tiles &copy; Esri | <a href="Latihan WebGIS" target="_blank">DIVSIG UGM</a>',
            }
        );

        var basemap4 = L.tileLayer(
            "https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png",
            {
                attribution:
                    '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
            }
        );

        basemap3.addTo(map);

        var baseMaps = {
            "OpenStreetMap": basemap1,
            "Esri World Street": basemap2,
            "Esri Imagery": basemap3,
            "Stadia Dark Mode": basemap4
        };

        L.control.layers(baseMaps).addTo(map);

        /* Layer Marker */
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "responsi";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM gempa";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $lat = $row["latitude"];
                $long = $row["longitude"];
                $info = $row["kab"];
                echo "L.marker([$lat, $long]).addTo(map).bindPopup('$info');";
            } 
        }
        else {
            echo "0 results";
        }
            $conn->close();
    ?>

        // Plugin Search
        var searchControl = new L.Control.Search({
            position: "topleft",
            layer: wfsgeoserver1, //Nama variabel layer
            propertyName: "kecamatan", //Field untuk pencarian
            marker: false,
            moveToLocation: function (latlng, title, map) {
                var zoom = map.getBoundsZoom(latlng.layer.getBounds());
                map.setView(latlng, zoom);
            },
        });
        searchControl
            .on("search:locationfound", function (e) {
                e.layer.setStyle({
                    fillColor: "#ffff00",
                    color: "#0000ff",
                });
            })
            .on("search:collapse", function (e) {
                featuresLayer.eachLayer(function (layer) {
                    featuresLayer.resetStyle(layer);
                });
            });
        map.addControl(searchControl);

        /*Plugin Geolocation */
        var locateControl = L.control
            .locate({
                position: "topleft",
                drawCircle: true,
                follow: true,
                setView: true,
                keepCurrentZoomLevel: false,
                markerStyle: {
                    weight: 1,
                    opacity: 0.8,
                    fillOpacity: 0.8,
                },
                circleStyle: {
                    weight: 1,
                    clickable: false,
                },
                icon: "fas fa-crosshairs",
                metric: true,
                strings: {
                    title: "Click for Your Location",
                    popup: "You're here. Accuracy {distance} {unit}",
                    outsideMapBoundsMsg: "Not available",
                },
                locateOptions: {
                    maxZoom: 16,
                    watch: true,
                    enableHighAccuracy: true,
                    maximumAge: 10000,
                    timeout: 10000,
                },
            })
            .addTo(map);

        /*Plugin Mouse Position Coordinate */
        L.control
            .mousePosition({
                position: "bottomright",
                separator: ",",
                prefix: "Point Coodinate: ",
            })
            .addTo(map);

        /*Plugin Measurement Tool */
        var measureControl = new L.Control.Measure({
            position: "topleft",
            primaryLengthUnit: "meters",
            secondaryLengthUnit: "kilometers",
            primaryAreaUnit: "hectares",
            secondaryAreaUnit: "sqmeters",
            activeColor: "#FF0000",
            completedColor: "#00FF00",
        });
        measureControl.addTo(map);

        /*Plugin EasyPrint */
        L.easyPrint({
            title: "Print",
        }).addTo(map);

    </script>
</body>

</html>