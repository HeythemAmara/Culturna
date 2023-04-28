<?php
include_once '../Controller/ClubC.php';


$ClubC = new ClubC();
$listFoot = $ClubC->listClubtype("FootBall");
$listBasket = $ClubC->listClubtype("BasketBall");
$listTennis = $ClubC->listClubtype("Tennis");
$listDessin = $ClubC->listClubtype("Dessin");
$listTheatre = $ClubC->listClubtype("Théatre");




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
		  	<li><h3 href="#" >Type des Clubs:</h3></li>
		  	<li><a href="#" class="active">Football</a></li>
		  	<li><a href="#">BasketBall</a></li>
		  	<li><a href="#">Tennis</a></li>
		  	<li><a href="#">Dessin</a></li>
		  	<li><a href="#">Théatre</a></li>
				<li><a href="MatFront.php" >Voir la liste des materiels</h4></li>
		</ul>
	  </nav>

	  <div class="overlay"></div>

	  <!--! Liste Club par Type ============================================== -->
		
		
	<section class="List">
		<ul class="Tablelist">
			<li class="Type Type1">
				<h1 class="Title_Types"> Football </h1>
				<ul class="UnType">
					
				<?php
				foreach ($listFoot as $Club) 
        		{

        		?>
					<li class="UnEvent">
						
					
						<button class="card_event" data-id="<?= $Club['id_Club']; ?>">
							<div class="card_event_contenu">
								<div class="card_frontinfo">
								<!--<a href="getClubMateriels.php?id_Club=<?//php// echo $Club['id_Club']; ?>">-->
								
									<img id="im"src="uploadsC/<?= basename($Club['image']) ?>" alt="<?= $Club['nom_C'] ?>" class="img_event" onclick="afficherMateriels(<?= $Club['id_Club']; ?>)" width="80">
									
								</div>
							
								<div class="card_backinfo">
									
									<h1 class="NomEvent"><?= $Club['nom_C']; ?></h1>
									<h2 class="PrixEvent"><?= $Club['mailC']; ?></h2>
									
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
				foreach ($listBasket as $Club) 
        		{
        		?>
					<li class="UnEvent">
						
					<button class="card_event" data-id="<?= $Club['id_Club']; ?>">
							<div class="card_event_contenu">
								<div class="card_frontinfo">
								<?php $clubId = $Club['id_Club']; ?> <!-- Generate user ID with PHP -->
								<img src="uploadsC/<?= basename($Club['image']) ?>" alt="<?= $Club['nom_C'] ?>" class="img_event" width="80">
								
</div>
								<div class="card_backinfo">
									
									<h1 class="NomEvent"><?= $Club['nom_C']; ?></h1>
									<h2 class="PrixEvent"><?= $Club['mailC']; ?></h2>
									
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
				foreach ($listTennis as $Club) 
        		{
        		?>
					<li class="UnEvent">
						
					<button class="card_event" data-id="<?= $Club['id_Club']; ?>">
							<div class="card_event_contenu">
								<div class="card_frontinfo">
								<img src="uploadsC/<?= basename($Club['image']) ?>" alt="<?= $Club['nom_C'] ?>" class="img_event" width="80">
								</div>
								<div class="card_backinfo">
									
									<h1 class="NomEvent"><?= $Club['nom_C']; ?></h1>
									<h2 class="PrixEvent"><?= $Club['mailC']; ?></h2>
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
				foreach ($listDessin as $Club) 
        		{
        		?>
					<li class="UnEvent">
					
					<button class="card_event" data-id="<?= $Club['id_Club']; ?>">
							<div class="card_event_contenu">
								<div class="card_frontinfo">
								<img src="uploadsC/<?= basename($Club['image']) ?>" alt="<?= $Club['nom_C'] ?>" class="img_event" width="80">
								</div>
								<div class="card_backinfo">
									
									<h1 class="NomEvent"><?= $Club['nom_C']; ?></h1>
									<h2 class="PrixEvent"><?= $Club['mailC']; ?></h2>
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
				foreach ($listTheatre as $Club) 
        		{
        		?>
					<li class="UnEvent">
						
					<button class="card_event" data-id="<?= $Club['id_Club']; ?>">
							<div class="card_event_contenu">
								<div class="card_frontinfo">
								<img src="uploadsC/<?= basename($Club['image']) ?>" alt="<?= $Club['nom_C'] ?>" class="img_event" width="80">
								</div>
								<div class="card_backinfo">
									
									<h1 class="NomEvent"><?= $Club['nom_C']; ?></h1>
									<h2 class="PrixEvent"><?= $Club['mailC']; ?></h2>
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
	
<script>
      <!/*function goToPage(clubId) {
        window.location.href = "path/to/page.php?clubId=" + clubId;
      }*/
    </script>
		<footer></footer>
    
		</body>
		
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
		<script  src="./script Event.js"></script>
		<script  src="./scriptInputNextPrevious.js"></script>
		</html>
		
</html>
