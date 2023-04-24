<?php

$valeur_id = $_GET['val_id'];
$Id_Ch = $_GET['Id_Ch'];
$Nom = $_GET['Nom'];
$Prenom = $_GET['Prenom'];
$Tel = $_GET['Tel'];
$Email = $_GET['Email'];
$Vehicule = $_GET['Vehicule'];

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Driver</title>
    <link href="../CSS/PDF.css" rel="stylesheet" />
</head>
<body>
    <div class="corps">
    <div class="macarte">
                <p class="titre">Driver's Information</p>
                <div class="input-nom-prenom">
                    <div class="titre-input1">
                        <p class="titre">First Name : <strong style="color: black;"><?php echo $Prenom ?> </strong></p>
                    </div>
                    <div class="titre-input2">
                        <p class="titre">Last Name :<strong style="color: black;"><?php echo $Nom ?> </strong></p>
                    </div>
                </div>
                <div class="titre-input">
                    <p class="titre">Phone :<strong style="color: black;"><?php echo $Tel ?> </strong></p> 
                </div>
                <div class="titre-input">
                    <p class="titre">Email:  <strong style="color: black;"><?php echo $Email ?> </strong></p>
                </div>
                <div class="titre-input">
                    <p class="titre">Transport :<strong style="color: black;"><?php echo $Vehicule ?> </strong></p>
                </div>
            </div>
            <div class="input-back" onclick="window.location.href='../../listChauffeur.php?val_id=<?php echo $valeur_id ?>';">Back</div>
            <div class="input-type-submit2">Telecharger</div>
    </div>
</body>
</html>



   <script src="html2pdf.bundle.js"></script> 
   <script>
        var filename="<?php echo $Prenom." ".$Nom ?>"
        var btn2 = document.querySelector(".input-type-submit2");
        var element = document.querySelector(".macarte");
        btn2.onclick = () => {
            html2pdf().from(element).save(filename);
        };
    
</script>

</body>
</html>