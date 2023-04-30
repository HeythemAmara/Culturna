<?php
include "../Controller/ReservationC.php";
include "../Controller/EventC.php";
include "../Controller/UtilisateurC.php";


$valeur_id = $_GET['val_id'];
$UtilisateurC = new UtilisateurC();
$Username= $UtilisateurC->nomUtilisateur($valeur_id);
$test=0;

$ReservationC = new ReservationC();
$list = $ReservationC->listReservationpourclient($valeur_id);

$EventC = new EventC();


?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> Culturna </title>
  <link rel="icon" type="image/png" href="./assets Dashboard/img Dashboard/favicon.png">
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
                <li><a href="#" class="active">Reservation</a></li>
				<li><?php echo "<a href='Page_Transport.php?val_id=" . $valeur_id ."'>Transport</a>"; ?></li>
                <?php
        		foreach ($Username as $User) 
        		{
        		?>
						<li>
							<?php echo "<a href='Page_Profile.php?val_id=" . $valeur_id ."&creationreserv=".$test."'>".$User['Username']."</a>"; ?>
						</li>
						<?php
				}
        		?>
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
			<table class="tableview tableau1">
				<tr class="TitleTab">
				  <th class="styleth">Event Name</th>
					<th class="styleth">Name</th>
					<th class="styleth">Email</th>
					<th class="styleth">nbrPlaces</th>
					<th class="styleth">Num</th>
				</tr>
				<?php
        foreach ($list as $Reservation) 
        {
			$nameEvent = $EventC->DateEvent($Reservation['idEvent']);
			 foreach ($nameEvent as $Event) {$idevent= $Event['name'];}  
        ?>
					<tr>
					    <td class="styleth"><?= $idevent; ?></td>	 
                        <td class="styleth"><?= $Reservation['name']; ?></td>
                        <td class="styleth"><?= $Reservation['email']; ?></td>
                        <td class="styleth"><?= $Reservation['nbrPlace']; ?></td>
                        <td class="styleth"><?= $Reservation['num']; ?></td>
						<td>
							<a class="toggle-edit" onclick="
                                    editReservFront(
                                      '<?=$Reservation['idReserv']; ?>',
                                      '<?= $Reservation['name']; ?>',
                                      '<?= $Reservation['email']; ?>',
                                      '<?= $Reservation['nbrPlace']; ?>',
                                      '<?= $Reservation['num']; ?>'
                                    )">
                                  <i class="edit-del-icon uil uil-edit"></i>
                                    </a>
						</td>
						<td>
							<?php $test=$Reservation['idReserv'];
							echo "<a href='FunctiondeleteRerser.php?val_id=" . $valeur_id ."&idReserv=".$test."'><i class='edit-del-icon uil uil-trash-alt'></i></a>"; ?>
						</td>
					</tr>
                    <?php
        }
        ?>	
			</table>
			<button class="uil uil-step-backward" id= "bouton-precedent1"disabled></button>
            <button class="uil uil-skip-forward" id="bouton-suivant1"></button>
		</div>
		<div class="InputlistEdit">

		<form class="form-group" method="POST" action="FunctionUpdateReserv.php" onsubmit="return validateFormModifReservUser();">
		<input type="hidden" value="<?= $valeur_id; ?>" name="idclienta" id="idclienta">
            <input type="hidden" name="idReservu" class="form-style" placeholder="id Reservation a Modifier" id="idReservu" autocomplete="off">
		<ul>
        <li>
            <h3>Edit Reservation</h3>
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
    </ul>
    <input type="submit" name="Update" value="Submit" class="btn mt-4">
</form>

		</div>
	</section>

	<!--! Scroll back to top ================================================== -->
	<div class="scroll-to-top"></div>

    
</body>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script  src="./assets/JS/scriptdashboard.js"></script>
<script src="./assets/JS/InputControlFront.js"></script>
<script src="./assets Dashboard/js Dashboard/Input-Variables.js"></script>
<script src="./assets/JS/pagination.js"></script>



</html>