<?php
include "../Controller/ChauffeurC.php";

//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDLIVRAISON/Controller/ChauffeurC.php';

$ChauffeurC = new ChauffeurC();
$list = $ChauffeurC->listChauffeur();
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
			<li><a href="#" class="active">Chauffeur</a></li>
			<li><a href="#">Facture</a></li>
		</ul>
	  </nav>
	  <div class="overlay"></div>

	  <!--! Table or list ============================================== -->
	<section class="List">
		<div class="Tablelist">
			<table class="tableview">
				<tr class="TitleTab">
					<th class="styleth">Id Chauffeur</th>
					<th class="styleth">Nom Chauffeur</th>
					<th class="styleth">Prenom Chauffeur</th>
					<th class="styleth">Tel Chauffeur</th>
					<th class="styleth">Email Chauffeur</th>
					<th class="styleth">Vehicule Chauffeur</th>
					<th><a class="toggle-edit"><i class="edit-del-icon uil uil-edit"></i></a></th>
					<th><a class="toggle-add"><i class="edit-del-icon uil uil-book-medical"></i></a></th>
				</tr>
				<?php
        foreach ($list as $Chauffeur) 
        {
        ?>
					<tr>
                        <td class="styleth"><?= $Chauffeur['Id_Ch']; ?></td>
                        <td class="styleth"><?= $Chauffeur['Nom']; ?></td>
                        <td class="styleth"><?= $Chauffeur['Prenom']; ?></td>
                        <td class="styleth"><?= $Chauffeur['Tel']; ?></td>
                        <td class="styleth"><?= $Chauffeur['Email']; ?></td>
                        <td class="styleth"><?= $Chauffeur['Vehicule']; ?></td>
						<td>
							<a href="deleteChauffeur.php?Id_Ch=<?php echo $Chauffeur['Id_Ch']; ?>"><i class="edit-del-icon uil uil-trash-alt"></i></a>
						</td>
					</tr>
                    <?php
        }
        ?>	
			</table>
		</div>
		<div class="InputlistAdd slide-in-right">

			<form  class="form-group" method="POST" action="addChauffeur.php">
				
				<ul>
					<li>
						<h3> Ajouter</h3>
					</li>
					<li>
						<input type="text" name="noma" class="form-style" placeholder="Nom" id="noma" autocomplete="off">
						<i class="input-icon uil uil-box"></i>
					</li>
					<li>
						<input type="text" name="prenoma" class="form-style" placeholder="Prenom" id="prenoma" autocomplete="off">
						<i class="input-icon uil uil-usd-circle"></i>
					</li>
					<li>
						<input type="number" name="tela" class="form-style" placeholder="Tel" id="tela" autocomplete="off">
						<i class="input-icon uil uil-tag"></i>
					</li>
					<li>
						<input type="email" name="emaila" class="form-style" placeholder="Email" id="emaila" autocomplete="off">
						<i class="input-icon uil uil-home"></i>
					</li>
					<li>
						<input type="text" name="vehiculea" class="form-style" placeholder="Vehicule" id="vehiculea" autocomplete="off">
						<i class="input-icon uil uil-user"></i>
					</li>
				</ul>
				<input type="submit" name="Add" value="Submit" class="btn mt-4">
			</form>

		</div>
		<div class="InputlistEdit slide-out-right">

			<form  class="form-group" method="POST" action="updateChauffeur.php">
				
				<ul>
					<li>
						<h3>Modifier</h3>
					</li>
					<li>
						<input type="number" name="Id_Chu" class="form-style" placeholder="Id du chauffeur a modifier" id="Id_Chu" autocomplete="off">
						<i class="input-icon uil uil-parcel"></i>
					</li>
					<li>
						<input type="text" name="nomu" class="form-style" placeholder="Nom" id="nomu" autocomplete="off">
						<i class="input-icon uil uil-box"></i>
					</li>
					<li>
						<input type="text" name="prenomu" class="form-style" placeholder="Prenom" id="prenomu" autocomplete="off">
						<i class="input-icon uil uil-usd-circle"></i>
					</li>
					<li>
						<input type="number" name="telu" class="form-style" placeholder="Tel" id="telu" autocomplete="off">
						<i class="input-icon uil uil-tag"></i>
					</li>
					<li>
						<input type="email" name="emailu" class="form-style" placeholder="Email" id="emailu" autocomplete="off">
						<i class="input-icon uil uil-home"></i>
					</li>
					<li>
						<input type="text" name="vehiculeu" class="form-style" placeholder="Vehicule" id="vehiculeu" autocomplete="off">
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
<script  src="./scriptdashboard.js"></script>
</html>
