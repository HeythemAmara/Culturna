<?php
include '../Controller/ClubC.php';
$ClubC = new ClubC();
$list = $ClubC->listClub();
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
                <li><a href="#"class="active">Clubs</a></li>
                <li><a href="#">Evenement</a></li>
                <li><a href="#">Reclamation</a></li>
				<li><a href="#">Magasin</a></li>
                <li><a href="#" >Dashboard</a></li>
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
		  	<li><a href="#">Clieet</a></li>
		  	<li><a href="#">Reclamation</a></li>
		  	<li><a href="#">Avis</a></li>
		  	<li><a href="#">Evenement</a></li>
		  	<li><a href="#">Reservation</a></li>
		  	<li><a href="#" class="active">Club</a></li>
		  	<li><a href="#">Entraineur</a></li>
		  	<li><a href="#">Produit</a></li>
		  	<li><a href="#">Panier</a></li>
			<li><a href="#">Chauffeur</a></li>
			<li><a href="#">Event</a></li>
			<li><a href="#">Facture</a></li>
		</ul>
	  </nav>
	  <div class="overlay"></div>

	  <!--! Table or list ============================================== -->
	<section class="List">
		<div class="Tablelist">
			<table class="tableview">
				<tr class="TitleTab">
					<!--<th class="styleth">Id Club</th>-->
					<th class="styleth">Nom</th>
					<th class="styleth">Type</th>
					<th class="styleth">Mail</th>

					<th><a class="toggle-edit"><i class="edit-del-icon uil uil-edit"></i></a></th>
					<th><a class="toggle-add"><i class="edit-del-icon uil uil-book-medical"></i></a></th>
				</tr>
				<?php
        foreach ($list as $Club) 
        {
        ?>
					<tr>
                        <!--<td class="styleth"><?//= $Club['id_Club']; ?></td>-->
                        <td class="styleth"><?= $Club['nom_C']; ?></td>
                        <td class="styleth"><?= $Club['type_C']; ?></td>
												<td class="styleth"><?= $Club['mailC']; ?></td>

					<!--	<td>
							<a href="deleteClub.php?id_Club=<?php echo $Club['id_Club']; ?>"><i class="edit-del-icon uil uil-trash-alt"></i></a>
						</td>
					</tr>-->
                    <?php
        }
        ?>	
			</table>
		</div>
		<!--
		<div class="InputlistAdd slide-in-right">

			<form  class="form-group" method="POST" action="addClub.php">
				
				<ul>
					<li>
						<h3> Ajouter</h3>
					</li>
					<li>
						<input type="text" name="namea" class="form-style" placeholder="Nom" id="namea" autocomplete="off">
						<i class="input-icon uil uil-clipboard"></i>
					</li>
					<li>
						<input type="text" name="typea" class="form-style" placeholder="Type" id="typea" autocomplete="off">
						<select name="typea" class="form-style" placeholder="Type" id="typea" autocomplete="off">
          <option value="FootBall">FootBall</option>
					<option  value="BasketBall">BasketBall</option>
					<option value="Tennis">Tennis</option>
					<option value="Dessin">Dessin</option>
					<option value="Musculation">Musculation</option>
                    <option value="Theatre">Théatre</option>

      </select>
						<i class="input-icon uil uil-file-landscape"></i>
					</li>
				</ul>
				<input type="submit" name="Add" value="Submit" class="btn mt-4">
			</form>

		</div>
		<div class="InputlistEdit slide-out-right">
<
			<form  class="form-group" method="POST" action="updateClub.php">
				
				<ul>
					<li>
						<h3>Modifier</h3>
					</li>
					<li>
						<input type="number" name="id_Club" class="form-style" placeholder="id Club a Modifier" id="id_Club" autocomplete="off">
						<i class="input-icon uil uil-dialpad-alt"></i>
					</li>
					<li>
						<input type="text" name="nameu" class="form-style" placeholder="Nom" id="nameu" autocomplete="off">
						<i class="input-icon uil uil-clipboard"></i>
					</li>
					<li>
						<<input type="text" name="typeu" class="form-style" placeholder="Type" id="typeu" autocomplete="off">
						<select name="typeu" class="form-style" placeholder="Type" id="typeu" autocomplete="off">
          <option value="FootBall">FootBall</option>
					<option  value="BasketBall">BasketBall</option>
					<option value="Tennis">Tennis</option>
					<option value="Dessin">Dessin</option>
					<option value="Musculation">Musculation</option>
                    <option value="Theatre">Théatre</option>

      </select>
						<i class="input-icon uil uil-file-landscape"></i>
					</li>
				</ul>
				<input type="submit" name="Update" value="Submit" class="btn mt-4">
			</form>

		</div>
	</section>-->

	<!-- Scroll back to top ================================================== -->
	<div class="scroll-to-top"></div>

    
</body>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script  src="./scriptdashboard.js"></script>
</html>
