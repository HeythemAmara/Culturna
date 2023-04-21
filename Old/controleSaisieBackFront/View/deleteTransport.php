<?php
include_once "../Controller/TransportC.php";
//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDLIVRAISON/Controller/TransportC.php';

$TransportC = new TransportC();
if (isset($_GET['Id_T']) && !empty($_GET['Id_T'])) {

    echo "id Transport: " . $_GET['Id_T'];
    $TransportC->deleteTransport($_GET['Id_T']);
    header('location:listChauffeur.php');
} else {
    echo "id is not defined";
}
?>

