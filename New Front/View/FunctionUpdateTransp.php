
<?php
include_once "../Model/Transport.php";
include_once "../Controller/TransportC.php";

//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDLIVRAISON/Controller/TransportC.php';
$TransportC = new TransportC();
var_dump($_POST);
$valeur_id=$_POST['idclienta'];
if (
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
            NULL,
            NULL,
            $_POST['Typeut'],
            $_POST['Nbr_Persut'],
            $_POST['Dateut'] ,
            $_POST['adresseut'] ,
            $_POST['nameut'] ,
            $_POST['numut'] ,
            $_POST['Noteut']
            );
        $TransportC = new TransportC();
        $TransportC->updateTransportpourclient($Transport, $_POST['Id_Tut']);
        header('location:Page_Transport.php?val_id=' . urlencode($valeur_id));
        } 
    else 
        {
            header('location:Page_Transport.php?val_id=' . urlencode($valeur_id));
        }
    }
else 
    {
        header('location:Page_Transport.php?val_id=' . urlencode($valeur_id));
    }
?>