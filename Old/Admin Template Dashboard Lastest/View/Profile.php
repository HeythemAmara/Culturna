<?php
include "../Controller/UtilisateurC.php";


$valeur_id = $_GET['val_id'];
//$valeur_id =7;
$UtilisateurC = new UtilisateurC();
$Username= $UtilisateurC->nomUtilisateur($valeur_id);
$list=$UtilisateurC->listUserId($valeur_id);
$test=0;


?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> Culturna </title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
  <link rel="stylesheet" href="../View/Reservation.css">

</head>
<body>

	<!--! Background Animation ================================================== -->
	<section class="bganim">
		<div class='air air1'></div>
		<div class='air air2'></div>
		<div class='air air3'></div>
		<div class='air air4'></div>
	</section>

	<!--! Header ================================================== -->

    <header id="header">
        <div class="header-back">
            <a href="#" class="Skapere">Skapere</a>
        </div>

        <div class="header-back">
            <ul>
				<li><?php echo "<a href='accueil.php?val_id=" . $valeur_id ."'>Accueil</a>"; ?></li>
                <li><a href="#">Clubs</a></li>
                <li><?php echo "<a href='Evenement.php?val_id=" . $valeur_id ."&creationreserv=".$test."'>Evenement</a>"; ?></li>
                <li><a href="#">Reclamation</a></li>
				<li><a href="#">Magasin</a></li>
                <li><?php echo "<a href='Reservation.php?val_id=" . $valeur_id ."'>Reservation</a>"; ?></li>
				<li><?php echo "<a href='TransportEtLivraison.php?val_id=" . $valeur_id ."'>Transport</a>"; ?></li>
                <?php
        		foreach ($Username as $Userr) 
        		{
        		?>
						<li							 ><a href="#"				class="connecter active"><?= $Userr['Username']; ?></a></li>
						<?php
				}
        		?>
				<?php
				foreach ($list as $Userr) 
        		{}
        		?>
            </ul>
        </div>
    </header>




	


	  <!--! Table or list ============================================== -->
	<section class="List">
		<div class="Tablelist">
			<ul>
				<li>
			<form class="form-group" method="POST" action="Name.php"  onsubmit="return validateFormModifserFront();">
				<ul><li>
				<input type="hidden" value="<?= $valeur_id ?>" name="idu">
				<input type="hidden" value="<?= $Userr["Email"] ?>" name="emailu">
				<input type="hidden" value="<?= $Userr["Mdp"] ?>" name="mdpu">
				<input type="hidden" value="<?= $Userr["Dob"] ?>" name="dobu">
				<input type="hidden" value="<?= $Userr["Perm"] ?>" name="permu">
				<label for="Usernameu"> Username </label>
				<input type="text" name="Usernameu" class="form-style" value="<?= $Userr['Username']; ?>" id="Usernameu">
				</li></ul>
				<input type="submit" name="Update" value="Submit" class="btn ">
			</form>
			</li>
			<li>
			<form class="form-group mt-4" method="POST" action="Email.php"  onsubmit="return validateFormModifserFront();">
				<ul><li>
				<input type="hidden" value="<?= $valeur_id ?>" name="idu">
				<input type="hidden" value="<?= $Userr["Username"] ?>" name="Usernameu">
				<input type="hidden" value="<?= $Userr["Mdp"] ?>" name="mdpu">
				<input type="hidden" value="<?= $Userr["Dob"] ?>" name="dobu">
				<input type="hidden" value="<?= $Userr["Perm"] ?>" name="permu">
				<label for="emailu"> Email </label>
				<input type="email" name="emailu" class="form-style" value="<?= $Userr['Email']; ?>" id="emailu">
				</li></ul>
				<input type="submit" name="Update" value="Submit" class="btn ">
			</form>
			</li>
			<li>
			<form class="form-group mt-4" method="POST" action="Dob.php"  onsubmit="return validateFormModifserFront();">
				<ul><li>
				<input type="hidden" value="<?= $valeur_id ?>" name="idu">
				<input type="hidden" value="<?= $Userr["Username"] ?>" name="Usernameu">
				<input type="hidden" value="<?= $Userr["Mdp"] ?>" name="mdpu">
				<input type="hidden" value="<?= $Userr["Email"] ?>" name="emailu">
				<input type="hidden" value="<?= $Userr["Perm"] ?>" name="permu">
				<label for="dobu"> DOB " <?= $Userr['Dob']; ?> " </label>	
				<input type="date" name="dobu" class="form-style" id="dobu">
				</li></ul>
				<input type="submit" name="Update" value="Submit" class="btn ">
			</form>
			</li>
			</ul>
		</div>
	</section>

	<!--! Scroll back to top ================================================== -->
	<div class="scroll-to-top"></div>

    
</body>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script  src="./scriptdashboard.js"></script>
<script src="./assets/JS/InputControlFront.js"></script>

</html>