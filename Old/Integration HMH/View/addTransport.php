<?php
include_once "../Controller/TransportC.php";

//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDLIVRAISON/Controller/TransportC.php';
var_dump($_POST);
if (
    isset($_POST['IdClienta']) &&
    isset($_POST['Id_Cha']) &&
    isset($_POST['Typea']) &&
    isset($_POST['Nbr_Persa']) &&
    isset($_POST['Datea']) &&
    isset($_POST['adressea']) &&
    isset($_POST['namea']) &&
    isset($_POST['numa']) &&
    isset($_POST['Notea']) 
   ) 
{
    if (
        !empty($_POST['IdClienta']) &&
        !empty($_POST['Id_Cha']) &&
        !empty($_POST['Typea']) &&
        !empty($_POST['Nbr_Persa']) &&
        !empty($_POST['Datea']) &&
        !empty($_POST['namea']) &&
        !empty($_POST['adressea']) &&
        !empty($_POST['numa']) &&
        !empty($_POST['Notea']) 
       ) 
        {
        $Transport = new Transport(
            $_POST['IdClienta'],
            $_POST['Id_Cha'],
            $_POST['Typea'],
            $_POST['Nbr_Persa'],
            $_POST['Datea'] ,
            $_POST['adressea'] ,
            $_POST['namea'] ,
            $_POST['numa'] ,
            $_POST['Notea']
            );
        $TransportC = new TransportC();
        $TransportC->addTransport($Transport);
        header('location:listTransport.php');
        } 
    else 
        {
        header('location:listTransport.php');
        }
    }
else 
    {
        header('location:listTransport.php');
    }
?>