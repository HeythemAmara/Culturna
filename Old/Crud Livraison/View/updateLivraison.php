<?php
include_once "../Model/Livraison.php";
include_once "../Controller/LivraisonC.php";
$LivraisonC = new LivraisonC();
echo $_GET['Id_L'];
if (
    isset($_POST['idll']) &&
    isset($_POST['nom']) &&
    isset($_POST['frais']) &&
    isset($_POST['typecolis']) &&
    isset($_POST['adresse']) &&
    isset($_POST['idclient']) &&
    isset($_POST['idch']) 
   ) 
   {
    if (
        !empty($_POST['idll']) &&
        !empty($_POST['nom']) && 
        !empty($_POST['frais']) && 
        !empty($_POST['typecolis']) && 
        !empty($_POST['adresse']) && 
        !empty($_POST['idclient']) && 
        !empty($_POST['idch']) 
       ) 
       {
        $r = $LivraisonC->findLivraisonById($_GET['Id_L']);
        $Livraison = new Livraison(
            $_POST['idll'],
            $_POST['nom'],
            $_POST['frais'],
            $_POST['typecolis'],
            $_POST['adresse'],
            $_POST['idclient'],
            $_POST['idch']
            );
        $LivraisonC = new LivraisonC();
        $LivraisonC->updateLivraison($Livraison, $_GET['Id_L']);
        header('location:listLivraisons.php');
    } else {
        echo "variable empty!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Livraison</title>
</head>

<body>
    <h1>Update Livraison</h1>
    <form action="" method="post">
        <input type="number" name="idll" id="idll" placeholder="nouveau ID LIV"><br>
        <input type="text" name="nom" id="nom" placeholder="nom"><br>
        <input type="number" name="frais" id="frais" placeholder="frais"><br>
        <input type="text" name="typecolis" id="typecolis" placeholder="typecolis"><br>
        <input type="text" name="adresse" id="adresse" placeholder="adresse"><br>
        <input type="number" name="idclient" id="idclient" placeholder="ID client"><br>
        <input type="number" name="idch" id="idch" placeholder="ID chauffeur"><br>

        <input type="submit" value="Update">
    </form>
</body>

</html>