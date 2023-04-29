<?php

use PHPMailer\PHPMailer\PHPMailer;
require_once './assets/Mailing/Exception.php';
require_once './assets/Mailing/PHPMailer.php';
require_once './assets/Mailing/SMTP.php';

include "../Controller/UtilisateurC.php";

	$valeur_id = isset($_GET['val_id']) ? $_GET['val_id'] : 0;
	$mail = new PHPMailer(true);
	$alert = '';
  

	if(isset($_POST['submit'])) {

		//generation de clé
		$chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$key = '';
		for ($i = 0; $i < 8; $i++) {
		  $key .= $chars[rand(0, strlen($chars) - 1)];
		}

		//mailing
		$email = $_POST['email'];
	
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

			header('location:FunctionComparaisonMdp.php?val_id=' . $valeur_id .'&key='.$key.'&Email='.$email);

	
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
				<li><?php echo "<a href='Page_accueil.php?val_id=" . 0 ."'>Accueil</a>"; ?></li>
            </ul>
        </div>
    </header>
	  <!--! Table or list ============================================== -->
	<section class="List">
		<div class="Tablelist">
			<ul>
				<li>
					<?php if($alert != ''): ?>
					<div><?php echo $alert ?></div>
					<?php endif; ?>
				</li>
			<li>
			<form class="form-group mt-4" method="POST" action=""  onsubmit="return validateFormModifserFront();">
				<ul>
					<li>
					<h1>Donnez Votre Email</h1>
					</li>
					<li>
						<input type="email" name="email" class="form-style" placeholder="Email" id="email">
					</li>
				</ul>
				<input type="submit" name="submit" value="Submit" class="btn ">
			</form>
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