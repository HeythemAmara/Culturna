<?php
echo "hellow";
$valeur_id = isset($_GET['val_id']) ? $_GET['val_id'] : 0;
$id_Chauffeur = isset($_GET['id_Chauffeur']) ? $_GET['id_Chauffeur'] : 0;
$id_Client = isset($_GET['id_Client']) ? $_GET['id_Client'] : 0;

echo $valeur_id ;
echo $id_Chauffeur ;
echo $id_Client ;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="map"></div>
    <div id="details" style="background-color: white;"></div>

<script>

var reqcount = 0;
var prevCoords = null;

navigator.geolocation.watchPosition(successCallback);

function successCallback(position) {
	const { accuracy, latitude, longitude, altitude, heading, speed } = position.coords;
    // Show a map centered at latitude / longitude.
    reqcount++;
    details.innerHTML = "Accuracy: "+accuracy+"<br>";
    details.innerHTML += "Latitude: "+latitude+" | Longitude: "+longitude+"<br>";
    details.innerHTML += "Altitude: "+altitude+"<br>";
    details.innerHTML += "Heading: "+heading+"<br>";
    details.innerHTML += "Speed: "+speed+"<br>";
    details.innerHTML += "reqcount: "+reqcount;
    
    // Check if the new coordinates are different from the previous coordinates
    if (prevCoords == null || prevCoords.latitude != latitude || prevCoords.longitude != longitude) {
        map.innerHTML = '<iframe width="350" height="450" src="https://maps.google.com/maps?q='+latitude+','+longitude+'&amp;z=15&amp;output=embed"></iframe>';
        prevCoords = { latitude, longitude };
    }
}

// Create a new XMLHttpRequest object
var xhr = new XMLHttpRequest();

// Set the URL of the server-side script that will handle the request
var url = 'http://example.com/myscript.php';

// Set the HTTP method (GET or POST) and specify that we want to make an asynchronous request
xhr.open('POST', url, true);

// Set the request headers (if needed)
xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

// Define the data that we want to send to the server
var data = 'myvariable=' + encodeURIComponent(myvariable);

// Send the request with the data
xhr.send(data);



</script>

</body>
</html>