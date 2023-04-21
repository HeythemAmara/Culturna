<?php
include_once "../Model/Utilisateur.php";
include_once "../Controller/UtilisateurC.php";
var_dump($_POST);
if (
    isset($_POST['idua']) &&
    isset($_POST['noma']) &&
    isset($_POST['prenoma']) &&
    isset($_POST['emaila']) &&
    isset($_POST['mdpa']) &&
    isset($_POST['doba']) &&
    isset($_POST['perma'])
   ) 
{
    if (
        !empty($_POST['idua']) &&
        !empty($_POST['noma']) &&
        !empty($_POST['prenoma']) &&
        !empty($_POST['emaila']) &&
        !empty($_POST['mdpa']) &&
        !empty($_POST['doba']) &&
        !empty($_POST['perma'])
       ) 
        {
        $Utilisateur = new Utilisateur(
            $_POST['idua'],
            $_POST['noma'],
            $_POST['prenoma'],
            $_POST['emaila'],
            $_POST['mdpa'],
            $_POST['doba'],
            $_POST['perma']
            );
        $UtilisateurC = new UtilisateurC();
        $UtilisateurC->addUtilisateur($Utilisateur);
        header('location:listUtilisateurs.php');
        } 
    else 
        {
        header('location:listUtilisateurs.php');
        }
    }
else 
    {
        header('location:listUtilisateurs.php');
    }
?>