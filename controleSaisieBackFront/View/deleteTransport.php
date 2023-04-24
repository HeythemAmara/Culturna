<?php
include_once "../Controller/TransportC.php";
$valeur_id = $_GET['val_id'];

$TransportC = new TransportC();
if (isset($_GET['Id_T']) && !empty($_GET['Id_T'])) {

    echo "id Transport: " . $_GET['Id_T'];
    $TransportC->deleteTransport($_GET['Id_T']);
    header('location:listChauffeur.php?val_id=' . urlencode($valeur_id));
} else {
    echo "id is not defined";
}
?>

