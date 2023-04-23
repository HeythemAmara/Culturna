<?php
include_once "../Controller/ChauffeurC.php";
//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDLIVRAISON/Controller/ChauffeurC.php';

$ChauffeurC = new ChauffeurC();
if (isset($_GET['Id_Ch']) && !empty($_GET['Id_Ch'])) {

    echo "id Chauffeur: " . $_GET['Id_Ch'];
    $ChauffeurC->deleteChauffeur($_GET['Id_Ch']);
    header('location:listChauffeur.php');
} else {
    echo "id is not defined";
}
?>

