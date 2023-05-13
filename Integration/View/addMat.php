<?php
include '../Controller/MatC.php';
include_once '../Controller/Mat.php';
var_dump($_POST);

if (
    isset($_POST['nameam']) &&
    isset($_POST['typeam'])&&
    isset($_FILES["imageam"])&&
    isset($_POST["id_ca"])&&
    isset($_POST["nom_cla"])

   ) 
{
    if (
        !empty($_POST['nameam']) &&
        !empty($_POST['typeam'])&&
        !empty($_FILES["imageam"])&&
        !empty($_POST["id_ca"])&&
        !empty($_POST["nom_cla"])


       ) 
        {$target_dir = "uploadsC/";

            $target_file = $target_dir . basename($_FILES["imageam"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
           
            $allowed_extensions = array("jpg", "jpeg", "png", "gif");
    
           if (in_array($imageFileType, $allowed_extensions)) {
                move_uploaded_file($_FILES["imageam"]["tmp_name"], $target_file);
        $Mat = new Materiel(
            null,
            $_POST['nameam'],
            $_POST['typeam'],
            $target_file,
            $_POST['id_ca'],
            $_POST['nom_cla']

            );
        $MatC = new MaterielC();
        $MatC->addMateriel($Mat);
        header('location:tajrib.php');
       /* if(  $MatC->addMateriel($Mat)==0)
        {
            echo "<script>alert('Le Materiel et le club n'ont pas le meme type');</script>";

        }*/
        
        } 
    else 
        {
        header('location:tajrib.php');
        }
    }
else 
    {
        header('location:tajrib.php');
    }

}
?>