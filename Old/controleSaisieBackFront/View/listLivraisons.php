<?php
include "../Controller/LivraisonC.php";
$LivraisonC = new LivraisonC();
$list = $LivraisonC->listLivraison();
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
			<li><a href="#" class="active">Livraison</a></li>
			<li><a href="#">Facture</a></li>
		</ul>
	  </nav>
	  <div class="overlay"></div>

	  <!--! Table or list ============================================== -->
	<section class="List">
		<div class="Tablelist">
			<table class="tableview">
				<tr class="TitleTab">
					<th class="styleth">Id Livraison</th>
					<th class="styleth">Nom Colis</th>
					<th class="styleth">Frais</th>
					<th class="styleth">Type</th>
					<th class="styleth">Adresse</th>
					<th class="styleth">Id Client</th>
					<th class="styleth">Id Chauffeur</th>
					<th><a class="toggle-edit"><i class="edit-del-icon uil uil-edit"></i></a></th>
					<th><a class="toggle-add"><i class="edit-del-icon uil uil-book-medical"></i></a></th>
				</tr>
				<?php
        foreach ($list as $livraison) 
        {
        ?>
					<tr>
                        <td class="styleth"><?= $livraison['Id_L']; ?></td>
                        <td class="styleth"><?= $livraison['Nom_Colis']; ?></td>
                        <td class="styleth"><?= $livraison['Frais_Livraison']; ?></td>
                        <td class="styleth"><?= $livraison['Type_Colis']; ?></td>
                        <td class="styleth"><?= $livraison['Adresse_Client']; ?></td>
                        <td class="styleth"><?= $livraison['Id_Client']; ?></td>
                        <td class="styleth"><?= $livraison['Id_Ch']; ?></td>
						<td>
							
							<!--<form method="POST" action="updateLivraison.php">
							<a href="updateLivraison.php?Id_L="><i class="edit-del-icon uil uil-edit"></i></a>
							</form>-->
						</td>
						<td>
							<a href="deleteLivraison.php?Id_L=<?php echo $livraison['Id_L']; ?>"><i class="edit-del-icon uil uil-trash-alt"></i></a>
						</td>
					</tr>
                    <?php
        }
        ?>	
			</table>
		</div>
		<div class="InputlistAdd slide-in-right">

			<form  class="form-group" method="POST" action="addLivraison.php">
				
				<ul>
					<li>
						<h3> Ajouter</h3>
					</li>
					<li>
						<input type="text" name="idla" class="form-style" placeholder="Id de la Livraison" id="idla" autocomplete="off">
						<i class="input-icon uil uil-parcel"></i>
					</li>
					<li>
						<input type="text" name="noma" class="form-style" placeholder="Nom du Colis" id="noma" autocomplete="off">
						<i class="input-icon uil uil-box"></i>
					</li>
					<li>
						<input type="text" name="fraisa" class="form-style" placeholder="Frais" id="fraisa" autocomplete="off">
						<i class="input-icon uil uil-usd-circle"></i>
					</li>
					<li>
						<input type="text" name="typecolisa" class="form-style" placeholder="Type" id="typecolisa" autocomplete="off">
						<i class="input-icon uil uil-tag"></i>
					</li>
					<li>
						<input type="text" name="adressea" class="form-style" placeholder="Adresse" id="adressea" autocomplete="off">
						<i class="input-icon uil uil-home"></i>
					</li>
					<li>
						<input type="text" name="idclienta" class="form-style" placeholder="Id Client" id="idclienta" autocomplete="off">
						<i class="input-icon uil uil-user"></i>
					</li>
					<li>
						<input type="text" name="idcha" class="form-style" placeholder="Id Chauffeur" id="idcha" autocomplete="off">
						<i class="input-icon uil uil-truck"></i>
					</li>
				</ul>
				<input type="submit" name="Add" value="Submit" class="btn mt-4">
			</form>

		</div>
		<div class="InputlistEdit slide-out-right">

			<form  class="form-group" method="POST" action="updateLivraison.php">
				
				<ul>
					<li>
						<h3>Modifier</h3>
					</li>
					<li>
						<input type="text" name="idlu" class="form-style" placeholder="Id de la Livraison à Modifier" id="idlu" autocomplete="off">
						<i class="input-icon uil uil-parcel"></i>
					</li>
					<li>
						<input type="text" name="idllu" class="form-style" placeholder="Id de la Livraison" id="idllu" autocomplete="off">
						<i class="input-icon uil uil-parcel"></i>
					</li>
					<li>
						<input type="text" name="nomu" class="form-style" placeholder="Nom du Colis" id="nomu" autocomplete="off">
						<i class="input-icon uil uil-box"></i>
					</li>
					<li>
						<input type="text" name="fraisu" class="form-style" placeholder="Frais" id="fraisu" autocomplete="off">
						<i class="input-icon uil uil-usd-circle"></i>
					</li>
					<li>
						<input type="text" name="typecolisu" class="form-style" placeholder="Type" id="typecolisu" autocomplete="off">
						<i class="input-icon uil uil-tag"></i>
					</li>
					<li>
						<input type="text" name="adresseu" class="form-style" placeholder="Adresse" id="adresseu" autocomplete="off">
						<i class="input-icon uil uil-home"></i>
					</li>
					<li>
						<input type="text" name="idclientu" class="form-style" placeholder="Id Client" id="idclientu" autocomplete="off">
						<i class="input-icon uil uil-user"></i>
					</li>
					<li>
						<input type="text" name="idchu" class="form-style" placeholder="Id Chauffeur" id="idchu" autocomplete="off">
						<i class="input-icon uil uil-truck"></i>
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
