
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
	'Ekraf Kriya': cities
};

var layerControl = L.control.layers(baseLayers, overlays).addTo(map);
var crownHill = L.marker([39.75, -105.09]).bindPopup('This is Crown Hill Park.');
var rubyHill = L.marker([-8.1038844,112.1615578]).bindPopup('Sekolah Musik "MAYOR MINOR"');

var parks = L.layerGroup([crownHill, rubyHill]);

var satellite = L.tileLayer(mbUrl, {id: 'mapbox/satellite-v9', tileSize: 512, zoomOffset: -1, attribution: mbAttr});
layerControl.addBaseLayer(satellite, 'Satellite');
layerControl.addOverlay(parks, 'Ekraf Musik');


var nafada = L.marker([-8.1194802,112.256858]).bindPopup('Nadafa komunika');
var edesain = L.layerGroup([ nafada]);
layerControl.addOverlay(edesain, 'Ekraf Desain Produk');

var isalon = L.marker([-8.0602398,112.2101558]).bindPopup('Imam Salon');
var efashion = L.layerGroup([ isalon]);
layerControl.addOverlay(efashion, 'Ekraf fashion');

var kmakti = L.marker([-8.1406514,112.1746189]).bindPopup('Warung Mak Ti');
var ekuliner = L.layerGroup([ kmakti]);
layerControl.addOverlay(ekuliner, 'Ekraf kuliner');

var rubyHill = L.marker([]).bindPopup('');

var efilm = L.layerGroup([ rubyHill]);
layerControl.addOverlay(efilm, 'Ekraf Film');

var newabadi = L.marker([-8.0255624,112.3076806]).bindPopup('New Abadi Creation');

var efotografi = L.layerGroup([ newabadi]);
layerControl.addOverlay(efotografi, 'Ekraf fotografi');

</script>
</body>