<?php
include_once "../Model/Reclamation.php";
include_once "../Controller/ReclamationC.php";
var_dump($_POST);
if (
   // isset($_POST['idradd']) &&
    isset($_POST['idClientadd']) &&
    isset($_POST['Emailadd']) &&
    isset($_POST['Sujetadd']) &&
    isset($_POST['Messageadd'])
   ) 
{
    if (
       // !empty($_POST['idradd']) &&
        !empty($_POST['idClientadd']) &&
        !empty($_POST['Emailadd']) &&
        !empty($_POST['Sujetadd']) &&
        !empty($_POST['Messageadd']) 
       ) 
        {
        $Reclamation = new Reclamation(
          //  $_POST['idradd'],
            $_POST['idClientadd'],
            $_POST['Emailadd'],
            $_POST['Sujetadd'],
            $_POST['Messageadd'],
            $_POST['Statutadd']
            );
        $ReclamationC = new ReclamationC();
        $ReclamationC->addReclamation($Reclamation);
        header('location:Page_Reclamation.php?val_id=' . urlencode($_POST['idClientadd']));
        } 
    else 
        {
        header('location:Page_Reclamation.php?val_id=' . urlencode($_POST['idClientadd']));
        }
    }
else 
    {
        header('location:Page_Reclamation.php?val_id=' . urlencode($_POST['idClientadd']));
    }
?>