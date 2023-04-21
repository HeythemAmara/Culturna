
<?php
include_once "../Model/Transport.php";
include_once "../Controller/TransportC.php";

//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDLIVRAISON/Controller/TransportC.php';
$TransportC = new TransportC();
var_dump($_POST);
if (
    isset($_POST['IdClientu']) &&
    isset($_POST['Id_Chu']) &&
    isset($_POST['Typeu']) &&
    isset($_POST['Nbr_Persu']) &&
    isset($_POST['Dateu']) &&
    isset($_POST['adresseu']) &&
    isset($_POST['nameu']) &&
    isset($_POST['numu']) &&
    isset($_POST['Noteu']) 
   ) 
   {
    if (
        !empty($_POST['IdClientu']) &&
        !empty($_POST['Id_Chu']) &&
        !empty($_POST['Typeu']) &&
        !empty($_POST['Nbr_Persu']) &&
        !empty($_POST['Dateu']) &&
        !empty($_POST['nameu']) &&
        !empty($_POST['adresseu']) &&
        !empty($_POST['numu']) &&
        !empty($_POST['Noteu']) 
       ) 
       {
        $r = $TransportC->findTransportById($_POST['Id_Tu']);
        $Transport = new Transport(
            $_POST['IdClientu'],
            $_POST['Id_Chu'],
            $_POST['Typeu'],
            $_POST['Nbr_Persu'],
            $_POST['Dateu'] ,
            $_POST['adresseu'] ,
            $_POST['nameu'] ,
            $_POST['numu'] ,
            $_POST['Noteu']
            );
        $TransportC = new TransportC();
        $TransportC->updateTransport($Transport, $_POST['Id_Tu']);
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