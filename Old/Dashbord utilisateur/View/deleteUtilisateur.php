<?php
include_once "../Controller/UtilisateurC.php";
$UtilisateurC = new UtilisateurC();
if (isset($_GET['id']) && !empty($_GET['id'])) {

    echo "id Utilisateur: " . $_GET['id'];
    $UtilisateurC->deleteUtilisateur($_GET['id']);
    header('location:listUtilisateurs.php');
} else {
    echo "id is not defined";
}
?>

