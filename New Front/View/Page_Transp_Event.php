<?php
include '../Controller/EventC.php';
include "../Controller/UtilisateurC.php";
include "../Controller/ChauffeurC.php";


$ChauffeurC = new ChauffeurC();
$listchauffeur = $ChauffeurC->listChauffeur();
$valeur_id = $_GET['val_id'];
$resevtest = $_GET['creationreserv'];
$datee = $_GET['dateevent'];
$nbrplace = $_GET['nbrpersonne'];
$UtilisateurC = new UtilisateurC();
$Username= $UtilisateurC->Username($valeur_id);

?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Culturna</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

	<!-- Front Css -->
  	<link rel="stylesheet" href="./assets/CSS/styleInputNextPrevious.css">
	  <link rel="stylesheet" href="./assets/CSS/style TransportEvent.css">


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



    <!-- RECATCHAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script> 
    <!-- RECATCHAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->
</head>
<body>

<input type="hidden" id="resevtest" value="<?= $resevtest; ?>">


<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    <input type="hidden" value="<?= $valeur_id; ?>" id="idclienta">

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
                <?php echo "<a class='nav-item nav-link active' href='Page_accueil.php?val_id=" . $valeur_id ."'>Accueil</a>"; ?>
                <a href="#" class="nav-item nav-link displaylogin">Club</a>
                <?php echo "<a class='nav-item nav-link displaylogin' href='Page_Evenement.php?val_id=" . $valeur_id ."&creationreserv=". 0 ."'>Evenement</a>"; ?>
				<a href="#" class="nav-item nav-link displaylogin">Produit</a>
				<a href="#" class="nav-item nav-link displaylogin">Reclamation</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle displaylogin" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <?php echo "<a class='dropdown-item' href='Page_Reservation.php?val_id=" . $valeur_id ."'>Reserveation</a>"; ?>
                        <?php echo "<a class='dropdown-item' href='Page_Transport.php?val_id=" . $valeur_id ."'>Transport</a>"; ?>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
                <a href="#" class="btn btn-primary py-4 px-lg-5 d-none toggle-login deconnecter hide">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
                <?php echo "<a class='btn btn-primary py-4 px-lg-5 d-none d-lg-block connecter' href='Page_Profile.php?val_id=" . $valeur_id ."&creationreserv=". 0 ."'>".$Username."</a>"; ?>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 ToBeBlured">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
							<div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Heelow</h5>
								<!--! affiche  ============================================== -->
								<h1 class="display-3 text-white animated slideInDown afficher"></h1>
								<button class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft toggleinputtransp btnrequesttransport" style="color:white;">Demander du transport</button>
								<?php echo "<a class='btn btn-light py-md-3 px-md-5 animated slideInRight' href='Page_Evenement.php?val_id=" . $valeur_id ."&creationreserv=". 0 ."'>Back</a>"; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Heelow</h5>
								<!--! affiche  ============================================== -->
								<h1 class="display-3 text-white animated slideInDown afficher"></h1>
								<button class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft toggleinputtransp btnrequesttransport" style="color:white;">Demander du transport</button>
								<?php echo "<a class='btn btn-light py-md-3 px-md-5 animated slideInRight' href='Page_Evenement.php?val_id=" . $valeur_id ."&creationreserv=". 0 ."'>Back</a>"; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
	
		<!--! Input Reservation ============================================== -->
	<section class="input-visibility flip-out-hor-top hide" >
		<form  method="POST" action="FunctionDemandeTransport.php"  onsubmit="return DemandeTransportUser2();"  >
			<div class="stepper" >
				<div class="step--1 step-active"></div>
				<div class="step--2"></div>
			</div>
			<div class="form form-active">
				<a href="#" id="closebtn1Transp"><i class="icon-close uil uil-times-circle"></i></a>
				<div class="form--header-container">
					<h1 class="form--header-title">
						Reservation
					</h1>
	
					<p class="form--header-text">
						Give us your Informations.
					</p>
				</div>
				<input type="hidden" value="<?= $datee; ?>" name="dateeventa" id="dateeventa"/>
				<input type="hidden" value="<?= $nbrplace; ?>" name="nbrPlacea" id="nbrPlacea"/>
				<input type="hidden" value="Event" name="Typea" id="Typea"/>
				<input type="hidden" value="9999" name="idcha" id="idcha"/>
				<input class="inputreserv" type="text" placeholder="Name" name="namea" id="namea"/>
				<input class="inputreserv" type="text" placeholder="Adresse" name="adressea" id="adressea"/>
				<button class="form__btn" id="btn-1" onclick="DemandeTransportUser1()">Next</button>
			</div>
			<div class="form">
				<a href="#" id="closebtn2Transp"><i class="icon-close uil uil-times-circle"></i></a>
				<div class="form--header-container">
					<h1 class="form--header-title">
						Get your place now
					</h1>
	
					<p class="form--header-text">
						Number of available places :
					</p>
				</div>
				<input type="hidden" value="<?= $valeur_id; ?>"  name="idclienta" id="idclienta">
				<select name="idcha" class="inputreserv" id="idcha">
	                  	<option value="1">Chauffeur</option>
						  <?php
        					foreach ($listchauffeur as $diver) 
        						{
        						?>
								<option value="<?= $diver['Id_Ch']; ?>"><?= $diver['Nom']; ?> <?= $diver['Prenom']; ?></option>
								<?php
								}
        						?>
	            </select>
				<input class="inputreserv" type="tel" placeholder="Phone Number" name="numa" id="numa"/>
				<input class="inputreserv" type="text" placeholder="A note for the driver" name="Notea" id="Notea"/>
				<button class="form__btn" id="btn-3-prev">Previous</button>
				<button class="form__btn invis" id="btn-3"></button>
				<input type="submit" name="Add" value="Submit" class="form__btn">
			</div>
		</form>
	</section>  

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

	
	<script  src="./assets/JS/script TransportEvent.js"></script>
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script  src="./assets/JS/scriptInputNextPrevious.js"></script>
<script src="./assets/JS/InputControlFront.js"></script>

</html>
