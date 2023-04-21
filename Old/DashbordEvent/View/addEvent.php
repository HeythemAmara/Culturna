<?php
include 'D:/xampp/htdocs/Culturna/perso/DASHBORDEVENT/Controller/EventC.php';
var_dump($_POST);
if (
    isset($_POST['namea']) &&
    isset($_POST['typea']) &&
    isset($_POST['timea']) &&
    isset($_POST['datea']) &&
    isset($_POST['prixa']) &&
    isset($_POST['imagea'])
   ) 
{
    if (
        !empty($_POST['namea']) &&
        !empty($_POST['typea']) &&
        !empty($_POST['timea']) &&
        !empty($_POST['datea']) &&
        !empty($_POST['prixa']) &&
        !empty($_POST['imagea'])
       ) 
        {
        $Event = new Event(
            $_POST['namea'],
            $_POST['typea'],
            $_POST['timea'],
            $_POST['datea'],
            $_POST['prixa'],
            $_POST['imagea']
            );
        $EventC = new EventC();
        $EventC->addEvent($Event);
        header('location:listEvent.php');
        } 
    else 
        {
        header('location:listEvent.php');
        }
    }
else 
    {
        header('location:listEvent.php');
    }
?>