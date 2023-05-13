<?php
include "../Controller/MatC.php";
include "../Controller/UtilisateurC.php";
$MatC = new MaterielC();

$valeur_id = isset($_GET['val_id']) ? $_GET['val_id'] : 0;
$resevtest = isset($_GET['creationreserv']) ? $_GET['creationreserv'] : 0;
$UtilisateurC = new UtilisateurC();
$Username= $UtilisateurC->Username($valeur_id);
$EmailUser=$UtilisateurC->EmailUtilisateur($valeur_id);


?>



<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8">
    <title>Culturna</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

	<!-- Front Css Main Pages -->
	<link href="assets/CSS/style Main Page.css" rel="stylesheet">
	<link rel="stylesheet" href="./assets/CSS/style Event.css">
  	<link rel="stylesheet" href="./assets/CSS/styleEventRotation.css">
  	<link rel="stylesheet" href="./assets/CSS/styleInputNextPrevious.css">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
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

    <!-- QR code et etoile-->
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
  <link rel="stylesheet" href="Qrcode.css">
	<script src="./scriptEtoile.js" defer></script>


    <!-- RECATCHAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script> 
    <!-- RECATCHAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->

	
</head>
<body>
	<!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

	<!--! Header ================================================== -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <?php echo "<a class='navbar-brand d-flex align-items-center px-4 px-lg-5' href='Page_accueil.php?val_id=" . $valeur_id ."'>
            <h2 class='m-0 text-primary'><img style='width:70px;' src='src/LogoBleu.png' alt=''>  Culturna</h2>
        </a>"; ?>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <?php echo "<a class='nav-item nav-link ' href='Page_accueil.php?val_id=" . $valeur_id ."'>Accueil</a>"; ?>
                <?php echo "<a class='nav-item nav-link displaylogin' href='Page_Club.php?val_id=" . $valeur_id ."'>Club</a>"; ?>
                <?php echo "<a class='nav-item nav-link displaylogin ' href='Page_Evenement.php?val_id=" . $valeur_id ."&creationreserv=". 0 ."'>Événement</a>"; ?>
                <?php echo "<a class='nav-item nav-link displaylogin' href='Page_Reclamation.php?val_id=" . $valeur_id ."'>Réclamation</a>"; ?>
                <?php echo "<a class='nav-item nav-link displaylogin' href='Page_Produit.php?val_id=" . $valeur_id ."'>Produit</a>"; ?>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle displaylogin active" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
					    <?php echo "<a class='dropdown-item' href='Page_Reservation.php?val_id=" . $valeur_id ."'>Réservation</a>"; ?>
                        <?php echo "<a class='dropdown-item' href='Page_Transport.php?val_id=" . $valeur_id ."'>Transport</a>"; ?>
                        <?php echo "<a class='dropdown-item' href='Page_Reponse.php?val_id=" . $valeur_id ."'>Réponse</a>"; ?>
                        <?php echo "<a class='dropdown-item active' href='Page_Materiel.php?val_id=" . $valeur_id ."'>Materiel</a>"; ?>
                    </div>
                </div>
                <?php echo "<a class='nav-item nav-link ' href='Page_Contact.php?val_id=" . $valeur_id ."'>Contact</a>"; ?>
                <a href="#" class="btn btn-primary py-4 px-lg-5 d-none toggle-login deconnecter hide">Rejoignez-nous<i class="fa fa-arrow-right ms-3"></i></a>
                <?php echo "<a class='btn btn-primary py-4 px-lg-5 d-none d-lg-block connecter' href='Page_profile.php?val_id=" . $valeur_id ."&creationreserv=". 0 ."'>".$Username."</a>"; ?>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


	<!--! Burger Menu or Sidebar ============================================== -->
	<div class="burger Fixed-burger">
		<span></span>
	  </div>
	  
	  <nav class="navadmin">
		<ul class="main">
			<li class="Fixed-burger-li"></li>
		  	<li><h3>Type des Materiels:</h3></li>
			<li><a href="#Football" class="EventTypeRacour">Football</a></li>
		  	<li><a href="#BasketBall" class="EventTypeRacour">BasketBall</a></li> 
		  	<li><a href="#Tennis" class="EventTypeRacour">Tennis</a></li>
		  	<li><a href="#Théatre" class="EventTypeRacour">Théatre</a></li>
		  	<li><a href="#Dessin" class="EventTypeRacour">Dessin</a></li>
        <li><a href="Page_Club.php" class="EventTypeRacour">Liste des Clubs</a></li>

		</ul>
	  </nav>

	  <div class="overlay"></div>
	
	<section class="List">
	
		<ul class="Tablelist">
	<!--!  =======================Type1=========================== -->
			<li id="Theatre" style="list-style: none;">
			<!-- Courses Start -->
				<div class="container-xxl py-5 ToBeBlured">
						<div class="container">
							<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
								<h6 class="section-title bg-white text-center text-primary px-3">Materiel</h6>
								<h1 class="mb-5">Football</h1>
									<form method="post" action="" style=" max-height : 10px; max-width: 10px; top: -100px; left: 80%">
									</form>
							</div>
							<div class="row g-4 justify-content-center">
							<?php
										$listtype1 = $MatC->listMattype("Football");
										
								
								foreach ($listtype1 as $Mat)
								{
									?>
								<div class="col-lg-4 col-md-6 wow fadeInUp UnNouvEvent" data-wow-delay="0.1s">
									<input type="hidden" id="idevent" value="<?= $Mat['id_M']; ?>"/>
									<input type="hidden" id="dateevent" value="<?= $Mat['type_M']; ?>"/>
									<input type="hidden" id="prixevent" value="<?= $Mat['nom_M']; ?>"/>
									<div class="course-item bg-light">
										<div class="position-relative overflow-hidden">
											<img class="img-fluid" style="width: 400px; height:250px" src="uploadsC/<?= basename($Mat['image']) ?>" alt="<?= $Mat['nom_M'] ?>">
											<div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
											</div>
										</div>
										<div class="text-center p-4 pb-0">
											<h3 class="mb-0"><?= $Mat['nom_M']; ?></h3>
											
										</div>
										<div class="d-flex border-top">
											<small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar text-primary me-2"></i><?= $Mat['nom_cl']; ?></small>
											<small class="flex-fill text-center border-end py-2"><?= $Mat['type_M']; ?></small>
										</div>
									</div>
								</div>
								<?php
								   }
								   ?>
							</div>
						</div>
					</div>
			</li>
			<!-- Courses End -->
<!--!  =======================Type2=========================== -->
<li id="Musique" style="list-style: none;">
			<!-- Courses Start -->
				<div class="container-xxl py-5 ToBeBlured">
						<div class="container">
							<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
								<h6 class="section-title bg-white text-center text-primary px-3">Clubs</h6>
								<h1 class="mb-5">BasketBall</h1>
								<form method="post" action="" style=" max-height : 10px; max-width: 10px; top: -100px; left: 80%">
								</form>
							</div>
              <div class="row g-4 justify-content-center">
							<?php
										$listtype2 = $MatC->listMattype("Basketball");
										
								
								foreach ($listtype2 as $Mat)
								{
									?>
								<div class="col-lg-4 col-md-6 wow fadeInUp UnNouvEvent" data-wow-delay="0.1s">
									<input type="hidden" id="idevent" value="<?= $Mat['id_M']; ?>"/>
									<input type="hidden" id="dateevent" value="<?= $Mat['type_M']; ?>"/>
									<input type="hidden" id="prixevent" value="<?= $Mat['nom_M']; ?>"/>
									<div class="course-item bg-light">
										<div class="position-relative overflow-hidden">
											<img class="img-fluid" style="width: 400px; height:250px" src="uploadsC/<?= basename($Mat['image']) ?>" alt="<?= $Mat['nom_M'] ?>">
											<div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
											</div>
										</div>
										<div class="text-center p-4 pb-0">
											<h3 class="mb-0"><?= $Mat['nom_M']; ?></h3>
											
										</div>
										<div class="d-flex border-top">
											<small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar text-primary me-2"></i><?= $Mat['nom_cl']; ?></small>
											<small class="flex-fill text-center border-end py-2"><?= $Mat['type_M']; ?></small>
										</div>
									</div>
								</div>
								<?php
								   }
								   ?>
							</div>
						</div>
						
					</div>
			</li>
			<!-- Courses End -->
<!--!  =======================Type3=========================== -->
<li id="Culture" style="list-style: none;">
			<!-- Courses Start -->
				<div class="container-xxl py-5 ToBeBlured">
						<div class="container">
							<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
								<h6 class="section-title bg-white text-center text-primary px-3">Clubs</h6>
								<h1 class="mb-5">Tennis</h1>
								<form method="post" action="" style=" max-height : 10px; max-width: 10px; top: -100px; left: 80%">
								</form>
							</div>
              <div class="row g-4 justify-content-center">
							<?php
										$listtype3 = $MatC->listMattype("Tennis");
										
								
								foreach ($listtype3 as $Mat)
								{
									?>
								<div class="col-lg-4 col-md-6 wow fadeInUp UnNouvEvent" data-wow-delay="0.1s">
									<input type="hidden" id="idevent" value="<?= $Mat['id_M']; ?>"/>
									<input type="hidden" id="dateevent" value="<?= $Mat['type_M']; ?>"/>
									<input type="hidden" id="prixevent" value="<?= $Mat['nom_M']; ?>"/>
									<div class="course-item bg-light">
										<div class="position-relative overflow-hidden">
											<img class="img-fluid" style="width: 400px; height:250px" src="uploadsC/<?= basename($Mat['image']) ?>" alt="<?= $Mat['nom_M'] ?>">
											<div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
											</div>
										</div>
										<div class="text-center p-4 pb-0">
											<h3 class="mb-0"><?= $Mat['nom_M']; ?></h3>
											
										</div>
										<div class="d-flex border-top">
											<small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar text-primary me-2"></i><?= $Mat['nom_cl']; ?></small>
											<small class="flex-fill text-center border-end py-2"><?= $Mat['type_M']; ?></small>
										</div>
									</div>
								</div>
								<?php
								   }
								   ?>
							</div>
						</div>
					</div>
			</li>
			<!-- Courses End -->
<!--!  =======================Type4=========================== -->
<li id="Dance" style="list-style: none;">
			<!-- Courses Start -->
				<div class="container-xxl py-5 ToBeBlured">
						<div class="container">
							<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
								<h6 class="section-title bg-white text-center text-primary px-3">Clubs</h6>
								<h1 class="mb-5">Dessin</h1>
								<form method="post" action="" style=" max-height : 10px; max-width: 10px; top: -100px; left: 80%">
								</form>
							</div>
              <div class="row g-4 justify-content-center">
							<?php
										$listtype4= $MatC->listMattype("Dessin");
										
								
								foreach ($listtype4 as $Mat)
								{
									?>
								<div class="col-lg-4 col-md-6 wow fadeInUp UnNouvEvent" data-wow-delay="0.1s">
									<input type="hidden" id="idevent" value="<?= $Mat['id_M']; ?>"/>
									<input type="hidden" id="dateevent" value="<?= $Mat['type_M']; ?>"/>
									<input type="hidden" id="prixevent" value="<?= $Mat['nom_M']; ?>"/>
									<div class="course-item bg-light">
										<div class="position-relative overflow-hidden">
											<img class="img-fluid" style="width: 400px; height:250px" src="uploadsC/<?= basename($Mat['image']) ?>" alt="<?= $Mat['nom_M'] ?>">
											<div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
											</div>
										</div>
										<div class="text-center p-4 pb-0">
											<h3 class="mb-0"><?= $Mat['nom_M']; ?></h3>
											
										</div>
										<div class="d-flex border-top">
											<small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar text-primary me-2"></i><?= $Mat['nom_cl']; ?></small>
											<small class="flex-fill text-center border-end py-2"><?= $Mat['type_M']; ?></small>
										</div>
									</div>
								</div>
								<?php
								   }
								   ?>
							</div>
						</div>
					</div>
			</li>
			<!-- Courses End -->


<!--!  =======================Type5=========================== -->
<li id="Art" style="list-style: none;">
			<!-- Courses Start -->
				<div class="container-xxl py-5 ToBeBlured">
						<div class="container">
							<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
								<h6 class="section-title bg-white text-center text-primary px-3">Clubs</h6>
								<h1 class="mb-5">Théatre</h1>
								<form method="post" action="" style=" max-height : 10px; max-width: 10px; top: -100px; left: 80%">
								</form>
							</div>
							<							<div class="row g-4 justify-content-center">
							<?php
										$listtype5 = $MatC->listMattype("Théatre");
										
								
								foreach ($listtype5 as $Mat)
								{
									?>
								<div class="col-lg-4 col-md-6 wow fadeInUp UnNouvEvent" data-wow-delay="0.1s">
									<input type="hidden" id="idevent" value="<?= $Mat['id_M']; ?>"/>
									<input type="hidden" id="dateevent" value="<?= $Mat['type_M']; ?>"/>
									<input type="hidden" id="prixevent" value="<?= $Mat['nom_M']; ?>"/>
									<div class="course-item bg-light">
										<div class="position-relative overflow-hidden">
											<img class="img-fluid" style="width: 400px; height:250px" src="uploadsC/<?= basename($Mat['image']) ?>" alt="<?= $Mat['nom_M'] ?>">
											<div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
											</div>
										</div>
										<div class="text-center p-4 pb-0">
											<h3 class="mb-0"><?= $Mat['nom_M']; ?></h3>
											
										</div>
										<div class="d-flex border-top">
											<small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar text-primary me-2"></i><?= $Mat['nom_cl']; ?></small>
											<small class="flex-fill text-center border-end py-2"><?= $Mat['type_M']; ?></small>
										</div>
									</div>
								</div>
								<?php
								   }
								   ?>
							</div>
						</div>
					</div>
			</li>
			<!-- Courses End -->


			<li style="height: 50px;"></li>
			</ul>
		
	</section>


		<!--! Input Reservation ============================================== -->


	<
				

    

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top ToBeBlured"><i class="bi bi-arrow-up"></i></a>





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
<script  src="./assets/JS/script Event.js"></script>
<script  src="./assets/JS/scriptInputNextPrevious.js"></script>
<script src="./assets/JS/InputControlFront.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script> 
<script src="./assets/JS/Burger.js"></script>



</html>
