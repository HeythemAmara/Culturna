<?php
include_once  "../Controller/ClubC.php";
include_once "../Model/Club.php";
$Club=null;


if (
    isset($_POST['namea']) &&
    isset($_POST['typea'])&&
    isset($_POST['maila'])&&
    isset($_FILES["image"])
   ) 
{
    if (
        !empty($_POST['namea']) &&
        !empty($_POST['typea'])&&
        !empty($_POST['maila'])&&
        !empty($_FILES["image"])
       ) 
        {
            $target_dir = "uploadsC/";

            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
           
            $allowed_extensions = array("jpg", "jpeg", "png", "gif");
    
           if (in_array($imageFileType, $allowed_extensions)) {
                move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                
                
        $Club = new Club(
            null,
            $_POST['namea'],
            $_POST['typea'],
            $_POST['maila'],
            $target_file,
            5
           
            );
            $ClubC = new ClubC();
        
        $ClubC->addClub($Club);
        header('location:listClub.php');

        
        } 
    else 
        {
        header('location:listClub.php');
        $error = "Invalid image file type. Allowed types: " . implode(", ", $allowed_extensions);
        }
    }
else 
    {
        header('location:listClub.php');
    }
}
?>