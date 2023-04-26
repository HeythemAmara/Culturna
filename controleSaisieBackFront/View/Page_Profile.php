<?php
include "../Controller/UtilisateurC.php";

use PHPMailer\PHPMailer\PHPMailer;
require_once './assets/Mailing/Exception.php';
require_once './assets/Mailing/PHPMailer.php';
require_once './assets/Mailing/SMTP.php';

//$valeur_id =7;
$valeur_id = $_GET['val_id'];
$UtilisateurC = new UtilisateurC();
$Username= $UtilisateurC->nomUtilisateur($valeur_id);
$list=$UtilisateurC->listUserId($valeur_id);
$test=0; 

$mail = new PHPMailer(true);
$alert = '';

foreach ($Username as $Userr) {}

if(isset($_POST['changemdp'])) {

	//generation de clé
	$chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$key = '';
	for ($i = 0; $i < 8; $i++) {
	  $key .= $chars[rand(0, strlen($chars) - 1)];
	}

	//mailing
	$email = $Userr["Email"] ;

	try {
		$mail->isSMTP();
		$mail->Host= 'smtp.gmail.com';
		$mail->SMTPAuth= true;
		$mail->Username= 'culturnacop@gmail.com';
		$mail->Password= 'kdpxcaqpexwxnlbn';
		$mail->SMTPSecure= PHPMailer::ENCRYPTION_STARTTLS;
		$mail->Port= 587;

		$mail->setFrom('culturnacop@gmail.com' , ); 
		$mail->addAddress($email); 

		$mail->Subject = 'Message Received (Contact Page)';
		$mail->Body = '<h3>Le code est : '.$key.'</h3>';
		$mail->IsHTML(true);

		$mail->send();
		$alert = 'Message envoyé avec succès !';

		header('location:FunctionComparaisonMdp.php?val_id=' . $valeur_id .'&key='. $key . '&Email=' . $email);


	} catch (Exception $e) {
		$alert = 'Une erreur s\'est produite lors de l\'envoi du message. Veuillez réessayer plus tard.';
	}
}

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="./assets Dashboard/img Dashboard/favicon.png">
  <title> Culturna </title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
  <link rel="stylesheet" href="./assets/CSS/Reservation.css">

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
				<li><?php echo "<a href='Page_accueil.php?val_id=" . $valeur_id ."'>Accueil</a>"; ?></li>
                <li><a href="#">Clubs</a></li>
                <li><?php echo "<a href='Page_Evenement.php?val_id=" . $valeur_id ."&creationreserv=".$test."'>Evenement</a>"; ?></li>
                <li><a href="#">Reclamation</a></li>
				<li><a href="#">Magasin</a></li>
                <li><?php echo "<a href='Page_Reservation.php?val_id=" . $valeur_id ."'>Reservation</a>"; ?></li>
				<li><?php echo "<a href='Page_Transport.php?val_id=" . $valeur_id ."'>Transport</a>"; ?></li>
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
			<form class="form-group" method="POST" action="FunctionUpdateNameUser.php"  onsubmit="return validateFormModifserFront();">
				<ul><li>
				<input type="hidden" value="<?= $valeur_id ?>" name="idu">
				<input type="hidden" value="<?= $Userr["Email"] ?>" name="emailu">
				<input type="hidden" value="<?= $Userr["Mdp"] ?>" name="mdpu">
				<input type="hidden" value="<?= $Userr["Dob"] ?>" name="dobu">
				<input type="hidden" value="<?= $Userr["Perm"] ?>" name="permu">
				<label for="Usernameu"> Username </label>
				<input type="text" name="Usernameu" class="form-style" value="<?= $Userr['Username']; ?>" id="Usernameu">
				</li></ul>
				<input type="submit" name="Update" value="Submit" class="btn " style='margin-top: 10px; margin-right: 30px;'>
			</form>
			</li>
			<li>
			<form class="form-group mt-4" method="POST" action="FunctionUpdateEmailUser.php"  onsubmit="return validateFormModifserFront();">
				<ul><li>
				<input type="hidden" value="<?= $valeur_id ?>" name="idu">
				<input type="hidden" value="<?= $Userr["Username"] ?>" name="Usernameu">
				<input type="hidden" value="<?= $Userr["Mdp"] ?>" name="mdpu">
				<input type="hidden" value="<?= $Userr["Dob"] ?>" name="dobu">
				<input type="hidden" value="<?= $Userr["Perm"] ?>" name="permu">
				<label for="emailu"> Email </label>
				<input type="email" name="emailu" class="form-style" value="<?= $Userr['Email']; ?>" id="emailu">
				</li></ul>
				<input type="submit" name="Update" value="Submit" class="btn " style='margin-top: 10px; margin-right: 30px;'>
			</form>
			</li>
			<li>
			<form class="form-group mt-4" method="POST" action="FunctionUpdateDobUser.php"  onsubmit="return validateFormModifserFront();">
				<ul><li>
				<input type="hidden" value="<?= $valeur_id ?>" name="idu">
				<input type="hidden" value="<?= $Userr["Username"] ?>" name="Usernameu">
				<input type="hidden" value="<?= $Userr["Mdp"] ?>" name="mdpu">
				<input type="hidden" value="<?= $Userr["Email"] ?>" name="emailu">
				<input type="hidden" value="<?= $Userr["Perm"] ?>" name="permu">
				<label for="dobu"> DOB " <?= $Userr['Dob']; ?> " </label>	
				<input type="date" name="dobu" class="form-style" id="dobu">
				</li></ul>
				<input type="submit" name="Update" value="Submit" class="btn " style='margin-top: 10px; margin-right: 30px;'>
			</form>
			</li>
			<li>
				
				<form action="" method="post">
  					<input type="submit" name="changemdp" value="Change Password" class="btn" style="margin-top: 100px; margin-right: 230px;">
				</form>

				<?php echo "<a href='Page_accueil.php?val_id=" . 0 ."' class='btn' style='margin-top: 100px; margin-right: 30px;'>Disconnect</a>"; ?>
			</li>
			</ul>
		</div>
	</section>

	<!--! Scroll back to top ================================================== -->
	<div class="scroll-to-top"></div>

    
</body>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script  src="./assets/JS/scriptdashboard.js"></script>
<script src="./assets/JS/InputControlFront.js"></script>

</html>