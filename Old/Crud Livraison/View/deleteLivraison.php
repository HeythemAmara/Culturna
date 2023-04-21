<?php
include_once "../Controller/LivraisonC.php";
$LivraisonC = new LivraisonC();
if (isset($_GET['id']) && !empty($_GET['id'])) {

    echo "id Livraison: " . $_GET['id'];
    $LivraisonC->deleteLivraison($_GET['id']);
    header('location:listLivraisons.php');
} else {
    echo "id is not defined";
}
?>

