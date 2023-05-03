<?php
include_once '../Controller/TransportC.php';
include_once '../Controller/ChauffeurC.php';
include_once "../Controller/UtilisateurC.php";




$id_Chauffeur = isset($_GET['id_chauffeur']) ? $_GET['id_chauffeur'] : 0;
$id_Client = isset($_GET['id_Client']) ? $_GET['id_Client'] : 0;

echo "<br>".$id_Chauffeur."<br>";
echo "<br>".$id_Client."<br>";

$ChauffeurC = new ChauffeurC();
$coords = $ChauffeurC->getLocation($id_Chauffeur, $id_Client);
$latitude = null;
$longitude = null;
foreach ($coords as $location) {
    $latitude = $location['Latitude'];
    $longitude = $location['Longitude'];
    // Do something with $latitude and $longitude here
}
if ($latitude !== null && $longitude !== null) {
    echo $latitude . "<br>";
    echo $longitude . "<br>";
} else {
    echo "No location found<br>";
}

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
    var latitude=<?= $latitude ?>;
    var longitude=<?= $longitude ?>;
    map.innerHTML = '<iframe width="350" height="450" src="https://maps.google.com/maps?q='+latitude+','+longitude+'&amp;z=15&amp;output=embed"></iframe>';
        
		// Reload the page every 5 seconds
		setInterval(function() {
			location.reload();
		}, 5000);
	</script>

</body>
</html>