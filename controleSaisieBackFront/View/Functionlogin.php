<?php
include_once "../Model/Utilisateur.php";
include_once "../Controller/UtilisateurC.php";
var_dump($_POST);
if (
    isset($_POST['loginUsername']) &&
    isset($_POST['loginpass']) 
   ) 
{
    if (
        !empty($_POST['loginUsername']) &&
        !empty($_POST['loginpass'])
       ) 
        {
        $UtilisateurC = new UtilisateurC();
        $valeur_id=$UtilisateurC->login($_POST['loginUsername'],$_POST['loginpass']);
        echo $valeur_id;
        echo"Done";
        $isAdmin=$UtilisateurC->LogAdmin($valeur_id);
        if($isAdmin=="Admin")
        {
            header('location:listUtilisateurs.php?val_id=' . urlencode($valeur_id));
        }
        else
        {
            header('location:FuntionDateComparison.php?val_id=' . urlencode($valeur_id));
        }
        exit;
        } 
    else 
        {
        echo"Non1";
        $valeur_id=0;
        header('location:Page_accueil.php?val_id=' . urlencode($valeur_id));
        exit;
        }
    }
else 
    {
        echo"Non2";
        $valeur_id=0;
        header('location:Page_accueil.php?val_id=' . urlencode($valeur_id));
        exit;
    }
?>