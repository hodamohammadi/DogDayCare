//run js file after window is loaded
window.onload = function(){ 

//search near me button
var btn = document.getElementById("nearbtn");

//when search near me button is clicked
btn.onclick = function (){

	getLocation();
	
};


//uses the geolocation API to get current position
function getLocation() {
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(showPosition, showError);
	} else {// not supported
	}
};

//add long lat values to session storage for use in results
function showPosition(position) {
	sessionStorage.setItem('latitude', position.coords.latitude);
	sessionStorage.setItem('longitude', position.coords.longitude);
	showResults();
};

//error if current position is not available 
function showError(error) { 
	window.alert("Current Position Not Available")
};

//open results page
function showResults() {
	window.open ('results_sample.html','_self',false);

};

};