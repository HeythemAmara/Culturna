<?php
include '../Controller/EventC.php';
include "../Controller/UtilisateurC.php";
include "../Controller/ChauffeurC.php";


$ChauffeurC = new ChauffeurC();
$listchauffeur = $ChauffeurC->listChauffeur();
$valeur_id = $_GET['val_id'];
$resevtest = $_GET['creationreserv'];
$datee = $_GET['dateevent'];
$nbrplace = $_GET['nbrpersonne'];
$UtilisateurC = new UtilisateurC();
$Username= $UtilisateurC->nomUtilisateur($valeur_id);

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="./assets Dashboard/img Dashboard/favicon.png">
  <title> Culturna </title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
  <link rel="stylesheet" href="./assets/CSS/style TransportEvent.css">
  <link rel="stylesheet" href="./assets/CSS/styleInputNextPrevious.css">

</head>
<body>

<input type="hidden" id="resevtest" value="<?= $resevtest; ?>">

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
                <li><?php echo "<a href='Page_Evenement.php?val_id=" . $valeur_id ."&creationreserv=". 0 ."'>Evenement</a>"; ?></li>
                <li><a href="#">Reclamation</a></li>
				<li><a href="#">Magasin</a></li>
                <li><a href="#">Dashboard</a></li>
				<?php
        		foreach ($Username as $User) 
        		{
        		?>
						<li							 ><a href="#"				class="connecter"><?= $User['Username']; ?></a></li>
						<?php
				}
        		?>
            </ul>
        </div>
    </header>




	<!--! Scroll back to top ================================================== -->
	<div class="scroll-to-top"></div>

	  <!--! affiche  ============================================== -->
	<section class="List">
		<div class="affiche"></div>
		<ul class="buttonslist">
			<li><?php echo "<a href='Page_Evenement.php?val_id=" . $valeur_id ."&creationreserv=". 0 ."'>Back</a>"; ?></li>
			<li class="btnrequesttransport hide"><button class="toggle">Request Transport</button></li>
		</ul>
		
	</section>
		<!--! Input Reservation ============================================== -->
	<section class="input-visibility flip-out-hor-top out-of-screen" >
		<form  method="POST" action="FunctionDemandeTransport.php"  onsubmit="return DemandeTransportUser2();"  >
			<div class="stepper" >
				<div class="step--1 step-active"></div>
				<div class="step--2"></div>
			</div>
			<div class="form form-active">
				<a href="#" id="closebtn1"><i class="icon-close uil uil-times-circle"></i></a>
				<div class="form--header-container">
					<h1 class="form--header-title">
						Reservation
					</h1>
	
					<p class="form--header-text">
						Give us your Informations.
					</p>
				</div>
				<input type="hidden" value="<?= $datee; ?>" name="dateeventa" id="dateeventa"/>
				<input type="hidden" value="<?= $nbrplace; ?>" name="nbrPlacea" id="nbrPlacea"/>
				<input type="hidden" value="Event" name="Typea" id="Typea"/>
				<input type="hidden" value="9999" name="idcha" id="idcha"/>
				<input class="inputreserv" type="text" placeholder="Name" name="namea" id="namea"/>
				<input class="inputreserv" type="text" placeholder="Adresse" name="adressea" id="adressea"/>
				<button class="form__btn" id="btn-1" onclick="DemandeTransportUser1()">Next</button>
			</div>
			<div class="form">
				<a href="#" id="closebtn2"><i class="icon-close uil uil-times-circle"></i></a>
				<div class="form--header-container">
					<h1 class="form--header-title">
						Get your place now
					</h1>
	
					<p class="form--header-text">
						Number of available places :
					</p>
				</div>
				<input type="hidden" value="<?= $valeur_id; ?>"  name="idclienta" id="idclienta">
				<select name="idcha" class="inputreserv" id="idcha">
	                  	<option value="1">Chauffeur</option>
						  <?php
        					foreach ($listchauffeur as $diver) 
        						{
        						?>
								<option value="<?= $diver['Id_Ch']; ?>"><?= $diver['Nom']; ?> <?= $diver['Prenom']; ?></option>
								<?php
								}
        						?>
	            </select>
				<input class="inputreserv" type="tel" placeholder="Phone Number" name="numa" id="numa"/>
				<input class="inputreserv" type="text" placeholder="A note for the driver" name="Notea" id="Notea"/>
				<button class="form__btn" id="btn-3-prev">Previous</button>
				<button class="form__btn invis" id="btn-3"></button>
				<input type="submit" name="Add" value="Submit" class="form__btn">
			</div>
		</form>
	</section>  
</body>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script  src="./assets/JS/scriptInputNextPrevious.js"></script>
<script  src="./assets/JS/script TransportEvent.js"></script>
<script src="./assets/JS/InputControlFront.js"></script>

</html>
