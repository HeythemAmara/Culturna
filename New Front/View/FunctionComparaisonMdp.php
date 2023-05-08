<?php
include "../Controller/UtilisateurC.php";

$valeur_id = $_GET['val_id'];
$key = $_GET['key'];
$email = $_GET['Email'];

	if(isset($_POST['submit'])) {
        if($_POST['key'] == $key)
        {
            header('location:Page_MdpChange.php?val_id=' . $valeur_id . '&Email=' . $email);
        }
        else
        {
            if($valeur_id==0)
            {
                header('location:Page_GiveEmail.php?val_id=' . 0);
            }
            else
            {
                header('location:Page_Profile.php?val_id=' . $valeur_id);
            }
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
			<form class="form-group mt-4" method="POST" action="" >
				<ul>
					<li>
					<h1>Placez votre clé(un mail vous a été envoyé)</h1>
					</li>
					<li>
						<input type="text" name="key" class="form-style" placeholder="Key" id="key">
					</li>
				</ul>
				<input type="submit" name="submit" value="Submit" class="btn btn-primary py-md-3 px-md-5 me-3 mt-4" style="margin-top: 10px; float: right;">
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