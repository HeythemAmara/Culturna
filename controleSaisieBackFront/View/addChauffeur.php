<?php
include_once "../Model/Chauffeur.php";
include_once "../Controller/ChauffeurC.php";
$valeur_id = $_GET['val_id'];

var_dump($_POST);
if (
    isset($_POST['noma']) &&
    isset($_POST['prenoma']) &&
    isset($_POST['tela']) &&
    isset($_POST['emaila']) &&
    isset($_POST['vehiculea']) 
   ) 
{
    if (
        !empty($_POST['noma']) &&
        !empty($_POST['prenoma']) &&
        !empty($_POST['tela']) &&
        !empty($_POST['emaila']) &&
        !empty($_POST['vehiculea']) 
       ) 
        {
        $Chauffeur = new Chauffeur(
            $_POST['noma'],
            $_POST['prenoma'],
            $_POST['tela'],
            $_POST['emaila'],
            $_POST['vehiculea']
            );
        $ChauffeurC = new ChauffeurC();
        $ChauffeurC->addChauffeur($Chauffeur);
        header('location:listChauffeur.php?val_id=' . urlencode($valeur_id));
        } 
    else 
        {
        header('location:listChauffeur.php?val_id=' . urlencode($valeur_id));
        }
    }
else 
    {
        header('location:listChauffeur.php?val_id=' . urlencode($valeur_id));
    }
?>