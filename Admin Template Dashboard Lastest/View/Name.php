<?php
include_once "../Model/Utilisateur.php";
include_once "../Controller/UtilisateurC.php";
$UtilisateurC = new UtilisateurC();
var_dump($_POST);
if (
    isset($_POST['Usernameu'])
   ) 
   {
    if (
        !empty($_POST['Usernameu'])
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