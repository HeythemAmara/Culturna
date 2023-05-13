<?php
include_once '../Controller/TransportC.php';
include_once '../Controller/ChauffeurC.php';
include_once "../Controller/UtilisateurC.php";


$valeur_id = isset($_GET['val_id']) ? $_GET['val_id'] : 0;
$UtilisateurC = new UtilisateurC();
$Username= $UtilisateurC->Username($valeur_id);
$test=0;

$ChauffeurC= new ChauffeurC();
$id_chauffeur=$ChauffeurC->idChauffeur($valeur_id);

$ReservationC = new TransportC();
$list = $ReservationC->listTransportpourchauffeur($id_chauffeur);

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> Culturna </title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
  <link rel="stylesheet" href="./assets/CSS/Reservation.css">
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

    <!-- Front Css Main Pages -->
    <link href="assets/CSS/style Main Page.css" rel="stylesheet">

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
                <?php echo "<a class='btn btn-primary py-4 px-lg-5 d-none d-lg-block connecter' href='Page_Profile.php?val_id=" . $valeur_id ."&creationreserv=".$test."'>".$Username."</a>"; ?>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

	  <!--! Table or list ============================================== -->
	<section class="List">
		<div class="Tablelist" style=" width:80%; margin-left:10% ;margin-right:10% ;">
		   <div class="card">
              <div class="card-header">
                     <div class="card-header-right">
                       <ul class="list-unstyled card-option">
                           <li><i class="fa fa fa-wrench open-card-option"></i></li>
                           <li><i class="fa fa-window-maximize full-card"></i></li>
                           <li><i class="fa fa-minus minimize-card"></i></li>
                           <li><i class="fa fa-refresh reload-card" id= "my-buttonreload"></i></li>
                       </ul>
                   </div>
               </div>
               <div class="card-block table-border-style">
                 <div class="table-responsive">
				 <table class="table table-hover tableau1" id="tableau1">
				 <thead>
              		<tr>
					    <th class="styleth">Type</th>
					    <th class="styleth">Nbr Personne</th>
					    <th class="styleth">Date</th>
					    <th class="styleth">Adresse</th>
                        <th class="styleth">Nom</th>
					    <th class="styleth">Tel</th>
					    <th class="styleth">Message</th>
					    <th class="styleth">Activation du transport</th>
					</tr>
               </thead>
               <tbody>
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
							<?php $test=$Transport['Id_T'];
							$id_Client= $Transport['IdClient'];
							echo "<a href='./FunctionShareLocalisation.php?val_id=" . $valeur_id ."&id_Chauffeur=". $id_chauffeur ."&id_Client=". $id_Client ."&once=". 0 ."'><i class='edit-del-icon uil uil-check'></i></a>"; ?>
				  </div>
			  </td>
			</tr>
          <?php
        }
        ?>	
          </tbody>
			</table>
				<button class="uil uil-step-backward" id= "bouton-precedent1"disabled></button>
        		<button class="uil uil-skip-forward" id="bouton-suivant1"></button>
		  </div>
		</div>
	  </div>
    </div>
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

    
</body>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script  src="./assets/JS/scriptdashboard.js"></script>
<script src="./assets/JS/InputControlFront.js"></script>
<script src="./assets Dashboard/js Dashboard/Input-Variables.js"></script>
<script src="./assets/JS/pagination.js"></script>
<script src="./assets/JS/tables.js"></script>
</html>