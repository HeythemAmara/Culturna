<?php
include '../Controller/TransportC.php';
include '../Controller/ChauffeurC.php';
include "../Controller/UtilisateurC.php";


$valeur_id = $_GET['val_id'];
$UtilisateurC = new UtilisateurC();
$Username= $UtilisateurC->nomUtilisateur($valeur_id);
$test=0;

$ReservationC = new TransportC();
$list = $ReservationC->listTransportpourclient($valeur_id);

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
                <li><a href="#"><?php echo "<a href='Page_Reservation.php?val_id=" . $valeur_id ."'>Reserveation</a>"; ?></li>
                <li><a href="#" class="active">Transport</a></li>
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
		  	<li><a href="#"class="active">Transport</a></li>
		  	<li><a href="#">Evenement</a></li>
		  	<li><a href="#">Reservation</a></li>
		  	<li><a href="#">Club</a></li>
		  	<li><a href="#">Entraineur</a></li>
		  	<li><a href="#">Produit</a></li>
		  	<li><a href="#">Panier</a></li>
			<li><a href="#">Chauffeur</a></li>
			<li><a href="#">Reservation</a></li>
			<li><a href="#">Facture</a></li>
		</ul>
	  </nav>
	  <div class="overlay"></div>

	  <!--! Table or list ============================================== -->
	<section class="List">
		<div class="Tablelist">
			<table class="tableview tableau1">
				<tr class="TitleTab">
					<th class="styleth">Type</th>
					<th class="styleth">Nbr Personne</th>
					<th class="styleth">Date</th>
					<th class="styleth">Adresse</th>
                    <th class="styleth">Nom</th>
					<th class="styleth">Tel</th>
					<th class="styleth">Message</th>
					<th class="styleth">Action</th>
				</tr>
				<?php
        foreach ($list as $Transport) 
        {
        ?>
					<tr>
                        <td class="styleth"><?= $Transport['Type']; ?></td>
                        <td class="styleth"><?= $Transport['Nbr_Pers']; ?></td>
                        <td class="styleth"><?= $Transport['Date']; ?></td>
                        <td class="styleth"><?= $Transport['Adresse']; ?></td>
                        <td class="styleth"><?= $Transport['Nom']; ?></td>
                        <td class="styleth"><?= $Transport['Tel']; ?></td>
                        <td class="styleth"><?= $Transport['Message']; ?></td>
						<td class="styleth">
							<a class="toggle-edit" onclick="
                                    editTranspFront(
                                      '<?=$Transport['Id_T']; ?>',
                                      '<?= $Transport['Type']; ?>',
                                      '<?= $Transport['Nbr_Pers']; ?>',
                                      '<?= $Transport['Date']; ?>',
                                      '<?= $Transport['Adresse']; ?>',
									  '<?= $Transport['Nom']; ?>',
                                      '<?= $Transport['Tel']; ?>',
									  '<?= $Transport['Message']; ?>'
                                    )">
                                  <i class="edit-del-icon uil uil-edit"></i>
                                    </a>
						
							<?php $test=$Transport['Id_T'];
							echo "<a href='FunctiondeleteTransp.php?val_id=" . $valeur_id ."&Id_T=".$test."'><i class='edit-del-icon uil uil-trash-alt'></i></a>"; ?>
						
						<a href="./assets/PDF/PDF_Transport.php?Id_T=<?php echo $Transport['Id_T']; ?>
                              &Type=<?php echo $Transport['Type']; ?>
                              &Nbr_Pers=<?php echo $Transport['Nbr_Pers']; ?>
                              &Date=<?php echo $Transport['Date']; ?>
                              &Adresse=<?php echo $Transport['Adresse']; ?>
                              &Nom=<?php echo $Transport['Nom']; ?>
							  &Tel=<?php echo $Transport['Tel']; ?>
							  &Message=<?php echo $Transport['Message']; ?>
                              &val_id=<?= $valeur_id; ?>"><i class="edit-del-icon uil uil-file-download-alt"></i></a>
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

			<form  class="form-group" method="POST" action="FunctionUpdateTransp.php"  onsubmit="return validateFormModifTransportUser();" >
			<input type="hidden" value="<?= $valeur_id; ?>"  name="idclienta" id="idclienta">
			<input type="hidden" name="Id_Tut" class="form-style" placeholder="Id du Transport a modifier" id="Id_Tut" >
				<ul>
					<li>
						<h3>Edit Transport</h3>
					</li>
					<li>
						<input type="text" name="Typeut" class="form-style" placeholder="Type" id="Typeut" >
						<i class="input-icon uil uil-tag"></i>
					</li>
					<li>
						<input type="number" name="Nbr_Persut" class="form-style" placeholder="NombrePersonne" id="Nbr_Persut" >
						<i class="input-icon uil uil-home"></i>
					</li>
					<li>
						<input type="date" name="Dateut" class="form-style" placeholder="Date" id="Dateut" >
						<i class="input-icon uil uil-user"></i>
					</li>
					<li>
						<input type="text" name="adresseut" class="form-style" placeholder="Adresse" id="adresseut" >
						<i class="input-icon uil uil-user"></i>
					</li>
					<li>
						<input type="text" name="nameut" class="form-style" placeholder="Name" id="nameut" >
						<i class="input-icon uil uil-user"></i>
					</li>
					<li>
						<input type="text" name="numut" class="form-style" placeholder="Phone" id="numut" >
						<i class="input-icon uil uil-user"></i>
					</li>
					<li>
						<input type="text" name="Noteut" class="form-style" placeholder="Note for the driver" id="Noteut" >
						<i class="input-icon uil uil-user"></i>
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