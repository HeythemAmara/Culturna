
<?php
include_once "../Model/Chauffeur.php";
include_once "../Controller/ChauffeurC.php";
$valeur_id = $_GET['val_id'];

$ChauffeurC = new ChauffeurC();
var_dump($_POST);
if (
    isset($_POST['nomu']) &&
    isset($_POST['prenomu']) &&
    isset($_POST['telu']) &&
    isset($_POST['emailu']) &&
    isset($_POST['vehiculeu']) 
   ) 
   {
    if (
        !empty($_POST['nomu']) &&
        !empty($_POST['prenomu']) &&
        !empty($_POST['telu']) &&
        !empty($_POST['emailu']) &&
        !empty($_POST['vehiculeu']) 
       ) 
       {
        $r = $ChauffeurC->findChauffeurById($_POST['Id_Chu']);
        $Chauffeur = new Chauffeur(
            $_POST['nomu'],
            $_POST['prenomu'],
            $_POST['telu'],
            $_POST['emailu'],
            $_POST['vehiculeu']
            );
        $ChauffeurC = new ChauffeurC();
        $ChauffeurC->updateChauffeur($Chauffeur, $_POST['Id_Chu']);
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