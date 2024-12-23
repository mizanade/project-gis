@extends('layouts.app')

@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>WARTEG CIPUTAT</h4>
                            <h6>THE BEST EXPERIENCE</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#chefs">See Location</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="{{ asset('template-resto/assets/images/warteg1.jpeg') }}" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="{{ asset('template-resto/assets/images/warteg2.webp') }}" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="{{ asset('template-resto/assets/images/warteg3.jpg') }}" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>We Leave A Delicious Memory For You</h2>
                        </div>
                        <p>Warteg adalah tempat makan favorit banyak orang karena menyajikan makanan enak dengan harga
                            terjangkau. Website ini dibuat untuk memudahkan masyarakat menemukan lokasi warteg di Ciputat
                            dengan cepat dan praktis.
                        </p>
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('template-resto/assets/images/about1.jpg') }}" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('template-resto/assets/images/about2.jpg') }}" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('template-resto/assets/images/about3.JPG') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Beberapa menu yang ada di Warteg</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    <div class="item">
                        <div class='card card1'>
                            <div class='info'>
                                <h1 class='title'>Ikan Tongkol</h1>
                                <p class='description'>Ikan tongkol warteg adalah hidangan ikan dengan bumbu pedas atau
                                    santan, populer di warteg karena rasa gurihnya.</p>
                                <div class="main-text-button">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card2'>
                            <div class='info'>
                                <h1 class='title'>Kentang Goreng</h1>
                                <p class='description'>Kentang goreng adalah potongan kentang yang digoreng hingga renyah
                                    dan gurih.</p>
                                <div class="main-text-button">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                            <div class='info'>
                                <h1 class='title'>Tempe Orek</h1>
                                <p class='description'>Tempe orek adalah tempe goreng dengan bumbu kecap manis yang gurih
                                    dan sedikit manis.</p>
                                <div class="main-text-button">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card4'>
                            <div class='info'>
                                <h1 class='title'>Telur Dadar</h1>
                                <p class='description'>Telur dadar adalah telur yang dikocok dengan bumbu dan digoreng
                                    hingga matang.</p>
                                <div class="main-text-button">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card5'>
                            <div class='info'>
                                <h1 class='title'>Tumis Kangkung</h1>
                                <p class='description'>Tumis kangkung adalah hidangan kangkung yang ditumis dengan bumbu
                                    sederhana, gurih, dan segar.</p>
                                <div class="main-text-button">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                            <div class='info'>
                                <h1 class='title'>Tempe Orek</h1>
                                <p class='description'>Tempe orek adalah tempe goreng dengan bumbu kecap manis yang gurih
                                    dan sedikit manis.</p>
                                <div class="main-text-button">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Chefs Area Starts ***** -->
    <section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="text-center col-lg-4 offset-lg-4">
                    <div class="section-heading">
                        <h2>Warteg Location in Ciputat</h2>
                    </div>
                </div>
            </div>

            <div class="content" style="display: flex; justify-content: center; align-items: center;">
                <div id="map"
                    style="height: 750px; width: 100%; max-width: 1200px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); overflow: hidden; z-index: 0;">
                </div>
            </div>


            <script>
                var provin = new L.LayerGroup();
                var warteg = new L.LayerGroup();
                var ciputat = new L.LayerGroup();

                var map = L.map("map", {
                    center: [-6.3035, 106.7644], // Koordinat Ciputat Timur
                    zoom: 15, // Level zoom cukup dekat untuk menampilkan Ciputat Timur
                    zoomControl: false,
                    layers: [],
                });
                var GoogleSatelliteHybrid = L.tileLayer(
                    "https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}", {
                        maxZoom: 22,
                        attribution: "Warteg Ciputat",
                    }
                ).addTo(map);

                var Esri_NatGeoWorldMap = L.tileLayer(
                    "https://server.arcgisonline.com/ArcGIS/rest/services/NatGeo_World_Map/MapServer/tile/{z}/{y}/{x}", {
                        attribution: "Tiles &copy; Esri &mdash; National Geographic, Esri, DeLorme, NAVTEQ, UNEP-WCMC, USGS, NASA, ESA, METI, NRCAN, GEBCO, NOAA, iPC",
                        maxZoom: 16,
                    }
                );

                var GoogleMaps = new L.TileLayer(
                    "https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}", {
                        opacity: 1.0,
                        attribution: "Latihan Web GIS",
                    }
                );

                var GoogleRoads = new L.TileLayer(
                    "https://mt1.google.com/vt/lyrs=h&x={x}&y={y}&z={z}", {
                        opacity: 1.0,
                        attribution: "Latihan Web GIS",
                    }
                );

                var baseLayers = {
                    "Google Satellite Hybrid": GoogleSatelliteHybrid,
                    "Esri NatGeo World Map": Esri_NatGeoWorldMap,
                    "Google Maps": GoogleMaps,
                    "Google Roads": GoogleRoads,
                };

                var groupedOverLayers = {
                    "Peta Dasar": {
                        Provinsi: provin,
                        "Ciputat Timur": ciputat,
                    },
                };

                var overlayLayers = {};
                L.control.groupedLayers(baseLayers, groupedOverLayers).addTo(map);

                var osmUrl =
                    "https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}";
                var osmAttrib = "Map data &copy; OpenStreetMap contributors";

                // Layer tile untuk peta mini
                var osm2 = new L.TileLayer(osmUrl, {
                    minZoom: 0,
                    maxZoom: 13,
                    attribution: osmAttrib,
                });

                // Opsi tampilan untuk rect dalam MiniMap
                var rect1 = {
                    color: "#ff1100",
                    weight: 3,
                };
                var rect2 = {
                    color: "#0000AA",
                    weight: 1,
                    opacity: 0,
                    fillOpacity: 0,
                };

                // Inisialisasi MiniMap dengan opsi yang sudah ditentukan
                var miniMap = new L.Control.MiniMap(osm2, {
                    toggleDisplay: true,
                    position: "bottomright",
                    aimingRectOptions: rect1,
                    shadowRectOptions: rect2,
                }).addTo(map);

                L.Control.geocoder({
                    position: "topleft",
                    collapsed: true,
                }).addTo(map);

                //menambahkan koordinat
                var locateControl = L.control
                    .locate({
                        position: "topleft",
                        drawCircle: true,
                        follow: true,
                        setView: true,
                        keepCurrentZoomLevel: true,
                        markerStyle: {
                            weight: 1,
                            opacity: 0.8,
                            fillOpacity: 0.8,
                        },
                        circleStyle: {
                            weight: 1,
                            clickable: false,
                        },
                        icon: "fa fa-location-arrow",
                        metric: false,
                        strings: {
                            title: "My location",
                            popup: "You are within {distance} {unit} from this point",
                            outsideMapBoundsMsg: "You seem located outside the boundaries of the map",
                        },
                        locateOptions: {
                            maxZoom: 18,
                            watch: true,
                            enableHighAccuracy: true,
                            maximumAge: 10000,
                            timeout: 10000,
                        },
                    })
                    .addTo(map);

                var zoom_bar = new L.Control.ZoomBar({
                    position: "topleft",
                }).addTo(map);

                L.control
                    .coordinates({
                        position: "bottomleft",
                        decimals: 2,
                        decimalSeperator: ",",
                        labelTemplateLat: "Latitude: {y}",
                        labelTemplateLng: "Longitude: {x}",
                    })
                    .addTo(map);
                /* scala */
                L.control
                    .scale({
                        metric: true,
                        position: "bottomleft",
                    })
                    .addTo(map);

                var north = L.control({
                    position: "bottomleft"
                });

                north.onAdd = function(map) {
                    var div = L.DomUtil.create("div", "info legend");
                    div.innerHTML = '<img src="' + window.location.origin +
                        '/cardinal-direction.png" style="width:200px; position:absolute; bottom:80px; left:10px; z-index:9999;">';
                    return div;
                };

                north.addTo(map);


                $.getJSON("{{ asset('prov_polygon.geojson') }}", function(data) {
                    L.geoJson(data, {
                        style: function(feature) {
                            let fillColor;
                            const kode = feature.properties.kode;

                            if (kode > 21) fillColor = "#006837";
                            else if (kode > 20) fillColor = "#fec44f";
                            else if (kode > 19) fillColor = "#c2e699";
                            else if (kode > 18) fillColor = "#fee0d2";
                            else if (kode > 17) fillColor = "#756bb1";
                            else if (kode > 16) fillColor = "#8c510a";
                            else if (kode > 15) fillColor = "#01665e";
                            else if (kode > 14) fillColor = "#e41a1c";
                            else if (kode > 13) fillColor = "#636363";
                            else if (kode > 12) fillColor = "#762a83";
                            else if (kode > 11) fillColor = "#1b7837";
                            else if (kode > 10) fillColor = "#d53e4f";
                            else if (kode > 9) fillColor = "#67001f";
                            else if (kode > 8) fillColor = "#c994c7";
                            else if (kode > 7) fillColor = "#fdbb84";
                            else if (kode > 6) fillColor = "#dd1c77";
                            else if (kode > 5) fillColor = "#3182bd";
                            else if (kode > 4) fillColor = "#f03b20";
                            else if (kode > 3) fillColor = "#31a354";
                            else if (kode > 2) fillColor = "#78c679";
                            else if (kode > 1) fillColor = "#c2e699";
                            else if (kode > 0) fillColor = "#ffffcc";
                            else fillColor = "#f7f7f7"; // No data

                            return {
                                color: "#999",
                                weight: 1,
                                fillColor: fillColor,
                                fillOpacity: 0.6,
                            };
                        },
                        onEachFeature: function(feature, layer) {
                            layer.bindPopup(feature.properties.PROV);
                        },
                    }).addTo(provin);
                });

                $.getJSON("{{ asset('ciputat_timur_polygon.geojson') }}", function(data) {
                    L.geoJson(data, {
                        style: function(feature) {
                            let fillColor;
                            const kode = feature.properties.kode;

                            if (kode > 21) fillColor = "#006837";
                            else if (kode > 20) fillColor = "#fec44f";
                            else if (kode > 19) fillColor = "#c2e699";
                            else if (kode > 18) fillColor = "#fee0d2";
                            else if (kode > 17) fillColor = "#756bb1";
                            else if (kode > 16) fillColor = "#8c510a";
                            else if (kode > 15) fillColor = "#01665e";
                            else if (kode > 14) fillColor = "#e41a1c";
                            else if (kode > 13) fillColor = "#636363";
                            else if (kode > 12) fillColor = "#762a83";
                            else if (kode > 11) fillColor = "#1b7837";
                            else if (kode > 10) fillColor = "#d53e4f";
                            else if (kode > 9) fillColor = "#67001f";
                            else if (kode > 8) fillColor = "#c994c7";
                            else if (kode > 7) fillColor = "#fdbb84";
                            else if (kode > 6) fillColor = "#dd1c77";
                            else if (kode > 5) fillColor = "#3182bd";
                            else if (kode > 4) fillColor = "#f03b20";
                            else if (kode > 3) fillColor = "#31a354";
                            else if (kode > 2) fillColor = "#78c679";
                            else if (kode > 1) fillColor = "#c2e699";
                            else if (kode > 0) fillColor = "#ffffcc";
                            else fillColor = "#f7f7f7"; // No data

                            return {
                                color: "#999",
                                weight: 1,
                                fillColor: fillColor,
                                fillOpacity: 0.6,
                            };
                        },
                        onEachFeature: function(feature, layer) {
                            layer.bindPopup(feature.properties.NAME_4);
                        },
                    }).addTo(ciputat);
                });

                // Menyesuaikan layer GeoJSON yang di-load agar sesuai dengan Ciputat Timur
                $.getJSON("{{ asset('warteg_ciputat.geojson') }}", function(data) {
                    var ratIcon = L.icon({
                        iconUrl: "{{ asset('marker-1.png') }}",
                        iconSize: [20, 40],
                    });

                    L.geoJson(data, {
                        pointToLayer: function(feature, latlng) {
                            var marker = L.marker(latlng, {
                                icon: ratIcon
                            });

                            // Gabungkan nama dan gambar dalam satu konten popup
                            var popupContent = `
                <div style="display: flex; flex-direction: column; align-items: center;">
                    <h3>${
                        feature.properties.Nama_Warteg || "Nama tidak tersedia"
                    }</h3>
                    <img src="${
                        feature.properties.image || ""
                    }" alt="Warteg Image" style="width:150px; height:auto;">
                    <p>${
                        feature.properties.Alamat || "Alamat tidak tersedia"
                    }</p>
                </div>`;

                            marker.bindPopup(popupContent); // Bind popup dengan konten gabungan
                            return marker;
                        },
                    }).addTo(map);
                });
            </script>


        </div>
    </section>
@endsection
