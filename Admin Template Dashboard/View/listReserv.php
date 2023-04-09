
<?php
//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDEVENT/Controller/ReservationC.php';
include '../Controller/ReservationC.php';

$ReservationC = new ReservationC();
$list = $ReservationC->listReservation();
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
			<li><a href="#" class="active">Reservation</a></li>
			<li><a href="#">Facture</a></li>
		</ul>
	  </nav>
	  <div class="overlay"></div>

	  <!--! Table or list ============================================== -->
	<section class="List">
		<div class="Tablelist">
			<table class="tableview">
				<tr class="TitleTab">
					<th class="styleth">Id Reservation</th>
					<th class="styleth">Id Event</th>
					<th class="styleth">Name</th>
					<th class="styleth">Email</th>
					<th class="styleth">nbrPlaces</th>
					<th class="styleth">Num</th>
					<th class="styleth">Id Client</th>

					<th><a class="toggle-edit"><i class="edit-del-icon uil uil-edit"></i></a></th>
					<th><a class="toggle-add"><i class="edit-del-icon uil uil-book-medical"></i></a></th>
				</tr>
				<?php
        foreach ($list as $Reservation) 
        {
        ?>
					<tr>
                        <td class="styleth"><?= $Reservation['idReserv']; ?></td>
                        <td class="styleth"><?= $Reservation['idEvent']; ?></td>
                        <td class="styleth"><?= $Reservation['name']; ?></td>
                        <td class="styleth"><?= $Reservation['email']; ?></td>
                        <td class="styleth"><?= $Reservation['nbrPlace']; ?></td>
                        <td class="styleth"><?= $Reservation['num']; ?></td>
						<td class="styleth"><?= $Reservation['idClient']; ?></td>

						<td>
						</td>
						<td>
							<a href="deleteReserv.php?idReserv=<?php echo $Reservation['idReserv']; ?>"><i class="edit-del-icon uil uil-trash-alt"></i></a>
						</td>
					</tr>
                    <?php
        }
        ?>	
			</table>
		</div>
		<div class="InputlistAdd slide-in-right">

			<form  class="form-group" method="POST" action="addReserv.php">
				
				<ul>
					<li>
						<h3> Ajouter</h3>
					</li>
					 <i>
						<input type="text" name="idEventa" class="form-style" placeholder="IdEvent" id="idEventa" autocomplete="off">
						<i class="input-icon uil uil-dialpad-alt"></i>
					</li>  
					<li>
						<input type="text" name="namea" class="form-style" placeholder="Nom" id="namea" autocomplete="off">
						<i class="input-icon uil uil-clipboard"></i>
					</li>
					<li>
						<input type="email" name="emaila" class="form-style" placeholder="Email" id="emaila" autocomplete="off">
						<i class="input-icon uil uil-at"></i>
					</li>
					<li>
						<input type="number" name="nbrPlacea" class="form-style" placeholder="NombrePlaces" id="nbrPlacea" autocomplete="off">
						<i class="input-icon uil uil-users-alt"></i>
					</li>
					<li>
						<input type="number" name="numa" class="form-style" placeholder="Numéro" id="numa" autocomplete="off">
						<i class="input-icon uil uil-phone"></i>
					</li>
					<li>
						<input type="number" name="idClienta" class="form-style" placeholder="IdClient" id="idClienta" autocomplete="off">
						<i class="input-icon uil uil-dialpad-alt"></i>
					</li>
			
				</ul>
				<input type="submit" name="Add" value="Submit" class="btn mt-4">
			</form>

		</div>
		<div class="InputlistEdit slide-out-right">

			<form  class="form-group" method="POST" action="updateReserv.php">
				
				<ul>
					<li>
						<h3>Modifier</h3>
					</li>
					<li>
						<input type="number" name="idReservu" class="form-style" placeholder="id Reservation a Modifier" id="idReservu" autocomplete="off">
						<i class="input-icon uil uil-dialpad-alt"></i>
					</li>
					<li>
						<input type="number" name="idEventu" class="form-style" placeholder="idEvent" id="idEventu" autocomplete="off">
						<i class="input-icon uil uil-dialpad-alt"></i>
					</li>
					<li>
						<input type="text" name="nameu" class="form-style" placeholder="Nom" id="nameu" autocomplete="off">
						<i class="input-icon uil uil-clipboard"></i>
					</li>
					<li>
						<input type="email" name="emailu" class="form-style" placeholder="Email" id="emailu" autocomplete="off">
						<i class="input-icon uil uil-at"></i>
					</li>
					<li>
						<input type="number" name="nbrPlaceu" class="form-style" placeholder="NombrePlaces" id="nbrPlaceu" autocomplete="off">
						<i class="input-icon uil uil-users-alt"></i>
					</li>
					<li>
						<input type="number" name="numu" class="form-style" placeholder="Numéro" id="numu" autocomplete="off">
						<i class="input-icon uil uil-phone"></i>
					</li>
					<li>
						<input type="number" name="idClientu" class="form-style" placeholder="IdClient" id="idClientu" autocomplete="off">
						<i class="input-icon uil uil-dialpad-alt"></i>
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
