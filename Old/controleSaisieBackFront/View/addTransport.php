<?php
include_once "../Controller/TransportC.php";

//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDLIVRAISON/Controller/TransportC.php';
var_dump($_POST);
if (
    isset($_POST['IdClientat']) &&
    isset($_POST['Id_Chat']) &&
    isset($_POST['Typeat']) &&
    isset($_POST['Nbr_Persat']) &&
    isset($_POST['Dateat']) &&
    isset($_POST['adresseat']) &&
    isset($_POST['nameat']) &&
    isset($_POST['numat']) &&
    isset($_POST['Noteat']) 
   ) 
{
    if (
        !empty($_POST['IdClientat']) &&
        !empty($_POST['Id_Chat']) &&
        !empty($_POST['Typeat']) &&
        !empty($_POST['Nbr_Persat']) &&
        !empty($_POST['Dateat']) &&
        !empty($_POST['nameat']) &&
        !empty($_POST['adresseat']) &&
        !empty($_POST['numat']) &&
        !empty($_POST['Noteat']) 
       ) 
        {
        $Transport = new Transport(
            $_POST['IdClientat'],
            $_POST['Id_Chat'],
            $_POST['Typeat'],
            $_POST['Nbr_Persat'],
            $_POST['Dateat'] ,
            $_POST['adresseat'] ,
            $_POST['nameat'] ,
            $_POST['numat'] ,
            $_POST['Noteat']
            );
        $TransportC = new TransportC();
        $TransportC->addTransport($Transport);
        header('location:listChauffeur.php');
        } 
    else 
        {
        header('location:listChauffeur.php');
        }
    }
else 
    {
        header('location:listChauffeur.php');
    }
?>