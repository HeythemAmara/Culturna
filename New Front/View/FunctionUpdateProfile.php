<?php
include_once "../Model/Utilisateur.php";
include_once "../Controller/UtilisateurC.php";
$UtilisateurC = new UtilisateurC();
var_dump($_POST);
if (
    isset($_POST['dobu']) && 
    isset($_POST['emailu'])
   ) 
   {
    if (
        !empty($_POST['dobu']) && 
        !empty($_POST['emailu'])
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
            $fullname = $_POST['fullname'];
            $UtilisateurC = new UtilisateurC();
        $UtilisateurC->updateProfile($Utilisateur, $_POST['idu'], $fullname);
            header('location:Page_profile.php?val_id=' . urlencode($_POST['idu']));
        } 
    else 
        {
            header('location:Page_profile.php?val_id=' . urlencode($_POST['idu']));
        }
    }
else 
    {
        header('location:Page_profile.php?val_id=' . urlencode($_POST['idu']));
    }
?>