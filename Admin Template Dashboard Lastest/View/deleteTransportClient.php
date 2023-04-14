<?php
include_once "../Controller/TransportC.php";
$TransportC = new TransportC();
$valeur_id = $_GET['val_id'];
if (isset($_GET['Id_T']) && !empty($_GET['Id_T'])) {

    echo "id Transport: " . $_GET['Id_T'];
    $TransportC->deleteTransport($_GET['Id_T']);
    header('location:TransportEtLivraison.php?val_id=' . urlencode($valeur_id));
} else {
    echo "id is not defined";
}
?>
