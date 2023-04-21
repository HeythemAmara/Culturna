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
        header('location:accueil.php?val_id=' . urlencode($valeur_id));
        exit;
        } 
    else 
        {
        //header('location:listUtilisateurs.php');
        echo"Non1";
        $valeur_id=0;
        header('location:accueil.php?val_id=' . urlencode($valeur_id));
        exit;
        }
    }
else 
    {
        //header('location:listUtilisateurs.php');
        echo"Non2";
        $valeur_id=0;
        header('location:accueil.php?val_id=' . urlencode($valeur_id));
        exit;
        
    }
?>