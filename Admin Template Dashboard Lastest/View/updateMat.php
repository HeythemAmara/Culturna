
<?php

include '../Controller/MatC.php';


$MatC = new MaterielC();

if (
    isset($_POST['typeum']) &&
    isset($_POST['nameum'])&&
    isset($_FILES['imageum'])&&
    isset($_POST['id_cu']) &&
    isset($_POST['nom_clu'])
//aaaaaaaaaaaaaaaaaaaaaaaa
   ) 
   {
    if (
        !empty($_POST['nameum']) &&
        !empty($_POST['typeum'])&&
        !empty($_FILES["imageum"]) &&
        !empty($_POST["id_cu"])  &&
        !empty($_POST["nom_clu"])      ) 
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
            $_POST['id_cu'],
            $_POST['nom_clu']


            );
        $MatC = new MaterielC();
        $MatC->updateMateriel($Mat, $_POST['id_M']);
        header('location:listMat_new.php');
        echo "done";
        }
    else 
        {
            header('location:listMat_new.php');
            echo "nope1";
        }
    }
else 
    {
        header('location:listMat_new.php');
        echo "nope2";
    }
}
?>