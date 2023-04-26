<?php

$valeur_id = $_GET['val_id'];
$Id_T      = $_GET['Id_T'];
$Type      = $_GET['Type'];
$Nbr_Pers  = $_GET['Nbr_Pers'];
$Date      = $_GET['Date'];
$Adresse   = $_GET['Adresse'];
$Nom       = $_GET['Nom'];
$Tel       = $_GET['Tel'];
$Message   = $_GET['Message'];

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Transport</title>
    <link href="../CSS/PDF.css" rel="stylesheet" />
</head>
<body>
    <div class="corps">
    <div class="macarte">
                <p class="titre"><?php echo $Type ?>'s Information</p>
                <div class="input-nom-prenom">
                    <div class="titre-input1">
                        <p class="titre">Name : <strong style="color: black;"><?php echo $Nom ?> </strong></p>
                    </div>
                    <div class="titre-input2">
                        <p class="titre">N°Passengers :<strong style="color: black;"><?php echo $Nbr_Pers ?> </strong></p> 
                    </div>
                </div>
                <div class="titre-input">
                    <p class="titre">Date:  <strong style="color: black;"><?php echo $Date ?> </strong></p>
                </div>
                <div class="titre-input">
                    <p class="titre">Adress :<strong style="color: black;"><?php echo $Adresse ?> </strong></p>
                </div>
                <div class="titre-input">
                    <p class="titre">Phone :<strong style="color: black;"><?php echo $Tel ?> </strong></p>
                </div>
                <div class="titre-input">
                    <p class="titre">Message :<strong style="color: black;"><?php echo $Message ?> </strong></p>
                </div>
            </div>
            <div class="input-back" onclick="window.location.href='../../listChauffeur.php?val_id=<?php echo $valeur_id ?>';">Back</div>
            <div class="input-type-submit2">Telecharger</div>
    </div>
</body>
</html>



   <script src="html2pdf.bundle.js"></script> 
   <script>
        var filename="<?php echo $Nom." ".$Type?>"
        var btn2 = document.querySelector(".input-type-submit2");
        var element = document.querySelector(".macarte");
        btn2.onclick = () => {
            html2pdf().from(element).save(filename);
        };
    
</script>

</body>
</html>