
<?php
include_once "../Model/Utilisateur.php";
include_once "../Controller/UtilisateurC.php";
$UtilisateurC = new UtilisateurC();
var_dump($_POST);
if (
    isset($_POST['idu']) &&
    isset($_POST['iduu']) &&
    isset($_POST['nomu']) &&
    isset($_POST['prenomu']) &&
    isset($_POST['emailu']) &&
    isset($_POST['mdpu']) &&
    isset($_POST['dobu']) &&
    isset($_POST['permu']) 
   ) 
   {
    if (
        !empty($_POST['idu']) &&
        !empty($_POST['iduu']) &&
        !empty($_POST['nomu']) && 
        !empty($_POST['prenomu']) && 
        !empty($_POST['emailu']) && 
        !empty($_POST['mdpu']) && 
        !empty($_POST['dobu']) && 
        !empty($_POST['permu']) 
       ) 
       {
        $r = $UtilisateurC->findUtilisateurById($_POST['idu']);
        $Utilisateur = new Utilisateur(
            $_POST['iduu'],
            $_POST['nomu'],
            $_POST['prenomu'],
            $_POST['emailu'],
            $_POST['mdpu'],
            $_POST['dobu'],
            $_POST['permu']
            );
            $UtilisateurC = new UtilisateurC();
            $UtilisateurC->updateUtilisateur($Utilisateur, $_POST['idu']);
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