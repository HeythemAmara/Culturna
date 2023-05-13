
<?php

include '../Controller/MatC.php';


$MatC = new MaterielC();

if (
    isset($_POST['typeum']) &&
    isset($_POST['nameum'])&&
    isset($_FILES['imageum'])

    
   ) 
   {
    if (
        !empty($_POST['nameum']) &&
        !empty($_POST['typeum'])&&
        !empty($_FILES["imageum"]) 
        ) 
       { $target_dir = "uploadsC/";

        $target_file = $target_dir . basename($_FILES["imageum"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed_extensions = array("jpg", "jpeg", "png", "gif");

       if (in_array($imageFileType, $allowed_extensions)) {
            move_uploaded_file($_FILES["imageum"]["tmp_name"], $target_file);
        $r = $MatC->findMaterielById($_POST['id_M']);
        $Mat = new Materiel(
            null,
            $_POST['nameum'],
            $_POST['typeum'],
            $_FILES['imageum']['name'],
          null,
            null


            );
        $MatC = new MaterielC();
        $MatC->updateMateriel($Mat, $_POST['id_M']);
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