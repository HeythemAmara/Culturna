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

	<!-- NNNNNNNNNNNEEEEEEEEWWWWWWWWWWWWWWWWWWWWW -->
	<link rel="stylesheet" href="./assets/CSS/Reservation.css">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="./assets Dashboard/img Dashboard/favicon.png">
  <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
  <script src="https://kit.fontawesome.com/f75325e0a0.js" crossorigin="anonymous"></script>

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="assets Front/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="assets Front/css/style.css" rel="stylesheet">

  <!-- Front Css Utilities -->
  <link href="assets Front/css/Utilities.css" rel="stylesheet">

  <!-- Front Css Main Pages -->
  <link href="assets/CSS/style Main Page.css" rel="stylesheet">

  <!-- RECATCHAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script> 
  <!-- RECATCHAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->
  
  


</head>
<body>

	

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
				<input type="submit" name="update" value="Submit" class="btn btn-primary py-md-3 px-md-5 me-3 mt-4" style="margin-top: 10px; float: right;">
			</form>
			</li>
			</ul>
		</div>
	</section>

	<!--! Scroll back to top ================================================== -->
	<div class="scroll-to-top"></div>


							<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="assets Front/js/main.js"></script> 

    
</body>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script  src="./assets/JS/scriptdashboard.js"></script>
<script src="./assets/JS/InputControlFront.js"></script>

</html>