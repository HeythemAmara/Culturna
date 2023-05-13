<?php
include "../Controller/ClubC.php";
include "../Controller/UtilisateurC.php";
$ClubC = new ClubC();

$valeur_id = isset($_GET['val_id']) ? $_GET['val_id'] : 0;
$resevtest = isset($_GET['creationreserv']) ? $_GET['creationreserv'] : 0;
$UtilisateurC = new UtilisateurC();
$Username= $UtilisateurC->Username($valeur_id);
$EmailUser=$UtilisateurC->EmailUtilisateur($valeur_id);


$message="Désolé le code est inexistant!";

 

$note=0;
 
if(isset ($_POST))
{
  $data=file_get_contents("php://input");
  $note=json_decode($data);
  // Faire quelque chose avec la valeur de la note, comme la stocker dans une base de données
  
  echo $note;

}

if (
    isset($_POST['nom'] ) )
    
    
    
{
    if (
        !empty($_POST['nom']) 
        
       ) 
        {$data=file_get_contents("php://input");
          $note=json_decode($data);
          
          // Faire quelque chose avec la valeur de la note, comme la stocker dans une base de données
          
          echo $note;
            $nom=$_POST['nom'];
            $ClubC=new ClubC();
            $Club=new Club(null,null,null,null,null,null);
            $Club=$ClubC->findClubByName($nom);
          if ($Club!=null)
          {
            $message="Le nom du club est " . $Club->getName() . " Pour contacter le responsable voici son email " . $Club->getmail() . "!";
            $NV=$Club->getnote();
            $moyenne = ($NV + $note) / 2;

  // Arrondir la moyenne à l'entier le plus proche
  $note_arrondie = round($moyenne);
  echo"---------------";
  echo $note;

            $ClubC->updateNoteClub($note_arrondie,$nom);
        
        
            echo '<script>alert("Ce club est existant")</script>';

        } 


                
          else{
            
            echo '<script>alert("Ce club est inexistant")</script>';

          }
        }
        
}
    
    

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
                <?php echo "<a class='nav-item nav-link displaylogin active' href='Page_Club.php?val_id=" . $valeur_id ."'>Club</a>"; ?>
                <?php echo "<a class='nav-item nav-link displaylogin' href='Page_Evenement.php?val_id=" . $valeur_id ."&creationreserv=". 0 ."'>Événement</a>"; ?>
                <?php echo "<a class='nav-item nav-link displaylogin' href='Page_Reclamation.php?val_id=" . $valeur_id ."'>Réclamation</a>"; ?>
                <?php echo "<a class='nav-item nav-link displaylogin' href='Page_Produit.php?val_id=" . $valeur_id ."'>Produit</a>"; ?>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle displaylogin" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
					    <?php echo "<a class='dropdown-item' href='Page_Reservation.php?val_id=" . $valeur_id ."'>Réservation</a>"; ?>
                        <?php echo "<a class='dropdown-item' href='Page_Transport.php?val_id=" . $valeur_id ."'>Transport</a>"; ?>
                        <?php echo "<a class='dropdown-item' href='Page_Reponse.php?val_id=" . $valeur_id ."'>Réponse</a>"; ?>
                        <?php echo "<a class='dropdown-item' href='Page_Materiel.php?val_id=" . $valeur_id ."'>Materiel</a>"; ?>                    </div>
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
		  	<li><h3>Type des Clubs:</h3></li>
			<li><a href="#Football" class="EventTypeRacour">Football</a></li>
		  	<li><a href="#BasketBall" class="EventTypeRacour">BasketBall</a></li> 
		  	<li><a href="#Tennis" class="EventTypeRacour">Tennis</a></li>
		  	<li><a href="#Théatre" class="EventTypeRacour">Théatre</a></li>
		  	<li><a href="#Dessin" class="EventTypeRacour">Dessin</a></li>
				<li><a href="Page_Materiel.php" class="EventTypeRacour">Lisye des materiels</a></li>

		</ul>
	  </nav>

	  <div class="overlay"></div>
	
	<section class="List">
	<div class="card"  style="min-height: 615px;">
                  <div class="card-header">
                     <h5>Chercher Club</h5>
                  </div>

                  <div class="card-block">
                      <form class="form-material" method="POST" action="" style="max-height: 20vh;">

                          <div class="form-group form-default">
                              <input type="text" name="nom" placeholder="Entrer le nom du club" id="nom" class="form-control" required="">
                              <span class="form-bar"></span>
                          </div>
                          
						  <input type="submit" name="Submit" value="Submit" class="btn btn-primary py-md-3 px-md-5 me-3 mt-4" style="float: right;">
                        </form>

												<div class="container">
      <div class="form-group form-default">
				<input type="hidden" id="qrInput" value="<?= $message ?>"  class="qrInput">
      <input type="hidden" id="qrInput" value="<?= $message ?>"  class="qrInput">
      <button id="generateBtn"  class="btn btn-primary py-md-3 px-md-5 me-3 mt-4" style="float: left;" >Generate QR Code</button>
    </div>

    <div class="qr-code">
      <img src="uploadsC/qrcode.png" class="inv pos" id="qrImage">
    </div>
		<div>    <h2 >Noter le club</h2>
    <div>
      
      <span class="fas fa-star " data-star="1" ></span>
      <span class="fa fa-star" data-star="2"></span>
      <span class="fas fa-star" data-star="3"></span>
      <span class="fas fa-star" data-star="4"></span>
      <span class="fas fa-star" data-star="5"></span>
      &nbsp; rating: <span class="rating">-</span>
    </div>
    </div>


                </div>
            </div>
        </div>
				<script>
    
    var generateBtn = document.getElementById("generateBtn");
    var qrInput = document.getElementById("qrInput");
    var qrImg = document.getElementById("qrImage");

    generateBtn.onclick = function () {      
      if(qrInput.value.length > 0){ 
        document.querySelector("#qrImage").classList.remove("inv");
        //generateBtn.innerText = "Generating QR Code..."       
        qrImg.src = "https://api.qrserver.com/v1/create-qr-code/?size=170x170&data="+qrInput.value;
        qrImg.onload = function () {
          container.classList.add("active");
          generateBtn.innerText = "Generate QR Code";
        }
      }
    }
  </script>
		<ul class="Tablelist">
	<!--!  =======================Type1=========================== -->
			<li id="Theatre" style="list-style: none;">
			<!-- Courses Start -->
				<div class="container-xxl py-5 ToBeBlured">
						<div class="container">
							<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
								<h6 class="section-title bg-white text-center text-primary px-3">Clubs</h6>
								<h1 class="mb-5">Football</h1>
									<form method="post" action="" style=" max-height : 10px; max-width: 10px; top: -100px; left: 80%">
									</form>
							</div>
							<div class="row g-4 justify-content-center">
							<?php
										$listtype1 = $ClubC->listClubtype2("Football",0);
										if(isset($_POST['tri1']))
											{
                        $listtype1 = $ClubC->listClubtype2("Football",1);
												
											}
								
								
								foreach ($listtype1 as $Club)
								{
									?>
								<div class="col-lg-4 col-md-6 wow fadeInUp UnNouvEvent" data-wow-delay="0.1s">
									<input type="hidden" id="idevent" value="<?= $Club['id_Club']; ?>"/>
									<input type="hidden" id="dateevent" value="<?= $Club['type_C']; ?>"/>
									<input type="hidden" id="prixevent" value="<?= $Club['nom_C']; ?>"/>
									<div class="course-item bg-light">
										<div class="position-relative overflow-hidden">
											<img class="img-fluid" style="width: 400px; height:250px" src="uploadsC/<?= basename($Club['image']) ?>" alt="<?= $Club['nom_C'] ?>">
											<div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
											</div>
										</div>
										<div class="text-center p-4 pb-0">
											<h3 class="mb-0"><?= $Club['nom_C']; ?></h3>
											
										</div>
										<div class="d-flex border-top">
											<small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar text-primary me-2"></i><?= $Club['mailC']; ?></small>
											<small class="flex-fill text-center border-end py-2"><?php
switch ($Club['noteC']) {
  case 1:
		echo"<span class='fas fa-star checked' data-star='1' ></span>";
		echo"<span class='fas fa-star ' data-star='2' ></span>";
		echo"<span class='fas fa-star ' data-star='3' ></span>";
		echo"<span class='fas fa-star ' -star='4' ></span>";
		echo"<span class='fas fa-star ' data-star='5' ></span>";

    break;
  case 2:
    echo"<span class='fas fa-star checked' data-star='1' ></span>";
		echo"<span class='fas fa-star checked' data-star='2' ></span>";
		echo"<span class='fas fa-star ' data-star='3' ></span>";
		echo"<span class='fas fa-star ' -star='4' ></span>";
		echo"<span class='fas fa-star ' data-star='5' ></span>";
    break;
  case 3:
    echo"<span class='fas fa-star checked' data-star='1' ></span>";
		echo"<span class='fas fa-star checked' data-star='2' ></span>";
		echo"<span class='fas fa-star checked ' data-star='3' ></span>";
		echo"<span class='fas fa-star  ' -star='4' ></span>";
		echo"<span class='fas fa-star ' data-star='5' ></span>";
    break;
		case 4:
			echo"<span class='fas fa-star checked' data-star='1' ></span>";
			echo"<span class='fas fa-star checked' data-star='2' ></span>";
			echo"<span class='fas fa-star checked ' data-star='3' ></span>";
			echo"<span class='fas fa-star  checked' -star='4' ></span>";
			echo"<span class='fas fa-star ' data-star='5' ></span>";
			break;
			case 5:
				echo"<span class='fas fa-star checked' data-star='1' ></span>";
				echo"<span class='fas fa-star checked' data-star='2' ></span>";
				echo"<span class='fas fa-star checked ' data-star='3' ></span>";
				echo"<span class='fas fa-star checked ' -star='4' ></span>";
				echo"<span class='fas fa-star checked' data-star='5' ></span>";
				break;
  default:
    echo ".";
}



									
									?></small>
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
										$listtype2 = $ClubC->listClubtype2("Basketball",0);
										
								
								
								foreach ($listtype2 as $Club)
								{
									?>
							<div class="col-lg-4 col-md-6 wow fadeInUp UnNouvEvent" data-wow-delay="0.1s">
									<input type="hidden" id="idevent" value="<?= $Club['id_Club']; ?>"/>
									<input type="hidden" id="dateevent" value="<?= $Club['type_C']; ?>"/>
									<input type="hidden" id="prixevent" value="<?= $Club['nom_C']; ?>"/>
									<div class="course-item bg-light">
										<div class="position-relative overflow-hidden">
											<img class="img-fluid" style="width: 400px; height:250px" src="uploadsC/<?= basename($Club['image']) ?>" alt="<?= $Club['nom_C'] ?>">
											<div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
											</div>
										</div>
										<div class="text-center p-4 pb-0">
											<h3 class="mb-0"><?= $Club['nom_C']; ?></h3>
											
										</div>
										<div class="d-flex border-top">
											<small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar text-primary me-2"></i><?= $Club['mailC']; ?></small>
											<small class="flex-fill text-center border-end py-2"><?php
switch ($Club['noteC']) {
  case 1:
		echo"<span class='fas fa-star checked' data-star='1' ></span>";
		echo"<span class='fas fa-star ' data-star='2' ></span>";
		echo"<span class='fas fa-star ' data-star='3' ></span>";
		echo"<span class='fas fa-star ' -star='4' ></span>";
		echo"<span class='fas fa-star ' data-star='5' ></span>";

    break;
  case 2:
    echo"<span class='fas fa-star checked' data-star='1' ></span>";
		echo"<span class='fas fa-star checked' data-star='2' ></span>";
		echo"<span class='fas fa-star ' data-star='3' ></span>";
		echo"<span class='fas fa-star ' -star='4' ></span>";
		echo"<span class='fas fa-star ' data-star='5' ></span>";
    break;
  case 3:
    echo"<span class='fas fa-star checked' data-star='1' ></span>";
		echo"<span class='fas fa-star checked' data-star='2' ></span>";
		echo"<span class='fas fa-star checked ' data-star='3' ></span>";
		echo"<span class='fas fa-star  ' -star='4' ></span>";
		echo"<span class='fas fa-star ' data-star='5' ></span>";
    break;
		case 4:
			echo"<span class='fas fa-star checked' data-star='1' ></span>";
			echo"<span class='fas fa-star checked' data-star='2' ></span>";
			echo"<span class='fas fa-star checked ' data-star='3' ></span>";
			echo"<span class='fas fa-star  checked' -star='4' ></span>";
			echo"<span class='fas fa-star ' data-star='5' ></span>";
			break;
			case 5:
				echo"<span class='fas fa-star checked' data-star='1' ></span>";
				echo"<span class='fas fa-star checked' data-star='2' ></span>";
				echo"<span class='fas fa-star checked ' data-star='3' ></span>";
				echo"<span class='fas fa-star checked ' -star='4' ></span>";
				echo"<span class='fas fa-star checked' data-star='5' ></span>";
				break;
  default:
    echo ".";
}



									
									?></small>
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
										$listtype3 = $ClubC->listClubtype2("Tennis",0);
										
								
								foreach ($listtype3 as $Club)
								{
									?>
								<div class="col-lg-4 col-md-6 wow fadeInUp UnNouvEvent" data-wow-delay="0.1s">
									<input type="hidden" id="idevent" value="<?= $Club['id_Club']; ?>"/>
									<input type="hidden" id="dateevent" value="<?= $Club['type_C']; ?>"/>
									<input type="hidden" id="prixevent" value="<?= $Club['nom_C']; ?>"/>
									<div class="course-item bg-light">
										<div class="position-relative overflow-hidden">
											<img class="img-fluid" style="width: 400px; height:250px" src="uploadsC/<?= basename($Club['image']) ?>" alt="<?= $Club['nom_C'] ?>">
											<div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
											</div>
										</div>
										<div class="text-center p-4 pb-0">
											<h3 class="mb-0"><?= $Club['nom_C']; ?></h3>
											
										</div>
										<div class="d-flex border-top">
											<small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar text-primary me-2"></i><?= $Club['mailC']; ?></small>
											<small class="flex-fill text-center border-end py-2"><?php
switch ($Club['noteC']) {
  case 1:
		echo"<span class='fas fa-star checked' data-star='1' ></span>";
		echo"<span class='fas fa-star ' data-star='2' ></span>";
		echo"<span class='fas fa-star ' data-star='3' ></span>";
		echo"<span class='fas fa-star ' -star='4' ></span>";
		echo"<span class='fas fa-star ' data-star='5' ></span>";

    break;
  case 2:
    echo"<span class='fas fa-star checked' data-star='1' ></span>";
		echo"<span class='fas fa-star checked' data-star='2' ></span>";
		echo"<span class='fas fa-star ' data-star='3' ></span>";
		echo"<span class='fas fa-star ' -star='4' ></span>";
		echo"<span class='fas fa-star ' data-star='5' ></span>";
    break;
  case 3:
    echo"<span class='fas fa-star checked' data-star='1' ></span>";
		echo"<span class='fas fa-star checked' data-star='2' ></span>";
		echo"<span class='fas fa-star checked ' data-star='3' ></span>";
		echo"<span class='fas fa-star  ' -star='4' ></span>";
		echo"<span class='fas fa-star ' data-star='5' ></span>";
    break;
		case 4:
			echo"<span class='fas fa-star checked' data-star='1' ></span>";
			echo"<span class='fas fa-star checked' data-star='2' ></span>";
			echo"<span class='fas fa-star checked ' data-star='3' ></span>";
			echo"<span class='fas fa-star  checked' -star='4' ></span>";
			echo"<span class='fas fa-star ' data-star='5' ></span>";
			break;
			case 5:
				echo"<span class='fas fa-star checked' data-star='1' ></span>";
				echo"<span class='fas fa-star checked' data-star='2' ></span>";
				echo"<span class='fas fa-star checked ' data-star='3' ></span>";
				echo"<span class='fas fa-star checked ' -star='4' ></span>";
				echo"<span class='fas fa-star checked' data-star='5' ></span>";
				break;
  default:
    echo ".";
}



									
									?></small>
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
										$listtype4 = $ClubC->listClubtype2("Dessin",0);
										
								
								
								foreach ($listtype4 as $Club)
								{
									?>
								<div class="col-lg-4 col-md-6 wow fadeInUp UnNouvEvent" data-wow-delay="0.1s">
									<input type="hidden" id="idevent" value="<?= $Club['id_Club']; ?>"/>
									<input type="hidden" id="dateevent" value="<?= $Club['type_C']; ?>"/>
									<input type="hidden" id="prixevent" value="<?= $Club['nom_C']; ?>"/>
									<div class="course-item bg-light">
										<div class="position-relative overflow-hidden">
											<img class="img-fluid" style="width: 400px; height:250px" src="uploadsC/<?= basename($Club['image']) ?>" alt="<?= $Club['nom_C'] ?>">
											<div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
											</div>
										</div>
										<div class="text-center p-4 pb-0">
											<h3 class="mb-0"><?= $Club['nom_C']; ?></h3>
											
										</div>
										<div class="d-flex border-top">
											<small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar text-primary me-2"></i><?= $Club['mailC']; ?></small>
											<small class="flex-fill text-center border-end py-2"><?php
switch ($Club['noteC']) {
  case 1:
		echo"<span class='fas fa-star checked' data-star='1' ></span>";
		echo"<span class='fas fa-star ' data-star='2' ></span>";
		echo"<span class='fas fa-star ' data-star='3' ></span>";
		echo"<span class='fas fa-star ' -star='4' ></span>";
		echo"<span class='fas fa-star ' data-star='5' ></span>";

    break;
  case 2:
    echo"<span class='fas fa-star checked' data-star='1' ></span>";
		echo"<span class='fas fa-star checked' data-star='2' ></span>";
		echo"<span class='fas fa-star ' data-star='3' ></span>";
		echo"<span class='fas fa-star ' -star='4' ></span>";
		echo"<span class='fas fa-star ' data-star='5' ></span>";
    break;
  case 3:
    echo"<span class='fas fa-star checked' data-star='1' ></span>";
		echo"<span class='fas fa-star checked' data-star='2' ></span>";
		echo"<span class='fas fa-star checked ' data-star='3' ></span>";
		echo"<span class='fas fa-star  ' -star='4' ></span>";
		echo"<span class='fas fa-star ' data-star='5' ></span>";
    break;
		case 4:
			echo"<span class='fas fa-star checked' data-star='1' ></span>";
			echo"<span class='fas fa-star checked' data-star='2' ></span>";
			echo"<span class='fas fa-star checked ' data-star='3' ></span>";
			echo"<span class='fas fa-star  checked' -star='4' ></span>";
			echo"<span class='fas fa-star ' data-star='5' ></span>";
			break;
			case 5:
				echo"<span class='fas fa-star checked' data-star='1' ></span>";
				echo"<span class='fas fa-star checked' data-star='2' ></span>";
				echo"<span class='fas fa-star checked ' data-star='3' ></span>";
				echo"<span class='fas fa-star checked ' -star='4' ></span>";
				echo"<span class='fas fa-star checked' data-star='5' ></span>";
				break;
  default:
    echo ".";
}



									
									?></small>
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
							<div class="row g-4 justify-content-center">
							<?php
										$listtype5 = $ClubC->listClubtype2("Théatre",0);
										
								
								foreach ($listtype5 as $Club)
								{
									?>
								<div class="col-lg-4 col-md-6 wow fadeInUp UnNouvEvent" data-wow-delay="0.1s">
									<input type="hidden" id="idevent" value="<?= $Club['id_Club']; ?>"/>
									<input type="hidden" id="dateevent" value="<?= $Club['type_C']; ?>"/>
									<input type="hidden" id="prixevent" value="<?= $Club['nom_C']; ?>"/>
									<div class="course-item bg-light">
										<div class="position-relative overflow-hidden">
											<img class="img-fluid" style="width: 400px; height:250px" src="uploadsC/<?= basename($Club['image']) ?>" alt="<?= $Club['nom_C'] ?>">
											<div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
											</div>
										</div>
										<div class="text-center p-4 pb-0">
											<h3 class="mb-0"><?= $Club['nom_C']; ?></h3>
											
										</div>
										<div class="d-flex border-top">
											<small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar text-primary me-2"></i><?= $Club['mailC']; ?></small>
											<small class="flex-fill text-center border-end py-2"><?php
switch ($Club['noteC']) {
  case 1:
		echo"<span class='fas fa-star checked' data-star='1' ></span>";
		echo"<span class='fas fa-star ' data-star='2' ></span>";
		echo"<span class='fas fa-star ' data-star='3' ></span>";
		echo"<span class='fas fa-star ' -star='4' ></span>";
		echo"<span class='fas fa-star ' data-star='5' ></span>";

    break;
  case 2:
    echo"<span class='fas fa-star checked' data-star='1' ></span>";
		echo"<span class='fas fa-star checked' data-star='2' ></span>";
		echo"<span class='fas fa-star ' data-star='3' ></span>";
		echo"<span class='fas fa-star ' -star='4' ></span>";
		echo"<span class='fas fa-star ' data-star='5' ></span>";
    break;
  case 3:
    echo"<span class='fas fa-star checked' data-star='1' ></span>";
		echo"<span class='fas fa-star checked' data-star='2' ></span>";
		echo"<span class='fas fa-star checked ' data-star='3' ></span>";
		echo"<span class='fas fa-star  ' -star='4' ></span>";
		echo"<span class='fas fa-star ' data-star='5' ></span>";
    break;
		case 4:
			echo"<span class='fas fa-star checked' data-star='1' ></span>";
			echo"<span class='fas fa-star checked' data-star='2' ></span>";
			echo"<span class='fas fa-star checked ' data-star='3' ></span>";
			echo"<span class='fas fa-star  checked' -star='4' ></span>";
			echo"<span class='fas fa-star ' data-star='5' ></span>";
			break;
			case 5:
				echo"<span class='fas fa-star checked' data-star='1' ></span>";
				echo"<span class='fas fa-star checked' data-star='2' ></span>";
				echo"<span class='fas fa-star checked ' data-star='3' ></span>";
				echo"<span class='fas fa-star checked ' -star='4' ></span>";
				echo"<span class='fas fa-star checked' data-star='5' ></span>";
				break;
  default:
    echo ".";
}



									
									?></small>
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
