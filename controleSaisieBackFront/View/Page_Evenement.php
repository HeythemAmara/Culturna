<?php
include "../Controller/EventC.php";
include "../Controller/UtilisateurC.php";
$EventC = new EventC();

$valeur_id = $_GET['val_id'];
$resevtest = $_GET['creationreserv'];
$UtilisateurC = new UtilisateurC();
$Username= $UtilisateurC->nomUtilisateur($valeur_id);
foreach ($Username as $User) { $EmailUser = $User['Email'];}
foreach ($Username as $User) { $NameUser = $User['Username'];}


?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="./assets Dashboard/img Dashboard/favicon.png">
  <title> Culturna </title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
  <link rel="stylesheet" href="./assets/CSS/style Event.css">
  <link rel="stylesheet" href="./assets/CSS/styleEventRotation.css">
  <link rel="stylesheet" href="./assets/CSS/styleInputNextPrevious.css">

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
                <li><a href="#" class="active">Evenement</a></li>
                <li><a href="#">Reclamation</a></li>
				<li><a href="#">Magasin</a></li>
                <li><?php echo "<a href='Page_Reservation.php?val_id=" . $valeur_id ."'>Reservation</a>"; ?></li>
				<li><?php echo "<a href='Page_Transport.php?val_id=" . $valeur_id ."'>Transport</a>"; ?></li>
				<?php
        		foreach ($Username as $User) 
        		{
        		?>
						<li>
							<?php echo "<a href='Page_Profile.php?val_id=" . $valeur_id ."'>".$User['Username']."</a>"; ?>
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
			<li><a href="#Theatre" class="active">Theatre</a></li>
		  	<li><a href="#Musique">Musique</a></li> 
		  	<li><a href="#Culture">Culture</a></li>
		  	<li><a href="#Dance">Dance</a></li>
		  	<li><a href="#Art">Art</a></li>
		  	<li><a href="#Sport">Sport</a></li>
		</ul>
	  </nav>

	  <div class="overlay"></div>
	  <script>
  const navLinks = document.querySelectorAll('.navadmin a');
    
      navLinks.forEach(otherLink => {
        otherLink.classList.remove('active');
      });
      link.classList.add('active');
    
      const type = link.getAttribute('data-type');
      const eventType = document.querySelectorAll('.Type');
      eventType.forEach(type => {
        type.classList.remove('active');
      });
    

  
  </script>
	<!--!  =======================Type1=========================== -->
	<section class="List">
		<ul class="Tablelist">
			<li id="Theatre" class="Type Theatre" >
				<h1 class="Title_Types">Theatre
					</h1>
					<ul class="UnType">
						<?php
						$listtype1 = $EventC->listEventtype("Theatre",0);
						if(isset($_POST['tri1']))
							{
								$listtype1 = $EventC->listEventtype("Theatre",1);
								
							}
				
				
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
				<form method="post" action="" style=" max-height : 10px; max-width: 10px; top: 50px; left: 82%">
					<input type="submit" name="tri1" value="Trier par Date" class="form__btn2" style="width: 200px;">
				</form>
			</li>

	<!--!  =======================Type2=========================== -->

			<li id="Musique" class="Type Musique" >
				<h1 class="Title_Types">Musique
					</h1>
					<ul class="UnType">
						<?php
						$listtype2 = $EventC->listEventtype("Musique",0);
						if(isset($_POST['tri2']))
							{
								$listtype2 = $EventC->listEventtype("Musique",1);
								
							}
				
				
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
				<form method="post" action="" style=" max-height : 10px; max-width: 10px; top: 50px; left: 82%">
					<input type="submit" name="tri2" value="Trier par Date" class="form__btn2" style="width: 200px;">
				</form>
			</li>

			<!--!  =======================Type3=========================== -->

			<li id="Culture" class="Type Culture" >
				<h1 class="Title_Types">Culture
					</h1>
					<ul class="UnType">
						<?php
						$listtype3 = $EventC->listEventtype("Culture",0);
						if(isset($_POST['tri3']))
							{
								$listtype3 = $EventC->listEventtype("Culture",1);
								
							}
				
				
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
				<form method="post" action="" style=" max-height : 10px; max-width: 10px; top: 50px; left: 82%">
					<input type="submit" name="tri3" value="Trier par Date" class="form__btn2" style="width: 200px;">
				</form>
			</li>

	<!--!  =======================Type4=========================== -->

			<li id="Dance" class="Type Dance" >
				<h1 class="Title_Types">Dance
					</h1>
					<ul class="UnType">
						<?php
						$listtype4 = $EventC->listEventtype("Dance",0);
						if(isset($_POST['tri4']))
							{
								$listtype4 = $EventC->listEventtype("Dance",1);
								
							}
				
				
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
				<form method="post" action="" style=" max-height : 10px; max-width: 10px; top: 50px; left: 82%">
					<input type="submit" name="tri4" value="Trier par Date" class="form__btn2" style="width: 200px;">
				</form>
			</li>

	<!--!  =======================Type5=========================== -->

			<li id="Art" class="Type Art" >
				<h1 class="Title_Types">Art
					</h1>
					<ul class="UnType">
						<?php
						$listtype5 = $EventC->listEventtype("Art",0);
						if(isset($_POST['tri5']))
							{
								$listtype5 = $EventC->listEventtype("Art",1);
								
							}
				
				
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
				<form method="post" action="" style=" max-height : 10px; max-width: 10px; top: 50px; left: 82%">
					<input type="submit" name="tri5" value="Trier par Date" class="form__btn2" style="width: 200px;">
				</form>
			</li>

	<!--!  =======================Type6=========================== -->

			<li id="Sport" class="Type Sport" >
				<h1 class="Title_Types">Sport
					</h1>
					<ul class="UnType">
						<?php
						$listtype6 = $EventC->listEventtype("Sport",0);
						if(isset($_POST['tri6']))
							{
								$listtype6 = $EventC->listEventtype("Sport",1);
								
							}
				
				
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
				<form method="post" action="" style=" max-height : 10px; max-width: 10px; top: 50px; left: 82%">
					<input type="submit" name="tri6" value="Trier par Date" class="form__btn2" style="width: 200px;">
				</form>
			</li>
			</ul>
		
	</section>


		<!--! Input Reservation ============================================== -->


	<section class="input-visibility flip-out-hor-top out-of-screen" >
		<form  method="POST" action="FunctionCreerReserv.php"  onsubmit="return ReserUser2();"  >
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
				<input class="inputreserv" type="text" placeholder="Name" value="<?= $NameUser ?>" name="namea" id="namea"/>
				<input class="inputreserv" type="email" placeholder="Email" value="<?= $EmailUser ?>" name="emaila" id="emaila"/>
				<button class="form__btn" id="btn-1" onclick=" return ReserUser()">Next</button>
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
<script  src="./assets/JS/script Event.js"></script>
<script  src="./assets/JS/scriptInputNextPrevious.js"></script>
<script src="./assets/JS/InputControlFront.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script> 



</html>
