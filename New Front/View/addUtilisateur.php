<?php
include_once "../Model/Utilisateur.php";
include_once "../Controller/UtilisateurC.php";
$valeur_id = $_GET['val_id'];
var_dump($_POST);
if (
    isset($_POST['Usernamea']) &&
    isset($_POST['emaila']) &&
    isset($_POST['mdpa']) &&
    isset($_POST['doba']) &&
    isset($_POST['perma'])
   ) 
{
    if (
        !empty($_POST['Usernamea']) &&
        !empty($_POST['emaila']) &&
        !empty($_POST['mdpa']) &&
        !empty($_POST['doba']) &&
        !empty($_POST['perma'])
       ) 
        {
        $Utilisateur = new Utilisateur(
            $_POST['Usernamea'],
            $_POST['emaila'],
            $_POST['mdpa'],
            $_POST['doba'],
            $_POST['perma']
            );
        $UtilisateurC = new UtilisateurC();
        $UtilisateurC->addUtilisateur($Utilisateur);
        header('location:listUtilisateurs.php?val_id=' . urlencode($valeur_id));
        } 
    else 
        {
        header('location:listUtilisateurs.php?val_id=' . urlencode($valeur_id));
        }
    }
else 
    {
        header('location:listUtilisateurs.php?val_id=' . urlencode($valeur_id));
    }
?>