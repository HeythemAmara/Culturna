<?php
include_once "../Model/Chauffeur.php";
include_once "../Controller/ChauffeurC.php";

//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDLIVRAISON/Controller/ChauffeurC.php';
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
        header('location:listChauffeur.php');
        } 
    else 
        {
        header('location:listChauffeur.php');
        }
    }
else 
    {
        header('location:listChauffeur.php');
    }
?>