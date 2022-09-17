<div id="map" style="width: 100%; height: 400px;"></div>
<body>

<div id='map'></div>
<script>


var cities = L.layerGroup();

var mLittleton = L.marker([-8.0656311,112.0760927]).bindPopup('Griya jahit HARVIE').addTo(cities);
var mDenver = L.marker([-8.1210844,112.2030851]).bindPopup('Dewa Ruci Craft').addTo(cities);
var mAurora = L.marker([-8.0345753,112.2477014]).bindPopup('Putra Mandiri Wood Craft').addTo(cities);
var mGolden = L.marker([-8.0948429,112.235105]).bindPopup('Batik LWO Lwang Wentar').addTo(cities);

var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>';
var mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

var streets = L.tileLayer(mbUrl, {id: 'mapbox/streets-v11', tileSize: 512, zoomOffset: -1, attribution: mbAttr});

var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
	maxZoom: 19,
	attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
});

var map = L.map('map', {
	center: [-8.0948239,112.1301503],
	zoom: 10,
	layers: [osm, cities]
});

var baseLayers = {
	'OpenStreetMap': osm,
	'Streets': streets
};

var overlays = {
	'Cities': cities
};

var layerControl = L.control.layers(baseLayers, overlays).addTo(map);
var crownHill = L.marker([39.75, -105.09]).bindPopup('This is Crown Hill Park.');
var rubyHill = L.marker([39.68, -105.00]).bindPopup('This is Ruby Hill Park.');

var parks = L.layerGroup([crownHill, rubyHill]);

var satellite = L.tileLayer(mbUrl, {id: 'mapbox/satellite-v9', tileSize: 512, zoomOffset: -1, attribution: mbAttr});
layerControl.addBaseLayer(satellite, 'Satellite');
layerControl.addOverlay(parks, 'Parks');
</script>
</body>