
<?php

include '../Controller/ClubC.php';

$ClubC = new ClubC();
if (
    isset($_POST['typeu']) &&
    isset($_POST['nameu'])&&
    isset($_POST['mailu'])&&
    isset($_FILES['imageu']) 
   ) 
   {
    if (
        !empty($_POST['nameu']) &&
        !empty($_POST['typeu'])&&
        !empty($_POST['mailu'])&&
        !empty($_FILES["imageu"]) 
       ) 
       { $target_dir = "uploadsC/";

        $target_file = $target_dir . basename($_FILES["imageu"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed_extensions = array("jpg", "jpeg", "png", "gif");

       if (in_array($imageFileType, $allowed_extensions)) {
            move_uploaded_file($_FILES["imageu"]["tmp_name"], $target_file);
            


        $r = $ClubC->findClubById($_POST['id_Club']);
        $Club = new Club(
            null,
            $_POST['nameu'],
            $_POST['typeu'],
            $_POST['mailu'],
            $_FILES['imageu']['name'],
            null
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
}
?>