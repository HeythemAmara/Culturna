<?php
include_once "../Controller/ChauffeurC.php";
$valeur_id = $_GET['val_id'];

$ChauffeurC = new ChauffeurC();
if (isset($_GET['Id_Ch']) && !empty($_GET['Id_Ch'])) {

    echo "id Chauffeur: " . $_GET['Id_Ch'];
    $ChauffeurC->deleteChauffeur($_GET['Id_Ch']);
    header('location:listChauffeur.php?val_id=' . urlencode($valeur_id));
} else {
    echo "id is not defined";
}
?>

