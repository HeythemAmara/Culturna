<?php
include "../Controller/UtilisateurC.php";


//$valeur_id =13;
$valeur_id = $_GET['val_id'];
$UtilisateurC = new UtilisateurC();
$Username= $UtilisateurC->nomUtilisateur($valeur_id);
$list=$UtilisateurC->listUserId($valeur_id);
$email = $_GET['Email'];


if(isset($_POST['update']))
{
    if (
        !empty($_POST['update'])
       ) 
       {
        $Utilisateur = new Utilisateur(
            NULL,
            NULL,
            $_POST['mdpu'],
            NULL,
            NULL,
			NULL
            );
            $UtilisateurC = new UtilisateurC();
            $UtilisateurC->updateMdpUser($Utilisateur, $email);
        header('location:Page_accueil.php?val_id=' . $valeur_id);
        } 
    else 
        {
            //header('location:Page_accueil.php?val_id=' . $valeur_id);
        }
    }

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="./assets Dashboard/img Dashboard/favicon.png">
  <title> Culturna </title>
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
                <li><?php echo "<a href='Page_Evenement.php?val_id=" . $valeur_id ."&creationreserv=". 0 ."'>Evenement</a>"; ?></li>
                <li><a href="#">Reclamation</a></li>
				<li><a href="#">Magasin</a></li>
                <li><?php echo "<a href='Page_Reservation.php?val_id=" . $valeur_id ."'>Reservation</a>"; ?></li>
				<li><?php echo "<a href='Page_Transport.php?val_id=" . $valeur_id ."'>Transport</a>"; ?></li>
                <?php
        		foreach ($Username as $Userr) 
        		{
        		?>
						<li							 ><a href="#"				class="connecter active"><?= $Userr['Username']; ?></a></li>
						<?php
				}
        		?>
				<?php
				foreach ($list as $Userr) 
        		{}
        		?>
            </ul>
        </div>
    </header>




	


	  <!--! Table or list ============================================== -->
	<section class="List">
		<div class="Tablelist">
			<ul>
			<li>
			<form class="form-group mt-4" method="POST" action=""  onsubmit="return validateFormModifserFront();">
				<ul>
					<li>
						<h1>Change password</h1>
					</li>
					<li>
					<input type="password" name="mdpu" class="form-style" placeholder="Password" id="mdpu">
					</li>
				</ul>
				<input type="submit" name="update" value="Submit" class="btn ">
			</form>
			</li>
			</ul>
		</div>
	</section>

	<!--! Scroll back to top ================================================== -->
	<div class="scroll-to-top"></div>

    
</body>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script  src="./assets/JS/scriptdashboard.js"></script>
<script src="./assets/JS/InputControlFront.js"></script>

</html>