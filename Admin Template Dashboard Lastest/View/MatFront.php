<?php
include_once '../Controller/MatC.php';


$Matc = new MaterielC();
$listFoot = $Matc->listMattype("FootBall");
$listBasket = $Matc->listMattype("BasketBall");
$listTennis = $Matc->listMattype("Tennis");
$listDessin = $Matc->listMattype("Dessin");
$listTheatre = $Matc->listMattype("Théatre");




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
                
                <li><a href="#" class="active">Clubs</a></li>
                <li><a href="#" >Evenement</a></li>
                <li><a href="#">Reclamation</a></li>
				<li><a href="#">Magasin</a></li>
                <li><a href="#">Dashboard</a></li>
				
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
		  	<li><h3 href="#" >Type de materiel</h3></li>
		  	<li><a href="#Football" class="active">Football</a></li>
		  	<li><a href="#BasketBall">BasketBall</a></li>
		  	<li><a href="#Tennis">Tennis</a></li>
		  	<li><a href="#Dessin">Dessin</a></li>
		  	<li><a href="#Théatre">Théatre</a></li>
				<li><a href="ClubFront.php" >Voir la liste des Clubs</a></li>
		</ul>
	  </nav>

	  <div class="overlay"></div>

	  <!--! Liste Club par Type ============================================== -->
		
		<form action="" method="">
	<section class="List">
		<ul class="Tablelist">
			<li class="Type Type1">
				<h1 class="Title_Types"> Football </h1>
				<ul class="UnType">
					
				<?php
				foreach ($listFoot as $Mat) 
        		{

        		?>
					<li class="UnEvent">
						 <class="UnEvent">
					
						<button class="card_event" data-id="<?= $Mat['id_M']; ?>">
							<div class="card_event_contenu">
								<div class="card_frontinfo">
									<img id="im"src="uploadsC/<?= basename($Mat['image']) ?>" alt="<?= $Mat['nom_M'] ?>" class="img_event"  width="80">
									
								</div>
								<div class="card_backinfo">
									
									<h1 class="NomEvent"><?= $Mat['nom_M']; ?></h1>
									<h2 class="PrixEvent"><?= $Mat['nom_cl']; ?></h2>
									
								</div>
							</div>
						</button>
					</li>
				<?php
       			}
        		?>	
				</ul>
			</li>
			<li class="Type Type1">
				<h1 class="Title_Types"> BasketBall</h1>
				<ul class="UnType">
				<?php
				foreach ($listBasket as $Mat) 
        		{
        		?>
					<li class="UnEvent">
						 <class="UnEvent">
					
						<button class="card_event" data-id="<?= $Mat['id_M']; ?>">
							<div class="card_event_contenu">
								<div class="card_frontinfo">
									<img id="im"src="uploadsC/<?= basename($Mat['image']) ?>" alt="<?= $Mat['nom_M'] ?>" class="img_event"  width="80">
									
								</div>
								<div class="card_backinfo">
									
									<h1 class="NomEvent"><?= $Mat['nom_M']; ?></h1>
									<h2 class="PrixEvent"><?= $Mat['nom_cl']; ?></h2>
									
								</div>
							</div>
						</button>
					</li>
				<?php
       			}
        		?>	
				</ul>
			</li>
			<li class="Type Type1">
				<h1 class="Title_Types"> Tennis </h1>
				<ul class="UnType">
				<?php
				foreach ($listTennis as $Mat) 
        		{
        		?>
					<li class="UnEvent">
						 <class="UnEvent">
					
						<button class="card_event" data-id="<?= $Mat['id_M']; ?>">
							<div class="card_event_contenu">
								<div class="card_frontinfo">
									<img id="im"src="uploadsC/<?= basename($Mat['image']) ?>" alt="<?= $Mat['nom_M'] ?>" class="img_event"  width="80">
									
								</div>
								<div class="card_backinfo">
									
									<h1 class="NomEvent"><?= $Mat['nom_M']; ?></h1>
									<h2 class="PrixEvent"><?= $Mat['nom_cl']; ?></h2>
									
								</div>
							</div>
						</button>
					</li>
				<?php
       			}
        		?>	
				</ul>
			</li>
			<li class="Type Type1">
				<h1 class="Title_Types"> Dessin </h1>
				<ul class="UnType">
				<?php
				foreach ($listDessin as $Mat) 
        		{
        		?>
					<li class="UnEvent">
						 <class="UnEvent">
					
						<button class="card_event" data-id="<?= $Mat['id_M']; ?>">
							<div class="card_event_contenu">
								<div class="card_frontinfo">
									<img id="im"src="uploadsC/<?= basename($Mat['image']) ?>" alt="<?= $Mat['nom_M'] ?>" class="img_event"  width="80">
									
								</div>
								<div class="card_backinfo">
									
									<h1 class="NomEvent"><?= $Mat['nom_M']; ?></h1>
									<h2 class="PrixEvent"><?= $Mat['nom_cl']; ?></h2>
									
								</div>
							</div>
						</button>
					</li>
				<?php
       			}
        		?>	
				</ul>
			</li>
			<li class="Type Type1">
				<h1 class="Title_Types"> Theatre</h1>
				<ul class="UnType">
				<?php
				foreach ($listTheatre as $Mat) 
        		{
        		?>
					<li class="UnEvent">
						 <class="UnEvent">
					
						<button class="card_event" data-id="<?= $Mat['id_M']; ?>">
							<div class="card_event_contenu">
								<div class="card_frontinfo">
									<img id="im"src="uploadsC/<?= basename($Mat['image']) ?>" alt="<?= $Mat['nom_M'] ?>" class="img_event"  width="80">
									
								</div>
								<div class="card_backinfo">
									
									<h1 class="NomEvent"><?= $Mat['nom_M']; ?></h1>
									<h2 class="PrixEvent"><?= $Mat['nom_cl']; ?></h2>
									
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
			</li>
		</ul>
		
	</section>
	</form>

		

<footer></footer>
    
		</body>
		
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
		<script  src="./script Event.js"></script>
		<script  src="./scriptInputNextPrevious.js"></script>
		</html>
		
</html>
