
<?php

include '../Controller/ClubC.php';

$ClubC = new ClubC();
var_dump($_POST);
if (
    isset($_POST['typeu']) &&
    isset($_POST['nameu'])
   ) 
   {
    if (
        !empty($_POST['nameu']) &&
        !empty($_POST['typeu'])
       ) 
       {
        $r = $ClubC->findClubById($_POST['id_Club']);
        $Club = new Club(
            $_POST['nameu'],
            $_POST['typeu']
            );
        $ClubC = new ClubC();
        $ClubC->updateClub($Club, $_POST['id_Club']);
        header('location:listClub.php');
        echo "done";
        } 
    else 
        {
            header('location:listClub.php');
            echo "nope1";
        }
    }
else 
    {
        header('location:listClub.php');
        echo "nope2";
    }
?>