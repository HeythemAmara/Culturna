<?php
include "../Controller/ReservationC.php";
include "../Controller/EventC.php";
include "../Controller/UtilisateurC.php";
include "../Controller/ReclamationC.php";


$valeur_id = isset($_GET['val_id']) ? $_GET['val_id'] : 0;
$UtilisateurC = new UtilisateurC();
$Username= $UtilisateurC->Username($valeur_id);
$test=0;

$ReclamationC = new ReclamationC();
$list = $ReclamationC->listReclamationByID($valeur_id);
$EventC = new EventC();



?>

<!DOCTYPE html>
<html lang="en" >
  
  <head>
    <meta charset="utf-8">
    <title>Culturna</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <link rel="stylesheet" href="./assets/CSS/reclamation.css">
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.9.95/css/materialdesignicons.css" rel="stylesheet">




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
                <?php echo "<a class='nav-item nav-link ' href='Page_accueil.php?val_id=" . $valeur_id ."'>Accueil</a>"; ?>
                <?php echo "<a class='nav-item nav-link displaylogin' href='Page_Club.php?val_id=" . $valeur_id ."'>Club</a>"; ?>
                <?php echo "<a class='nav-item nav-link displaylogin' href='Page_Evenement.php?val_id=" . $valeur_id ."&creationreserv=".$test."'>Événement</a>"; ?>
                <?php echo "<a class='nav-item nav-link displaylogin active' href='Page_Reclamation.php?val_id=" . $valeur_id ."'>Réclamation</a>"; ?>
                <?php echo "<a class='nav-item nav-link displaylogin' href='Page_Produit.php?val_id=" . $valeur_id ."'>Produit</a>"; ?>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle displaylogin" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <?php echo "<a class='dropdown-item' href='Page_Reservation.php?val_id=" . $valeur_id ."'>Réservation</a>"; ?>
                        <?php echo "<a class='dropdown-item' href='Page_Transport.php?val_id=" . $valeur_id ."'>Transport</a>"; ?>
                        <?php echo "<a class='dropdown-item' href='Page_Reponse.php?val_id=" . $valeur_id ."'>Réponse</a>"; ?>
                        <?php echo "<a class='dropdown-item' href='Page_Materiel.php?val_id=" . $valeur_id ."'>Materiel</a>"; ?>
                    </div>
                </div>
                <?php echo "<a class='nav-item nav-link ' href='Page_Contact.php?val_id=" . $valeur_id ."'>Contact</a>"; ?>
                <a href="#" class="btn btn-primary py-4 px-lg-5 d-none toggle-login deconnecter hide">Rejoignez-nous<i class="fa fa-arrow-right ms-3"></i></a>
                <?php echo "<a class='btn btn-primary py-4 px-lg-5 d-none d-lg-block connecter' href='Page_profile.php?val_id=" . $valeur_id ."&creationreserv=".$test."'>".$Username."</a>"; ?>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

	  <!--! Table or list ============================================== -->
<section class="List">
 
 <div class="Tablelist">
   <div class="card">

<div class="traduction">
<div id="google_translate_element"></div>
         <script type="text/javascript">
             function googleTranslateElementInit() {
                 new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
             }
         </script>

         <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
         <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</div>
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
           
          <?php  foreach ($list as $Reclamation) {?> 
                 
                 <div class="list-grid-item mt-4 p-2">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="candidates-img float-left mr-4">
                                <img src="2.jpg" alt="" class="img-fluid d-block rounded">
                            </div>
                            <div class="candidates-list-desc job-single-meta  pt-2">
       
                  <?php echo" <h5 class='mb-2 f-19'> <a href='#' class='text-dark'> Nom: ".$Username."</a></h5>";?>
                    <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                                   
                    <?php echo"  <p class='text-muted f-15 mb-0'><i class='mdi mdi-account mr-1'></i>  Id : ". $Reclamation['id_R']."</p>";?>
                     
       
                      
                       </li>
                                    <li class="list-inline-item mr-4">
                                     
                                    <?php echo" <p class='f-15 mb-0'><a href='' class='text-muted'><i class='mdi mdi-account-child mr-1'></i>Id Client :".  $Reclamation['id_Client']."</a></p>";?>
                    
                                    </li>
                                    
       
       
                                </ul>
       
                    <?php echo " <p class='text-muted f-15 mb-0'><i class='mdi mdi-message-outline mr-1'></i>Sujet du Reclamation: ". $Reclamation['Sujet_R']."</p>";?>
       
                                <?php  echo" <h class='text-muted mt-1 mb-0'> <i class='mdi mdi-android-messages mr-1'></i> Message: </h> <p class='text-muted mt-1 mb-0'>".$Reclamation['Message_R']."</p>"; ?>
                                    
                                    
                            </div>
                        </div>
       
                        <div class="col-md-3">
                            <div class="candidates-list-fav-btn text-right">
                                <div class="fav-icon">
                                    <i class="mdi mdi-heart f-20"></i>
                                </div>
                                <div class="candidates-listing-btn mt-4">
                    <?php echo "<a class='edit-del-icon uil uil-user-minus' href='Page_Reponse.php?val_id=" . $valeur_id ."&creationreserv=".$test."'></a>"; ?>
                    <?php echo "<a class='edit-del-icon uil uil-trash-alt' href='deleteReclamation.php?val_id=" . $valeur_id ."&id_R=".$Reclamation['id_R']."'></a>"; ?>

                   
                                </div>
                            </div>
                        </div>
                    </div>
       
                    <div class="row">
                        <div class="col-lg-11 offset-lg-1">
                            <div class="candidates-item-desc">
                                <hr>
                                
                                <?php  echo " <p class='text-muted mb-2 f-14'>". $Reclamation['Statut_R']."</p>";?>
                                    
                            </div>
                        </div>
                    </div>
                    </div>

                <?php } ?>
          </table>
        <button class="uil uil-step-backward" id= "bouton-precedent1"disabled></button>
        <button class="uil uil-skip-forward" id="bouton-suivant1"></button>
      </div>
     </div>
    </div>
	</div>
  <!--////////////////////////////////////////////////-->
	
		<script>
          function search() {
             // Declare variables
                 var input, filter, table, tr, td, i, txtValue;
                                 input = document.getElementById("search-input");
                 filter = input.value.toUpperCase();
                 table = document.getElementById("tableau1");
                 tr = table.getElementsByTagName("tr");

                 // Loop through all table rows, and hide those that don't match the search query
                 for (i = 0; i < tr.length; i++) {
                   td = tr[i].getElementsByTagName("td")[0]; 
                   if (td) {
                     txtValue = td.textContent || td.innerText;
                     if (txtValue.toUpperCase().indexOf(filter) > -1) {
                       tr[i].style.display = "";
                     } else {
                       tr[i].style.display = "none";
                     }
                   }
                 }
                }
                document.getElementById("search-input").addEventListener("input", function(event) {
                    search();
                });
                document.getElementById("search-input").addEventListener("blur", function() {
                  search();
          });
        </script>

            <div class="InputlistEdit">
              <div class="card"  style="min-height: 615px;">
                  <div class="card-header">
                     <h5>ajout reclamation</h5>
                  </div>
                  <div class="card-block">
                  <form class="form-material" method="POST" action="ReclamationClient.php" onsubmit="return validateFormModifReservUser();">
                      <input type="hidden" value="<?= $valeur_id; ?>" name="idClientadd" id="idClientadd">
                          <div class="form-group form-default">
                              <input type="email" name="Emailadd" id="Emailadd" class="form-control" required="">
                              <span class="form-bar"></span>
                              <label class="float-label">Email (exa@gmail.com)</label>
                          </div>
                          <div class="form-group form-default">
                              <input type="text" name="Sujetadd" id="Sujetadd" class="form-control" required="">
                              <span class="form-bar"></span>
                              <label class="float-label">Sujet</label>
                          </div>
                          <div class="form-group form-default">
                              <textarea type="text" name="Messageadd" id="Messageadd" class="form-control" required=""></textarea>
                              <span class="form-bar"></span>
                              <label class="float-label">Message</label>
                          </div>
                          <select  type="hidden" id="Statutadd" name="Statutadd" style="display: none" >
                            <option value="En_attente">En attente</option>
                            </select>
                            <input type="submit" name="add" value="Submit" class="btn btn-primary py-md-3 px-md-5 me-3 mt-4" style="float: right;">
                        </form>
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
<script src="./assets/JS/pagination.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script  src="./assets/JS/scriptdashboard.js"></script>
<script src="./assets/JS/InputControlFront.js"></script>
<script src="./assets Dashboard/js Dashboard/Input-Variables.js"></script>
<script src="./assets/JS/tables.js"></script>



</html>

