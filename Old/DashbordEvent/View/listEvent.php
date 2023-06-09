<?php
include 'D:/xampp/htdocs/Culturna/perso/DASHBORDEVENT/Controller/EventC.php';
$EventC = new EventC();
$list = $EventC->listEvent();
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> Culturna </title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
  <link rel="stylesheet" href="../View/styledashboard.css">

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
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Clubs</a></li>
                <li><a href="#">Evenement</a></li>
                <li><a href="#">Reclamation</a></li>
				<li><a href="#">Magasin</a></li>
                <li><a href="#" class="active">Dashboard</a></li>
                <li><a href="#" class="toggle-login">Profile</a></li>
            </ul>
        </div>
    </header>




	


	<!--! Burger Menu or Sidebar ============================================== -->

	<div class="burger">
		<span></span>
	  </div>
	  
	  <nav class="navadmin">
		<ul class="main">
		  	<li><h3 href="#">Liste de:</h3></li>
		  	<li><a href="#">Admin</a></li>
		  	<li><a href="#">Clinet</a></li>
		  	<li><a href="#">Reclamation</a></li>
		  	<li><a href="#">Avis</a></li>
		  	<li><a href="#">Evenement</a></li>
		  	<li><a href="#">Reservation</a></li>
		  	<li><a href="#">Club</a></li>
		  	<li><a href="#">Entraineur</a></li>
		  	<li><a href="#">Produit</a></li>
		  	<li><a href="#">Panier</a></li>
			<li><a href="#">Chauffeur</a></li>
			<li><a href="#" class="active">Event</a></li>
			<li><a href="#">Facture</a></li>
		</ul>
	  </nav>
	  <div class="overlay"></div>

	  <!--! Table or list ============================================== -->
	<section class="List">
		<div class="Tablelist">
			<table class="tableview">
				<tr class="TitleTab">
					<th class="styleth">Id Event</th>
					<th class="styleth">Name</th>
					<th class="styleth">Type</th>
					<th class="styleth">Time</th>
					<th class="styleth">Date</th>
					<th class="styleth">Prix</th>
					<th class="styleth">Image</th>
					<th><a class="toggle-edit"><i class="edit-del-icon uil uil-edit"></i></a></th>
					<th><a class="toggle-add"><i class="edit-del-icon uil uil-book-medical"></i></a></th>
				</tr>
				<?php
        foreach ($list as $Event) 
        {
        ?>
					<tr>
                        <td class="styleth"><?= $Event['idEvent']; ?></td>
                        <td class="styleth"><?= $Event['name']; ?></td>
                        <td class="styleth"><?= $Event['type']; ?></td>
                        <td class="styleth"><?= $Event['time']; ?></td>
                        <td class="styleth"><?= $Event['date']; ?></td>
                        <td class="styleth"><?= $Event['prix']; ?></td>
                        <td class="styleth"><?= $Event['image']; ?></td>
						<td>
							
							<!--<form method="POST" action="updateEvent.php">
							<a href="updateEvent.php?idEvent="><i class="edit-del-icon uil uil-edit"></i></a>
							</form>-->
						</td>
						<td>
							<a href="deleteEvent.php?idEvent=<?php echo $Event['idEvent']; ?>"><i class="edit-del-icon uil uil-trash-alt"></i></a>
						</td>
					</tr>
                    <?php
        }
        ?>	
			</table>
		</div>
		<div class="InputlistAdd slide-in-right">

			<form  class="form-group" method="POST" action="addEvent.php">
				
				<ul>
					<li>
						<h3> Ajouter</h3>
					</li>
					<!-- i>
						<input type="text" name="idla" class="form-style" placeholder="Id de la Event" id="idla" autocomplete="off">
						<i class="input-icon uil uil-parcel"></i>
					</li>  -->
					<li>
						<input type="text" name="namea" class="form-style" placeholder="Nom" id="namea" autocomplete="off">
						<i class="input-icon uil uil-clipboard"></i>
					</li>
					<li>
						<input type="text" name="typea" class="form-style" placeholder="Type" id="typea" autocomplete="off">
						<i class="input-icon uil uil-file-landscape"></i>
					</li>
					<li>
						<input type="time" name="timea" class="form-style" placeholder="Time" id="timea" autocomplete="off">
						<i class="input-icon uil uil-clock"></i>
					</li>
					<li>
						<input type="date" name="datea" class="form-style" placeholder="Date" id="datea" autocomplete="off">
						<i class="input-icon uil uil-calendar-alt"></i>
					</li>
					<li>
						<input type="number" name="prixa" class="form-style" placeholder="Prix" id="prixa" autocomplete="off">
						<i class="input-icon uil uil-usd-circle"></i>
					</li>
					<li>
						<input type="file" name="imagea" class="form-style" placeholder="Image" id="imagea" autocomplete="off">
						<i class="input-icon uil uil-image"></i>
					</li>
				</ul>
				<input type="submit" name="Add" value="Submit" class="btn mt-4">
			</form>

		</div>
		<div class="InputlistEdit slide-out-right">

			<form  class="form-group" method="POST" action="updateEvent.php">
				
				<ul>
					<li>
						<h3>Modifier</h3>
					</li>
					<li>
						<input type="number" name="idEvent" class="form-style" placeholder="id Event a Modifier" id="idEvent" autocomplete="off">
						<i class="input-icon uil uil-dialpad-alt"></i>
					</li>
					<li>
						<input type="text" name="nameu" class="form-style" placeholder="Nom" id="nameu" autocomplete="off">
						<i class="input-icon uil uil-clipboard"></i>
					</li>
					<li>
						<input type="text" name="typeu" class="form-style" placeholder="Type" id="typeu" autocomplete="off">
						<i class="input-icon uil uil-file-landscape"></i>
					</li>
					<li>
						<input type="time" name="timeu" class="form-style" placeholder="Time" id="timeu" autocomplete="off">
						<i class="input-icon uil uil-clock"></i>
					</li>
					<li>
						<input type="date" name="dateu" class="form-style" placeholder="Date" id="dateu" autocomplete="off">
						<i class="input-icon uil uil-calendar-alt"></i>
					</li>
					<li>
						<input type="number" name="prixu" class="form-style" placeholder="Prix" id="prixu" autocomplete="off">
						<i class="input-icon uil uil-usd-circle"></i>
					</li>
					<li>
						<input type="file" name="imageu" class="form-style" placeholder="Image" id="imageu" autocomplete="off">
						<i class="input-icon uil uil-image"></i>
					</li>
				</ul>
				<input type="submit" name="Update" value="Submit" class="btn mt-4">
			</form>

		</div>
	</section>

	<!--! Scroll back to top ================================================== -->
	<div class="scroll-to-top"></div>

    
</body>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script  src="./scriptdashboard.js"></script>
</html>
