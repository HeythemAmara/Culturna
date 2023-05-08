<?php
include '../Controller/TransportC.php';
include '../Controller/ChauffeurC.php';
include "../Controller/UtilisateurC.php";


$valeur_id = $_GET['val_id'];
$UtilisateurC = new UtilisateurC();
$Username= $UtilisateurC->Username($valeur_id);
$test=0;

$ReservationC = new TransportC();
$list = $ReservationC->listTransportpourclient($valeur_id);

?>

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8">
    <title>Culturna</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
                <?php echo "<a class='nav-item nav-link active' href='Page_accueil.php?val_id=" . $valeur_id ."'>Accueil</a>"; ?>
                <a href="#" class="nav-item nav-link displaylogin">Club</a>
                <?php echo "<a class='nav-item nav-link displaylogin' href='Page_Evenement.php?val_id=" . $valeur_id ."&creationreserv=".$test."'>Evenement</a>"; ?>
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
                <?php echo "<a class='btn btn-primary py-4 px-lg-5 d-none d-lg-block connecter' href='Page_Profile.php?val_id=" . $valeur_id ."&creationreserv=".$test."'>".$Username."</a>"; ?>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
	  <!--! Table or list ============================================== -->
	<section class="List">
<div class="Tablelist">
	<input type="text" id="search-input" class="form-style " onkeyup="search()" placeholder="Search for types of transport...">
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
					<th class="styleth">Action</th>
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
              <td>
              <div class="nav-item dropdown">
                    <a style="color: #0d6efd;" href="#" class="nav-link dropdown-toggle displaylogin" data-bs-toggle="dropdown"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                    <div class="dropdown-menu fade-down m-0" style="min-width: 10px; min-height:10px ;">
                    <a class="toggle-edit dropdown-item" style="padding: 0px 16px;"  onclick="
                                    editTranspFront(
                                      '<?=$Transport['Id_T']; ?>',
                                      '<?= $Transport['Type']; ?>',
                                      '<?= $Transport['Nbr_Pers']; ?>',
                                      '<?= $Transport['Date']; ?>',
                                      '<?= $Transport['Adresse']; ?>',
									  '<?= $Transport['Nom']; ?>',
                                      '<?= $Transport['Tel']; ?>',
									  '<?= $Transport['Message']; ?>'
                                    )">
                                  <i class="edit-del-icon uil uil-edit" style="font-size: 20px;"></i>
                                    </a>
									<?php $test=$Transport['Id_T'];
						        	echo "<a class='dropdown-item' style='padding: 0px 16px;' href='FunctiondeleteTransp.php?val_id=" . $valeur_id ."&Id_T=".$test."'><i class='edit-del-icon uil uil-trash-alt' style='font-size: 20px;'></i></a>"; ?>
                                    <a class='dropdown-item' style='padding: 0px 16px;' href="./assets/PDF/PDF_Transport.php?Id_T=<?php echo $Transport['Id_T']; ?>
                              			&Type=<?php echo $Transport['Type']; ?>
                              			&Nbr_Pers=<?php echo $Transport['Nbr_Pers']; ?>
                              			&Date=<?php echo $Transport['Date']; ?>
                              			&Adresse=<?php echo $Transport['Adresse']; ?>
                              			&Nom=<?php echo $Transport['Nom']; ?>
							  			&Tel=<?php echo $Transport['Tel']; ?>
							  			&Message=<?php echo $Transport['Message']; ?>
                              			&val_id=<?= $valeur_id; ?>"><i class="edit-del-icon uil uil-file-download-alt" style="font-size: 20px;"></i></a>
                    </div>
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
                     <h5>Modifier transport</h5>
                  </div>
                  <div class="card-block">
                      <form class="form-material" method="POST" action="FunctionUpdateTransp.php"  onsubmit="return validateFormModifTransportUser();">
					  <input type="hidden" value="<?= $valeur_id; ?>"  name="idclienta" id="idclienta">
					  <input type="hidden" name="Id_Tut" class="form-style" placeholder="Id du Transport a modifier" id="Id_Tut" >
                          <div class="form-group form-default">
                              <input type="text" name="Typeut" id="Typeut" class="form-control" required="">
                              <span class="form-bar"></span>
                              <label class="float-label">Type</label>
                          </div>
                          <div class="form-group form-default">
                              <input type="number" name="Nbr_Persut" id="Nbr_Persut" class="form-control" required="">
                              <span class="form-bar"></span>
                              <label class="float-label">Nombre de personne</label>
                          </div>
                          <div class="form-group form-default">
                              <input type="date" name="Dateut" id="Dateut" class="form-control" required="">
                              <span class="form-bar"></span>
                              <label class="float-label"></label>
                          </div>
                          <div class="form-group form-default">
                              <input type="text" name="adresseut" id="adresseut" class="form-control" required="">
                              <span class="form-bar"></span>
                              <label class="float-label">Adresse</label>
                          </div>
						  <div class="form-group form-default">
                              <input type="text" name="nameut" id="nameut" class="form-control" required="">
                              <span class="form-bar"></span>
                              <label class="float-label">Name</label>
                          </div>
						  <div class="form-group form-default">
                              <input type="text" name="numut" id="numut" class="form-control" required="">
                              <span class="form-bar"></span>
                              <label class="float-label">Numéro</label>
                          </div>
						  <div class="form-group form-default">
                              <input type="text" name="Noteut" id="Noteut" class="form-control" required="">
                              <span class="form-bar"></span>
                              <label class="float-label">Message</label>
                          </div>
						  <input type="submit" name="Update" value="Submit" class="btn btn-primary py-md-3 px-md-5 me-3 mt-4" style="float: right;">
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

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script  src="./assets/JS/scriptdashboard.js"></script>
<script src="./assets/JS/InputControlFront.js"></script>
<script src="./assets Dashboard/js Dashboard/Input-Variables.js"></script>
<script src="./assets/JS/pagination.js"></script>
<script src="./assets/JS/tables.js"></script>


</html>