
<?php
include_once "../Model/Livraison.php";
include_once "../Controller/LivraisonC.php";
$LivraisonC = new LivraisonC();
var_dump($_POST);
if (
    isset($_POST['idlu']) &&
    isset($_POST['idllu']) &&
    isset($_POST['nomu']) &&
    isset($_POST['fraisu']) &&
    isset($_POST['typecolisu']) &&
    isset($_POST['adresseu']) &&
    isset($_POST['idclientu']) &&
    isset($_POST['idchu']) 
   ) 
   {
    if (
        !empty($_POST['idlu']) &&
        !empty($_POST['idllu']) &&
        !empty($_POST['nomu']) && 
        !empty($_POST['fraisu']) && 
        !empty($_POST['typecolisu']) && 
        !empty($_POST['adresseu']) && 
        !empty($_POST['idclientu']) && 
        !empty($_POST['idchu']) 
       ) 
       {
        $r = $LivraisonC->findLivraisonById($_POST['idlu']);
        $Livraison = new Livraison(
            $_POST['idllu'],
            $_POST['nomu'],
            $_POST['fraisu'],
            $_POST['typecolisu'],
            $_POST['adresseu'],
            $_POST['idclientu'],
            $_POST['idchu']
            );
        $LivraisonC = new LivraisonC();
        $LivraisonC->updateLivraison($Livraison, $_POST['idlu']);
        header('location:listLivraisons.php');
        } 
    else 
        {
            header('location:listLivraisons.php');
        }
    }
else 
    {
        header('location:listLivraisons.php');
    }
?>