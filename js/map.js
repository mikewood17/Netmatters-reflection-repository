

// =======================================
// ============= Map usage ===============
// =======================================

// map location

var map1 = L.map('london-map').setView([51.681775, -0.003356], 13);
var map2 = L.map('cambridge-map').setView([52.23527145385742, 0.153433], 13);
var map3 = L.map('wymondham-map').setView([52.575941, -1.136302], 13);
var map4 = L.map('yarmouth-map').setView([52.555837, 1.713007], 13);

// initiliase maps

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map1);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map2);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map3);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map4);

// Place map markers

var marker = L.marker([51.68202209472656, -0.0027950876392424107]).addTo(map1);
var marker = L.marker([52.23527145385742, 0.15372879803180695]).addTo(map2);
var marker = L.marker([52.575941, -1.136302]).addTo(map3);
var marker = L.marker([52.55585861206055, 1.7129490375518799]).addTo(map4);
