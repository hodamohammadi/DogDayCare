
//default view if no location is added to session storage from search
var lat = 43.261660500;
var long = -79.922789400;

//check if location is added to session storage from search page
//change view long lat to requested location
if (!(sessionStorage.getItem("latitude") === null && sessionStorage.getItem("longitude") === null)) {
  lat = sessionStorage.getItem("latitude");
  long = sessionStorage.getItem("longitude");

}

//set map view
var mymap= L.map('mymap').setView([lat, long], 12);

//use street maps API to set the tilelayer
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoibW9oYW1oOCIsImEiOiJjamVhZ2wwc3kwemtjMnFsZWU1ZG1sdDI4In0.x_25ysnqbjNMzEAg3vFaWw'
}).addTo(mymap);



//sample location pins with random long lat and pop up windows
L.marker([43.505856, -79.881973]).addTo(mymap).bindPopup("<b>Dog Haven</b> at 44 Sanders Blvd. <a href='individual_sample.html'>More Info</a>").openPopup();
L.marker([43.28143, -79.92786]).addTo(mymap).bindPopup("<b>Dog Haven</b> at 44 Sanders Blvd. <a href='individual_sample.html'>More Info</a>").openPopup();
L.marker([43.31143, -79.91786]).addTo(mymap).bindPopup("<b>Dog Haven</b> at 44 Sanders Blvd. <a href='individual_sample.html'>More Info</a>").openPopup();
L.marker([43.24143, -79.94786]).addTo(mymap).bindPopup("<b>Dog Haven</b> at 44 Sanders Blvd. <a href='individual_sample.html'>More Info</a>").openPopup();
L.marker([43.260663, -79.925073]).addTo(mymap).bindPopup("<b>Dog Haven</b> at 44 Sanders Blvd. <a href='individual_sample.html'>More Info</a>").openPopup();
L.marker([43.259444, -79.909215]).addTo(mymap).bindPopup("<b>Dog Haven</b> at 44 Sanders Blvd. <a href='individual_sample.html'>More Info</a>").openPopup();
L.marker([43.256451, -79.915266]).addTo(mymap).bindPopup("<b>Dog Haven</b> at 44 Sanders Blvd. <a href='individual_sample.html'>More Info</a>").openPopup();
L.marker([43.256138, -79.932175]).addTo(mymap).bindPopup("<b>Dog Haven</b> at 44 Sanders Blvd. <a href='individual_sample.html'>More Info</a>").openPopup();
L.marker([43.254638, -79.916983]).addTo(mymap).bindPopup("<b>Dog Haven</b> at 44 Sanders Blvd. <a href='individual_sample.html'>More Info</a>").openPopup();
L.marker([43.252167, -79.855657]).addTo(mymap).bindPopup("<b>Dog Haven</b> at 44 Sanders Blvd. <a href='individual_sample.html'>More Info</a>").openPopup();
L.marker([43.236911, -79.896856]).addTo(mymap).bindPopup("<b>Dog Haven</b> at 44 Sanders Blvd. <a href='individual_sample.html'>More Info</a>").openPopup();
L.marker([43.218149, -79.842611]).addTo(mymap).bindPopup("<b>Dog Haven</b> at 44 Sanders Blvd. <a href='individual_sample.html'>More Info</a>").openPopup();
L.marker([43.668695, -79.423929]).addTo(mymap).bindPopup("<b>Dog Haven</b> at 44 Sanders Blvd. <a href='individual_sample.html'>More Info</a>").openPopup();
L.marker([43.532450, -79.721933]).addTo(mymap).bindPopup("<b>Dog Haven</b> at 44 Sanders Blvd. <a href='individual_sample.html'>More Info</a>").openPopup();
L.marker([43.542561, -80.236917]).addTo(mymap).bindPopup("<b>Dog Haven</b> at 44 Sanders Blvd. <a href='individual_sample.html'>More Info</a>").openPopup();
L.marker([43.446922, -80.511575]).addTo(mymap).bindPopup("<b>Dog Haven</b> at 44 Sanders Blvd. <a href='individual_sample.html'>More Info</a>").openPopup();
L.marker([43.259785, -79.924867]).addTo(mymap).bindPopup("<b>Dog Haven</b> at 44 Sanders Blvd. <a href='individual_sample.html'>More Info</a>").openPopup();


