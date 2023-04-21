<?php
include_once "../Model/Livraison.php";
include_once "../Controller/LivraisonC.php";
var_dump($_POST);
if (
    isset($_POST['idla']) &&
    isset($_POST['noma']) &&
    isset($_POST['fraisa']) &&
    isset($_POST['typecolisa']) &&
    isset($_POST['adressea']) &&
    isset($_POST['idclienta']) &&
    isset($_POST['idcha'])
   ) 
{
    if (
        !empty($_POST['idla']) &&
        !empty($_POST['noma']) &&
        !empty($_POST['fraisa']) &&
        !empty($_POST['typecolisa']) &&
        !empty($_POST['adressea']) &&
        !empty($_POST['idclienta']) &&
        !empty($_POST['idcha'])
       ) 
        {
        $Livraison = new Livraison(
            $_POST['idla'],
            $_POST['noma'],
            $_POST['fraisa'],
            $_POST['typecolisa'],
            $_POST['adressea'],
            $_POST['idclienta'],
            $_POST['idcha']
            );
        $LivraisonC = new LivraisonC();
        $LivraisonC->addLivraison($Livraison);
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