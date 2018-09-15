//map linked to mymap div in html file
//map view is set 
var mymap= L.map('mymap').setView([43.259785, -79.924867], 13);

//use street map API for data
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoibW9oYW1oOCIsImEiOiJjamVhZ2wwc3kwemtjMnFsZWU1ZG1sdDI4In0.x_25ysnqbjNMzEAg3vFaWw'
}).addTo(mymap);

//add sample location pin
L.marker([43.259785, -79.924867]).addTo(mymap);