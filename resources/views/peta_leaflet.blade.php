@extends('layouts.app')

@section('content')
    <div class="content"
        style="
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f4f4f9;
    padding: 20px;
">
        <div id="map"
            style="
        height: 750px;
        width: 100%;
        max-width: 1200px;
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        overflow: hidden;
    ">
        </div>
    </div>

    <script>
        var provin = new L.LayerGroup();
        var sungai = new L.LayerGroup();
        var prov = new L.LayerGroup();
        var faskes = new L.LayerGroup();

        var map = L.map('map', {
            center: [-1.7912604466772375, 116.42311966554416],
            zoom: 5,
            zoomControl: false,
            layers: []
        });
        var GoogleSatelliteHybrid = L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
            maxZoom: 22,
            attribution: 'Latihan Web GIS'
        }).addTo(map);

        var Esri_NatGeoWorldMap = L.tileLayer(
            'https://server.arcgisonline.com/ArcGIS/rest/services/NatGeo_World_Map/MapServer/tile/{z}/{y}/{x}', {
                attribution: 'Tiles &copy; Esri &mdash; National Geographic, Esri, DeLorme, NAVTEQ, UNEP-WCMC, USGS, NASA, ESA, METI, NRCAN, GEBCO, NOAA, iPC',
                maxZoom: 16
            });

        var GoogleMaps = new L.TileLayer(
            'https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
                opacity: 1.0,
                attribution: 'Latihan Web GIS'
            }
        );

        var GoogleRoads = new L.TileLayer(
            'https://mt1.google.com/vt/lyrs=h&x={x}&y={y}&z={z}', {
                opacity: 1.0,
                attribution: 'Latihan Web GIS'
            }
        );

        var baseLayers = {
            'Google Satellite Hybrid': GoogleSatelliteHybrid,
            'Esri NatGeo World Map': Esri_NatGeoWorldMap,
            'Google Maps': GoogleMaps,
            'Google Roads': GoogleRoads
        };

        var groupedOverLayers = {
            "Peta Dasar": {
                'Ibu Kota Provinsi': prov,
                'Jaringan sungai': sungai,
                'Provinsi': provin
            },
            "Peta Khusus": {
                'Fasilitas Kesehatan': faskes
            }
        };

        var overlayLayers = {}
        L.control.groupedLayers(baseLayers, groupedOverLayers).addTo(map);


        var osmUrl = 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}';
        var osmAttrib = 'Map data &copy; OpenStreetMap contributors';

        // Layer tile untuk peta mini
        var osm2 = new L.TileLayer(osmUrl, {
            minZoom: 0,
            maxZoom: 13,
            attribution: osmAttrib
        });

        // Opsi tampilan untuk rect dalam MiniMap
        var rect1 = {
            color: "#ff1100",
            weight: 3
        };
        var rect2 = {
            color: "#0000AA",
            weight: 1,
            opacity: 0,
            fillOpacity: 0
        };

        // Inisialisasi MiniMap dengan opsi yang sudah ditentukan
        var miniMap = new L.Control.MiniMap(osm2, {
            toggleDisplay: true,
            position: "bottomright",
            aimingRectOptions: rect1,
            shadowRectOptions: rect2
        }).addTo(map);

        L.Control.geocoder({
            position: "topleft",
            collapsed: true
        }).addTo(map);

        //menambahkan koordinat
        var locateControl = L.control.locate({
            position: "topleft",
            drawCircle: true,
            follow: true,
            setView: true,
            keepCurrentZoomLevel: true,
            markerStyle: {
                weight: 1,
                opacity: 0.8,
                fillOpacity: 0.8
            },
            circleStyle: {
                weight: 1,
                clickable: false
            },
            icon: "fa fa-location-arrow",
            metric: false,
            strings: {
                title: "My location",
                popup: "You are within {distance} {unit} from this point",
                outsideMapBoundsMsg: "You seem located outside the boundaries of the map"
            },
            locateOptions: {
                maxZoom: 18,
                watch: true,
                enableHighAccuracy: true,
                maximumAge: 10000,
                timeout: 10000
            }
        }).addTo(map);

        var zoom_bar = new L.Control.ZoomBar({
            position: 'topleft'
        }).addTo(map);

        L.control.coordinates({
            position: "bottomleft",
            decimals: 2,
            decimalSeperator: ",",
            labelTemplateLat: "Latitude: {y}",
            labelTemplateLng: "Longitude: {x}"
        }).addTo(map);
        /* scala */
        L.control.scale({
            metric: true,
            position: "bottomleft"
        }).addTo(map);

        var north = L.control({
            position: "bottomleft"
        });
        north.onAdd = function(map) {
            var div = L.DomUtil.create("div", "info legend");
            div.innerHTML = '<img src="{{ asset('cardinal-direction.png') }}" style="width:200px;">';
            return div;
        }
        north.addTo(map)

        var north = L.control({
            position: "bottomleft"
        });

        $.getJSON("{{ asset('provinsi.geojson') }}", function(data) {
            var ratIcon = L.icon({
                iconUrl: "{{ asset('marker-1.png') }}",
                iconSize: [12, 10]
            });

            L.geoJson(data, {
                pointToLayer: function(feature, latlng) {
                    var marker = L.marker(latlng, {
                        icon: ratIcon
                    });
                    marker.bindPopup(feature.properties.CITY_NAME);
                    return marker;
                }
            }).addTo(prov);
        });

        // Memuat file GeoJSON
        $.getJSON("{{ asset('puskesmas.geojson') }}", function(data) {
            // Membuat ikon custom untuk marker
            var ratIcon = L.icon({
                iconUrl: "{{ asset('marker-2.png') }}",
                iconSize: [12, 10]
            });

            // Menambahkan GeoJSON ke peta dengan ikon custom
            L.geoJson(data, {
                pointToLayer: function(feature, latlng) {
                    var marker = L.marker(latlng, {
                        icon: ratIcon
                    });
                    marker.bindPopup(feature.properties.NAMOBJ); // Menampilkan popup
                    return marker;
                }
            }).addTo(faskes);
        });

        $.getJSON("{{ asset('rsu.geojson') }}", function(data) {
            // Membuat ikon custom untuk marker
            var ratIcon = L.icon({
                iconUrl: "{{ asset('marker-3.png') }}",
                iconSize: [12, 10]
            });

            // Menambahkan GeoJSON ke peta dengan ikon custom
            L.geoJson(data, {
                pointToLayer: function(feature, latlng) {
                    var marker = L.marker(latlng, {
                        icon: ratIcon
                    });
                    marker.bindPopup(feature.properties.NAMOBJ); // Menampilkan popup
                    return marker;
                }
            }).addTo(faskes);
        });

        $.getJSON("{{ asset('sungai.geojson') }}", function(data) {
            L.geoJson(data, {
                style: function(feature) {
                    let color;
                    const kode = feature.properties.kode;

                    if (kode < 2) {
                        color = "#f2051d";
                    } else if (kode > 0) {
                        color = "#f2051d";
                    } else {
                        color = "#f2051d"; // No data
                    }

                    return {
                        color: "#999",
                        weight: 5,
                        fillOpacity: 0.8,
                        color: color,
                    };
                },
                onEachFeature: function(feature, layer) {
                    layer.bindPopup();
                },
            }).addTo(sungai);
        });

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
    </script>
@endsection