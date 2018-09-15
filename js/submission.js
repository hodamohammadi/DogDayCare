//runs the js code after window is loaded
window.onload = function(){ 

//the submit button 
var btn = document.getElementById("geobtn");

//the function is called when submit button is clicked
btn.onclick = function (){
	getLocation();
};


//uses the geolocation API to get current position
function getLocation() {
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(showPosition, showError);
	} else {
	}
};

//auto fills the long lat input boxes with current location
function showPosition(position) {
	document.getElementById("long").value=position.coords.longitude;
	document.getElementById("lat").value=position.coords.latitude;
};

//error if current position not available 
function showError(error) {
	window.alert("Current Position Not Available")
}

};