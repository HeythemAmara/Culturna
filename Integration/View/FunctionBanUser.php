<?php
include_once "../Controller/UtilisateurC.php";
$valeur_id = $_GET['val_id'];
$UtilisateurC = new UtilisateurC();
if (isset($_GET['IdU']) && !empty($_GET['IdU'])) {

    echo "id Utilisateur: " . $_GET['IdU'];
    $UtilisateurC->BanUtilisateur($_GET['IdU']);
    header('location:listUtilisateurs.php?val_id=' . urlencode($valeur_id));
} else {
    echo "id is not defined";
}
?>