<?php
include_once "../Model/Chauffeur.php";
include_once "../Controller/ChauffeurC.php";
include_once "../Model/Utilisateur.php";
include_once "../Controller/UtilisateurC.php";

$valeur_id = $_GET['val_id'];

var_dump($_POST);
if (
    isset($_POST['noma']) &&
    isset($_POST['prenoma']) &&
    isset($_POST['tela']) &&
    isset($_POST['emaila']) &&
    isset($_POST['vehiculea']) &&
    isset($_POST['Usernamea']) &&
    isset($_POST['mdpa']) &&
    isset($_POST['doba'])
   ) 
{
    if (
        !empty($_POST['noma']) &&
        !empty($_POST['prenoma']) &&
        !empty($_POST['tela']) &&
        !empty($_POST['emaila']) &&
        !empty($_POST['vehiculea']) &&
        !empty($_POST['Usernamea']) &&
        !empty($_POST['mdpa']) &&
        !empty($_POST['doba'])
       ) 
        {
        $Utilisateur = new Utilisateur(
            $_POST['Usernamea'],
            $_POST['emaila'],
            $_POST['mdpa'],
            $_POST['doba'],
            "Staff"
            );
        $UtilisateurC = new UtilisateurC();
        $UtilisateurC->addUtilisateur($Utilisateur); echo "  ----------ajout user terminer---------     ";
        $id_compte=$UtilisateurC->idUtilisateur($_POST['Usernamea']); echo "  ----------Recherche id terminer---------     ";
        echo "  ----------". $id_compte ."---------     ";
        $Chauffeur = new Chauffeur(
            $_POST['noma'],
            $_POST['prenoma'],
            $_POST['tela'],
            $_POST['emaila'],
            $_POST['vehiculea'],
            $id_compte
            );
        $ChauffeurC = new ChauffeurC();
        $ChauffeurC->addChauffeur($Chauffeur); echo "  ----------Chauffeur user terminer---------     ";
        header('location:listChauffeur.php?val_id=' . urlencode($valeur_id));
        } 
    else 
        {
        header('location:listChauffeur.php?val_id=' . urlencode($valeur_id));
        }
    }
else 
    {
        header('location:listChauffeur.php?val_id=' . urlencode($valeur_id));
    }
?>