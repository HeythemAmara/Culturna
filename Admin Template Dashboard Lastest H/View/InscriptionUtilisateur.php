<?php
include_once "../Model/Utilisateur.php";
include_once "../Controller/UtilisateurC.php";
var_dump($_POST);
if (
    isset($_POST['Usernamea']) &&
    isset($_POST['emaila']) &&
    isset($_POST['mdpa']) &&
    isset($_POST['doba'])
   ) 
{
    if (
        !empty($_POST['Usernamea']) &&
        !empty($_POST['emaila']) &&
        !empty($_POST['mdpa']) &&
        !empty($_POST['doba']) 
       ) 
        {
        $Utilisateur = new Utilisateur(
            $_POST['Usernamea'],
            $_POST['emaila'],
            $_POST['mdpa'],
            $_POST['doba'],
            "Client"
            );
        $UtilisateurC = new UtilisateurC();
        $valeur_id=$UtilisateurC->inscripUtilisateur($Utilisateur);
        echo $valeur_id;
        //header('location:accueil.php?val_id=' . urlencode($valeur_id));
        echo"done";
        } 
    else 
        {
        $valeur_id=0;
        //header('location:accueil.php?val_id=' . urlencode($valeur_id));
        echo"nope1";
        }
    }
else 
    {
        $valeur_id=0;
        //header('location:accueil.php?val_id=' . urlencode($valeur_id));
        echo"nope2";
    }
?>