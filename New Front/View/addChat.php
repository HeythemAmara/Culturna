<?php
include_once "../Model/Chauffeur.php";
include_once "../Controller/ChauffeurC.php";
include_once "../Model/Utilisateur.php";
include_once "../Controller/UtilisateurC.php";

$valeur_id = isset($_GET['val_id']) ? $_GET['val_id'] : 0;
$UtilisateurC = new UtilisateurC();
$Username= $UtilisateurC->Username($valeur_id);
echo "<br> ========== <br>";
echo $Username;
echo "<br> ========== <br>";
var_dump($_POST);
if (
    isset($_POST['MessageChat'])
   ) 
{
    if (
        !empty($_POST['MessageChat'])
       ) 
        {
        $ChauffeurC = new ChauffeurC();
        $ChauffeurC->sendMessage($Username,$_POST['MessageChat']);
        header('location:listChauffeur.php?val_id=' . urlencode($valeur_id));
        echo "<br> done";
        } 
    else 
        {
        header('location:listChauffeur.php?val_id=' . urlencode($valeur_id));
        echo "<br> nope1";
        }
    }
else 
    {
        header('location:listChauffeur.php?val_id=' . urlencode($valeur_id));
        echo "<br> nope2";
    }
?>