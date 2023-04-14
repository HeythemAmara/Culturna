<?php
include "../Controller/EventC.php";
include "../Controller/UtilisateurC.php";
$EventC = new EventC();
$listtype1 = $EventC->listEventtype("Type1");
$listtype2 = $EventC->listEventtype("Type2");
$listtype3 = $EventC->listEventtype("Type3");
$listtype4 = $EventC->listEventtype("Type4");
$listtype5 = $EventC->listEventtype("Type5");
$listtype6 = $EventC->listEventtype("Type6");

$valeur_id = $_GET['val_id'];
$resevtest = $_GET['creationreserv'];
$UtilisateurC = new UtilisateurC();
$Username= $UtilisateurC->nomUtilisateur($valeur_id);


?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> Culturna </title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
  <link rel="stylesheet" href="./style Event.css">
  <link rel="stylesheet" href="./styleEventRotation.css">
  <link rel="stylesheet" href="./styleInputNextPrevious.css">

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
                <li><a href="#" class="active">Evenement</a></li>
                <li><a href="#">Reclamation</a></li>
				<li><a href="#">Magasin</a></li>
                <li><?php echo "<a href='Reservation.php?val_id=" . $valeur_id ."'>Reservation</a>"; ?></li>
				<li><?php echo "<a href='TransportEtLivraison.php?val_id=" . $valeur_id ."'>Transport</a>"; ?></li>
				<?php
        		foreach ($Username as $User) 
        		{
        		?>
						<li>
							<?php echo "<a href='Profile.php?val_id=" . $valeur_id ."'>".$User['Username']."</a>"; ?>
						</li>
						<?php
				}
        		?>
            </ul>
        </div>
    </header>


	<!--! Scroll back to top ================================================== -->
	<div class="scroll-to-top"></div>


	<!--! Burger Menu or Sidebar ============================================== -->

	<div class="burger">
		<span></span>
	  </div>
	  
	  <nav class="navadmin">
		<ul class="main">
		  	<li><h3 href="#" >Type des Evenements:</h3></li>
		  	<li><a href="#" class="active">Type1</a></li>
		  	<li><a href="#">Type2</a></li> 
		  	<li><a href="#">Type3</a></li>
		  	<li><a href="#">Type4</a></li>
		  	<li><a href="#">Type5</a></li>
		  	<li><a href="#">Type6</a></li>
		</ul>
	  </nav>
	  <div class="overlay"></div>

	  <!--! Liste Event par Type ============================================== -->
	<section class="List">
		<ul class="Tablelist">
			<li class="Type Type1" >
				<h1 class="Title_Types"> Type 1</h1>
				<ul class="UnType">
				<?php
				foreach ($listtype1 as $Event) 
        		{
        		?>
					<li class="UnEvent">
						<input type="hidden" id="idevent" value="<?= $Event['idEvent']; ?>"/>
						<input type="hidden" id="dateevent" value="<?= $Event['date']; ?>"/>
						<input type="hidden" id="prixevent" value="<?= $Event['prix']; ?>"/>
						<button class="card_event">
							<div class="card_event_contenu">
								<div class="card_frontinfo">
									<img src="./ImageEvent/<?= $Event['image']; ?>" alt="Evenement" class="img_event">
								</div>
								<div class="card_backinfo">
									
									<h1 class="NomEvent"><?= $Event['name']; ?></h1>
									<h2 class="PrixEvent"><?= $Event['prix']; ?></h2>
									<h2 class="DateEvent"><?= $Event['date']; ?></h2>
									<h2 class="TimeEvent"><?= $Event['time']; ?></h2>
								</div>
							</div>
						</button>
					</li>
				<?php
       			}
        		?>	
				</ul>
			</li>
			<li class="Type Type2">
				<h1 class="Title_Types" > Type 2</h1>
				<ul class="UnType">
				<?php
				foreach ($listtype2 as $Event) 
        		{
        		?>
					<li class="UnEvent">
						<input type="hidden" id="idevent" value="<?= $Event['idEvent']; ?>"/>
						<input type="hidden" id="dateevent" value="<?= $Event['date']; ?>"/>
						<input type="hidden" id="prixevent" value="<?= $Event['prix']; ?>"/>
						<button class="card_event">
							<div class="card_event_contenu">
								<div class="card_frontinfo">
									<img src="./ImageEvent/<?= $Event['image']; ?>" alt="Evenement" class="img_event">
								</div>
								<div class="card_backinfo">
									
									<h1 class="NomEvent"><?= $Event['name']; ?></h1>
									<h2 class="PrixEvent"><?= $Event['prix']; ?></h2>
									<h2 class="DateEvent"><?= $Event['date']; ?></h2>
									<h2 class="TimeEvent"><?= $Event['time']; ?></h2>
								</div>
							</div>
						</button>
					</li>
				<?php
       			}
        		?>	
				</ul>
			</li><li class="Type Type3">
				<h1 class="Title_Types"> Type 3</h1>
				<ul class="UnType">
				<?php
				foreach ($listtype3 as $Event) 
        		{
        		?>
					<li class="UnEvent">
						<input type="hidden" id="idevent" value="<?= $Event['idEvent']; ?>"/>
						<input type="hidden" id="dateevent" value="<?= $Event['date']; ?>"/>
						<input type="hidden" id="prixevent" value="<?= $Event['prix']; ?>"/>
						<button class="card_event">
							<div class="card_event_contenu">
								<div class="card_frontinfo">
									<img src="./ImageEvent/<?= $Event['image']; ?>" alt="Evenement" class="img_event">
								</div>
								<div class="card_backinfo">
									
									<h1 class="NomEvent"><?= $Event['name']; ?></h1>
									<h2 class="PrixEvent"><?= $Event['prix']; ?></h2>
									<h2 class="DateEvent"><?= $Event['date']; ?></h2>
									<h2 class="TimeEvent"><?= $Event['time']; ?></h2>
								</div>
							</div>
						</button>
					</li>
				<?php
       			}
        		?>	
				</ul>
			</li><li class="Type Type4">
				<h1 class="Title_Types"> Type 4</h1>
				<ul class="UnType">
				<?php
				foreach ($listtype4 as $Event) 
        		{
        		?>
					<li class="UnEvent">
						<input type="hidden" id="idevent" value="<?= $Event['idEvent']; ?>"/>
						<input type="hidden" id="dateevent" value="<?= $Event['date']; ?>"/>
						<input type="hidden" id="prixevent" value="<?= $Event['prix']; ?>"/>
						<button class="card_event">
							<div class="card_event_contenu">
								<div class="card_frontinfo">
									<img src="./ImageEvent/<?= $Event['image']; ?>" alt="Evenement" class="img_event">
								</div>
								<div class="card_backinfo">
									
									<h1 class="NomEvent"><?= $Event['name']; ?></h1>
									<h2 class="PrixEvent"><?= $Event['prix']; ?></h2>
									<h2 class="DateEvent"><?= $Event['date']; ?></h2>
									<h2 class="TimeEvent"><?= $Event['time']; ?></h2>
								</div>
							</div>
						</button>
					</li>
				<?php
       			}
        		?>	
				</ul>
			</li><li class="Type Type5">
				<h1 class="Title_Types"> Type 5</h1>
				<ul class="UnType">
				<?php
				foreach ($listtype5 as $Event) 
        		{
        		?>
					<li class="UnEvent">
						<input type="hidden" id="idevent" value="<?= $Event['idEvent']; ?>"/>
						<input type="hidden" id="dateevent" value="<?= $Event['date']; ?>"/>
						<input type="hidden" id="prixevent" value="<?= $Event['prix']; ?>"/>
						<button class="card_event">
							<div class="card_event_contenu">
								<div class="card_frontinfo">
									<img src="./ImageEvent/<?= $Event['image']; ?>" alt="Evenement" class="img_event">
								</div>
								<div class="card_backinfo">
									
									<h1 class="NomEvent"><?= $Event['name']; ?></h1>
									<h2 class="PrixEvent"><?= $Event['prix']; ?></h2>
									<h2 class="DateEvent"><?= $Event['date']; ?></h2>
									<h2 class="TimeEvent"><?= $Event['time']; ?></h2>
								</div>
							</div>
						</button>
					</li>
				<?php
       			}
        		?>	
				</ul>
			</li><li class="Type Type6">
				<h1 class="Title_Types"> Type 6</h1>
				<ul class="UnType">
				<?php
				foreach ($listtype6 as $Event) 
        		{
        		?>
					<li class="UnEvent">
						<input type="hidden" id="idevent" value="<?= $Event['idEvent']; ?>"/>
						<input type="hidden" id="dateevent" value="<?= $Event['date']; ?>"/>
						<input type="hidden" id="prixevent" value="<?= $Event['prix']; ?>"/>
						<button class="card_event">
							<div class="card_event_contenu">
								<div class="card_frontinfo">
									<img src="./ImageEvent/<?= $Event['image']; ?>" alt="Evenement" class="img_event">
								</div>
								<div class="card_backinfo">
									
									<h1 class="NomEvent"><?= $Event['name']; ?></h1>
									<h2 class="PrixEvent"><?= $Event['prix']; ?></h2>
									<h2 class="DateEvent"><?= $Event['date']; ?></h2>
									<h2 class="TimeEvent"><?= $Event['time']; ?></h2>
								</div>
							</div>
						</button>
					</li>
				<?php
       			}
        		?>	
				</ul>
			</li>
			</ul>
		
	</section>
		<!--! Input Reservation ============================================== -->
	<section class="input-visibility flip-out-hor-top out-of-screen" >
		<form  method="POST" action="CreerReservation.php" >
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
				<input type="hidden" name="idEventa" id="idEventa"/>
				<input type="hidden" name="prixeventa" id="prixeventa"/>
				<input type="hidden" name="dateeventa" id="dateeventa"/>
				<input class="inputreserv" type="text" placeholder="Name" name="namea" id="namea"/>
				<input class="inputreserv" type="email" placeholder="Email" name="emaila" id="emaila"/>
				<button class="form__btn" id="btn-1">Next</button>
			</div>
			<div class="form">
				<a href="#" id="closebtn2"><i class="icon-close uil uil-times-circle"></i></a>
				<div class="form--header-container">
					<h1 class="form--header-title">
						Get your place now
					</h1>
	
					<p class="form--header-text">
						Number of available places : <?= $Event['nbrPlaceMax']; ?>
					</p>
				</div>
				<input type="hidden" value="<?= $valeur_id; ?>"  name="idclienta" id="idclienta">
				<input class="inputreserv" type="tel" placeholder="Phone Number" name="numa" id="numa"/>
				<input class="inputreserv" type="number" placeholder="Number of Places" name="nbrPlacea" id="nbrPlacea"/>
				<button class="form__btn" id="btn-3-prev">Previous</button>
				<button class="form__btn invis" id="btn-3"></button>
				<input type="submit" name="Add" value="Submit" class="form__btn">
			</div>
			<div class="form--message"></div>
		</form>
	</section>

<footer></footer>
    
</body>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script  src="./script Event.js"></script>
<script  src="./scriptInputNextPrevious.js"></script>

</html>
