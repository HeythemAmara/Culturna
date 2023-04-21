<?php
include_once "../Controller/LivraisonC.php";
$LivraisonC = new LivraisonC();
if (isset($_GET['Id_L']) && !empty($_GET['Id_L'])) {

    echo "id Livraison: " . $_GET['Id_L'];
    $LivraisonC->deleteLivraison($_GET['Id_L']);
    header('location:listLivraisons.php');
} else {
    echo "id is not defined";
}
?>

