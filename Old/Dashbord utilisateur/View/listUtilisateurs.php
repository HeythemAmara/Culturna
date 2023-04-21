<?php
include "../Controller/UtilisateurC.php";
$UtilisateurC = new UtilisateurC();
$list = $UtilisateurC->listUtilisateur();
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
		  	<li><a href="#" class="active">Client</a></li>
		  	<li><a href="#">Reclamation</a></li>
		  	<li><a href="#">Avis</a></li>
		  	<li><a href="#">Evenement</a></li>
		  	<li><a href="#">Reservation</a></li>
		  	<li><a href="#">Club</a></li>
		  	<li><a href="#">Entraineur</a></li>
		  	<li><a href="#">Produit</a></li>
		  	<li><a href="#">Panier</a></li>
			<li><a href="#">Chauffeur</a></li>
			<li><a href="#">Livraison</a></li>
			<li><a href="#">Facture</a></li>
		</ul>
	  </nav>
	  <div class="overlay"></div>

	  <!--! Table or list ============================================== -->
	<section class="List">
		<div class="Tablelist">
			<table class="tableview">
				<tr class="TitleTab">
						<th class="styleth">Id</th>
            			<th class="styleth">Nom</th>
            			<th class="styleth">Prenom</th>
            			<th class="styleth">Email</th>
            			<th class="styleth">Mdp</th>
            			<th class="styleth">Dob</th>
            			<th class="styleth">Perm</th>
					<th><a class="toggle-edit"><i class="edit-del-icon uil uil-edit"></i></a></th>
					<th><a class="toggle-add"><i class="edit-del-icon uil uil-book-medical"></i></a></th>
				</tr>
				<?php
        foreach ($list as $Utilisateur) 
        {
        ?>
					<tr>
							<td class="styleth"><?= $Utilisateur['IdU']; ?></td>
                			<td class="styleth"><?= $Utilisateur['Nom']; ?></td>
                			<td class="styleth"><?= $Utilisateur['Prenom']; ?></td>
                			<td class="styleth"><?= $Utilisateur['Email']; ?></td>
                			<td class="styleth"><?= $Utilisateur['Mdp']; ?></td>
                			<td class="styleth"><?= $Utilisateur['Dob']; ?></td>
                			<td class="styleth"><?= $Utilisateur['Perm']; ?></td>
						<td>
						</td>
						<td>
							<a href="deleteUtilisateur.php?Id_L=<?php echo $Utilisateur['IdU']; ?>"><i class="edit-del-icon uil uil-trash-alt"></i></a>
						</td>
					</tr>
                    <?php
        }
        ?>	
			</table>
		</div>
		<div class="InputlistAdd slide-in-right">

			<form  class="form-group" method="POST" action="addUtilisateur.php">
				
				<ul>
					<li>
						<h3> Ajouter</h3>
					</li>
					<li>
						<input type="number" name="idua" class="form-style" placeholder="Id de l'utilisateur" id="idua" autocomplete="off">
						<i class="input-icon uil uil-parcel"></i>
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
						<input type="text" name="emaila" class="form-style" placeholder="Email" id="emaila" autocomplete="off">
						<i class="input-icon uil uil-tag"></i>
					</li>
					<li>
						<input type="text" name="mdpa" class="form-style" placeholder="Mdp" id="mdpa" autocomplete="off">
						<i class="input-icon uil uil-home"></i>
					</li>
					<li>
						<input type="text" name="doba" class="form-style" placeholder="Dob" id="doba" autocomplete="off">
						<i class="input-icon uil uil-user"></i>
					</li>
					<li>
						<input type="text" name="perma" class="form-style" placeholder="Permission" id="perma" autocomplete="off">
						<i class="input-icon uil uil-truck"></i>
					</li>
				</ul>
				<input type="submit" name="Add" value="Submit" class="btn mt-4">
			</form>

		</div>
		<div class="InputlistEdit slide-out-right">

			<form  class="form-group" method="POST" action="updateUtilisateur.php">
				
				<ul>
					<li>
						<h3>Modifier</h3>
					</li>
					<li>
						<input type="number" name="idu" class="form-style" placeholder="Id de l'utilisateur' à Modifier" id="idu" autocomplete="off">
						<i class="input-icon uil uil-parcel"></i>
					</li>
					<li>
						<input type="text" name="iduu" class="form-style" placeholder="Id de l'utilisateur'" id="iduu" autocomplete="off">
						<i class="input-icon uil uil-parcel"></i>
					</li>
					<li>
						<input type="text" name="nomu" class="form-style" placeholder="Nom de l'utilisateur" id="nomu" autocomplete="off">
						<i class="input-icon uil uil-box"></i>
					</li>
					<li>
						<input type="text" name="prenomu" class="form-style" placeholder="Prenom" id="prenomu" autocomplete="off">
						<i class="input-icon uil uil-usd-circle"></i>
					</li>
					<li>
						<input type="text" name="emailu" class="form-style" placeholder="Email" id="emailu" autocomplete="off">
						<i class="input-icon uil uil-tag"></i>
					</li>
					<li>
						<input type="text" name="mdpu" class="form-style" placeholder="Mdp" id="mdpu" autocomplete="off">
						<i class="input-icon uil uil-home"></i>
					</li>
					<li>
						<input type="text" name="dobu" class="form-style" placeholder="Dob" id="dobu" autocomplete="off">
						<i class="input-icon uil uil-user"></i>
					</li>
					<li>
						<input type="text" name="permu" class="form-style" placeholder="Perm" id="permu" autocomplete="off">
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
