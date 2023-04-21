<?php
include_once "../Controller/UtilisateurC.php";
$UtilisateurC = new UtilisateurC();
if (isset($_GET['IdU']) && !empty($_GET['IdU'])) {

    echo "id Utilisateur: " . $_GET['IdU'];
    $UtilisateurC->deleteUtilisateur($_GET['IdU']);
    header('location:listUtilisateurs.php');
} else {
    echo "id is not defined";
}
?>

