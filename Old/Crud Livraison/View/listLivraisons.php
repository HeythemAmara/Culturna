<?php
include "../Controller/LivraisonC.php";
$LivraisonC = new LivraisonC();
$list = $LivraisonC->listLivraison();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Livraisons</title>
</head>

<body>

<center>
        <h1>List of Livraisons</h1>
        <h2>
            <a href="addLivraison.php">Add Livraison</a>
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id du Livraison</th>
            <th>Nom du Colis</th>
            <th>Frais de Livraison</th>
            <th>Type de Colis</th>
            <th>Adresse du Client</th>
            <th>Id du Client</th>
            <th>Id du Chauffeur</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($list as $livraison) 
        {
        ?>
            <tr>
                <td><?= $livraison['Id_L']; ?></td>
                <td><?= $livraison['Nom_Colis']; ?></td>
                <td><?= $livraison['Frais_Livraison']; ?></td>
                <td><?= $livraison['Type_Colis']; ?></td>
                <td><?= $livraison['Adresse_Client']; ?></td>
                <td><?= $livraison['Id_Client']; ?></td>
                <td><?= $livraison['Id_Ch']; ?></td>
                <td align="center">
                    <form method="POST" action="updateLivraison.php">
                    <a href="updateLivraison.php?Id_L=<?php echo $livraison['Id_L']; ?>">Update</a>
                    </form>
                </td>
                <td>
                    <a href="deleteLivraison.php?Id_L=<?php echo $livraison['Id_L']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>