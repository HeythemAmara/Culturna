
<?php
include_once "../Model/Transport.php";
include_once "../Controller/TransportC.php";

$TransportC = new TransportC();
var_dump($_POST);
if (
    isset($_POST['IdClientut']) &&
    isset($_POST['Id_Chut']) &&
    isset($_POST['Typeut']) &&
    isset($_POST['Nbr_Persut']) &&
    isset($_POST['Dateut']) &&
    isset($_POST['adresseut']) &&
    isset($_POST['nameut']) &&
    isset($_POST['numut']) &&
    isset($_POST['Noteut']) 
   ) 
   {
    if (
        !empty($_POST['IdClientut']) &&
        !empty($_POST['Id_Chut']) &&
        !empty($_POST['Typeut']) &&
        !empty($_POST['Nbr_Persut']) &&
        !empty($_POST['Dateut']) &&
        !empty($_POST['nameut']) &&
        !empty($_POST['adresseut']) &&
        !empty($_POST['numut']) &&
        !empty($_POST['Noteut']) 
       ) 
       {
        $r = $TransportC->findTransportById($_POST['Id_Tut']);
        $Transport = new Transport(
            $_POST['IdClientut'],
            $_POST['Id_Chut'],
            $_POST['Typeut'],
            $_POST['Nbr_Persut'],
            $_POST['Dateut'] ,
            $_POST['adresseut'] ,
            $_POST['nameut'] ,
            $_POST['numut'] ,
            $_POST['Noteut']
            );
        $TransportC = new TransportC();
        $TransportC->updateTransport($Transport, $_POST['Id_Tut']);
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