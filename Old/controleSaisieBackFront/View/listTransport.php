<?php
include "../Controller/TransportC.php";

//include 'D:/xampp/htdocs/Culturna/perso/DASHBORDLIVRAISON/Controller/TransportC.php';

$TransportC = new TransportC();
$list = $TransportC->listTransport();
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
			<li><a href="#">Transport</a></li>
			<li><a href="#" class="active">Transport</a></li>
			<li><a href="#">Facture</a></li>
		</ul>
	  </nav>
	  <div class="overlay"></div>

	  <!--! Table or list ============================================== -->
	<section class="List">
		<div class="Tablelist">
			<table class="tableview">
				<tr class="TitleTab">
					<th class="styleth">Id Transport</th>
					<th class="styleth">Id Client</th>
					<th class="styleth">Id Chauffeur</th>
					<th class="styleth">type</th>
					<th class="styleth">Nombre des personnes</th>
					<th class="styleth">Date</th>
					<th class="styleth">Adresse</th>
					<th class="styleth">Nom</th>
					<th class="styleth">Tel des personnes</th>
					<th class="styleth">Message</th>
					<th><a class="toggle-edit"><i class="edit-del-icon uil uil-edit"></i></a></th>
					<th><a class="toggle-add"><i class="edit-del-icon uil uil-book-medical"></i></a></th>
				</tr>
				<?php
        foreach ($list as $Transport) 
        {
        ?>
					<tr>
                        <td class="styleth"><?= $Transport['Id_T']; ?></td>
                        <td class="styleth"><?= $Transport['IdClient']; ?></td>
                        <td class="styleth"><?= $Transport['Id_Ch']; ?></td>
                        <td class="styleth"><?= $Transport['Type']; ?></td>
                        <td class="styleth"><?= $Transport['Nbr_Pers']; ?></td>
                        <td class="styleth"><?= $Transport['Date']; ?></td>
						<td class="styleth"><?= $Transport['Adresse']; ?></td>
                        <td class="styleth"><?= $Transport['Nom']; ?></td>
                        <td class="styleth"><?= $Transport['Tel']; ?></td>
                        <td class="styleth"><?= $Transport['Message']; ?></td>
						<td>
							<a href="deleteTransport.php?Id_T=<?php echo $Transport['Id_T']; ?>"><i class="edit-del-icon uil uil-trash-alt"></i></a>
						</td>
					</tr>
                    <?php
        }
        ?>	
			</table>
		</div>
		<div class="InputlistAdd slide-in-right">

			<form  class="form-group" method="POST" action="addTransport.php">
				
				<ul>
					<li>
						<h3> Ajouter</h3>
					</li>
					<li>
						<input type="number" name="IdClienta" class="form-style" placeholder="IdClient" id="IdClienta" autocomplete="off">
						<i class="input-icon uil uil-box"></i>
					</li>
					<li>
						<input type="number" name="Id_Cha" class="form-style" placeholder="IdChauffeur" id="Id_Cha" autocomplete="off">
						<i class="input-icon uil uil-usd-circle"></i>
					</li>
					<li>
						<input type="text" name="Typea" class="form-style" placeholder="Type" id="Typea" autocomplete="off">
						<i class="input-icon uil uil-tag"></i>
					</li>
					<li>
						<input type="number" name="Nbr_Persa" class="form-style" placeholder="NombrePersonne" id="Nbr_Persa" autocomplete="off">
						<i class="input-icon uil uil-home"></i>
					</li>
					<li>
						<input type="date" name="Datea" class="form-style" placeholder="Date" id="Datea" autocomplete="off">
						<i class="input-icon uil uil-user"></i>
					</li>
					<li>
						<input type="text" name="adressea" class="form-style" placeholder="Adresse" id="adressea" autocomplete="off">
						<i class="input-icon uil uil-user"></i>
					</li>
					<li>
						<input type="text" name="namea" class="form-style" placeholder="Name" id="namea" autocomplete="off">
						<i class="input-icon uil uil-user"></i>
					</li>
					<li>
						<input type="text" name="numa" class="form-style" placeholder="Phone" id="numa" autocomplete="off">
						<i class="input-icon uil uil-user"></i>
					</li>
					<li>
						<input type="text" name="Notea" class="form-style" placeholder="Note for the driver" id="Notea" autocomplete="off">
						<i class="input-icon uil uil-user"></i>
					</li>
				</ul>
				<input type="submit" name="Add" value="Submit" class="btn mt-4">
			</form>

		</div>
		<div class="InputlistEdit slide-out-right">

			<form  class="form-group" method="POST" action="updateTransport.php">
				
				<ul>
					<li>
						<h3>Modifier</h3>
					</li>
					<li>
						<input type="number" name="Id_Tu" class="form-style" placeholder="Id du Transport a modifier" id="Id_Tu" autocomplete="off">
						<i class="input-icon uil uil-parcel"></i>
					</li>
					<li>
					<input type="number" name="IdClientu" class="form-style" placeholder="IdClient" id="IdClientu" autocomplete="off">
						<i class="input-icon uil uil-box"></i>
					</li>
					<li>
						<input type="number" name="Id_Chu" class="form-style" placeholder="IdChauffeur" id="Id_Chu" autocomplete="off">
						<i class="input-icon uil uil-usd-circle"></i>
					</li>
					<li>
						<input type="text" name="Typeu" class="form-style" placeholder="Type" id="Typeu" autocomplete="off">
						<i class="input-icon uil uil-tag"></i>
					</li>
					<li>
						<input type="number" name="Nbr_Persu" class="form-style" placeholder="NombrePersonne" id="Nbr_Persu" autocomplete="off">
						<i class="input-icon uil uil-home"></i>
					</li>
					<li>
						<input type="date" name="Dateu" class="form-style" placeholder="Date" id="Dateu" autocomplete="off">
						<i class="input-icon uil uil-user"></i>
					</li>
					<li>
						<input type="text" name="adresseu" class="form-style" placeholder="Adresse" id="adresseu" autocomplete="off">
						<i class="input-icon uil uil-user"></i>
					</li>
					<li>
						<input type="text" name="nameu" class="form-style" placeholder="Name" id="nameu" autocomplete="off">
						<i class="input-icon uil uil-user"></i>
					</li>
					<li>
						<input type="text" name="numu" class="form-style" placeholder="Phone" id="numu" autocomplete="off">
						<i class="input-icon uil uil-user"></i>
					</li>
					<li>
						<input type="text" name="Noteu" class="form-style" placeholder="Note for the driver" id="Noteu" autocomplete="off">
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
