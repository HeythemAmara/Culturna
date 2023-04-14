<?php
include_once "../Model/Utilisateur.php";
include_once "../Controller/UtilisateurC.php";
$UtilisateurC = new UtilisateurC();
var_dump($_POST);
if (
    isset($_POST['dobu'])
   ) 
   {
    if (
        !empty($_POST['dobu'])
       ) 
       {
        $r = $UtilisateurC->findUtilisateurById($_POST['idu']);
        $Utilisateur = new Utilisateur(
            $_POST['Usernameu'],
            $_POST['emailu'],
            $_POST['mdpu'],
            $_POST['dobu'],
            $_POST['permu']
            );
            $UtilisateurC = new UtilisateurC();
            $UtilisateurC->updateUtilisateur($Utilisateur, $_POST['idu']);
        header('location:Profile.php');
        } 
    else 
        {
            header('location:Profile.php');
        }
    }
else 
    {
        header('location:Profile.php');
    }
?>