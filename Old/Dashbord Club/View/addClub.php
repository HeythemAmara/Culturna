<?php
include '../Controller/ClubC.php';
var_dump($_POST);
if (
    isset($_POST['namea']) &&
    isset($_POST['typea'])
   ) 
{
    if (
        !empty($_POST['namea']) &&
        !empty($_POST['typea'])
       ) 
        {
        $Club = new Club(
            $_POST['namea'],
            $_POST['typea']
            );
        $ClubC = new ClubC();
        $ClubC->addClub($Club);
        header('location:listClub.php');
        } 
    else 
        {
        header('location:listClub.php');
        }
    }
else 
    {
        header('location:listClub.php');
    }
?>