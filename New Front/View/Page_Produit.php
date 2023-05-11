<?php
include "../Controller/EventC.php";
include "../Controller/UtilisateurC.php";
include '../Controller/productC.php';
require_once '../Controller/cartC.php';
require_once "../Model/cart.php";
require_once "../Model/products.php";
require_once "../View/panier.php";




$EventC = new EventC();
$productC= new ProductC();
$productC= new ProductC();
$products = $productC->getProducts();

$cartCount = (new CarteC())->countCarts(); 
$products = $productC->getProducts();
$valeur_id = isset($_GET['val_id']) ? $_GET['val_id'] : 0;
$resevtest = isset($_GET['creationreserv']) ? $_GET['creationreserv'] : 0;
$UtilisateurC = new UtilisateurC();
if($valeur_id == 0)
{
    $Username = "Client";
}
else
{
    $Username= $UtilisateurC->Username($valeur_id);
}
//$EmailUser=$UtilisateurC->EmailUtilisateur($valeur_id);


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
                <?php echo "<a class='nav-item nav-link displaylogin' href='Page_Evenement.php?val_id=" . $valeur_id ."&creationreserv=". 0 ."'>Événement</a>"; ?>
                <?php echo "<a class='nav-item nav-link displaylogin' href='Page_Reclamation.php?val_id=" . $valeur_id ."'>Réclamation</a>"; ?>
                <?php echo "<a class='nav-item nav-link displaylogin active' href='Page_Produit.php?val_id=" . $valeur_id ."'>Produit</a>"; ?>
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
                <?php echo "<a class='btn btn-primary py-4 px-lg-5 d-none d-lg-block connecter' href='Page_profile.php?val_id=" . $valeur_id ."&creationreserv=". 0 ."'>".$Username."</a>"; ?>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
       
	<!-- Debut Panier header -->
    
	<div class="humberger__menu__cart__Produit " style=" float: right; margin-right: 20px; margin-top:20px;" >
            <ul>
                <li><a href="#" class="btn_Panier"><i class="fa fa-shopping-bag"></i> <span><?php echo $cartCount ?></span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$<?php echo $total_price  ?></span></div>
    </div>

	<!-- Fin Panier header -->


	<!-- Debut Des Produits -->

    <section class="featured spad">
    <div class="row featured__filter">
        <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-Product">
                        <h2>Nos Produit</h2>
                    </div>
                </div>
            </div>
        <?php foreach ($products as $product): ?>
        <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat" style="height:60vh;">
            <div class="featured__item "style="height:60vh;">
                <form method="POST"  enctype="multipart/form-data"  action="add_Carte.php" style="height:60vh;">
                    <div class="featured__item__pic set-bg" data-setbg="ImageProduit/<?= basename($product->getImage()) ?>">
                        <img src="ImageProduit/<?= basename($product->getImage()) ?>" alt="<?= $product->getName() ?>">
                        <ul class="featured__item__pic__hover">
                            <li>
                                
                            </li>
                            <li></li>
                            <li></li>
                            <li></li>

                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#"><?= $product->getName() ?></a></h6>
                        <h5><?= $product->getPrice() ?>$ /-</h5>
                        <input type="hidden" name="product_id" value="<?= $product->getId() ?>">
                        <input  class="quantity" type="number"   name="quantity" min="1" value="1">                    
                        <input type="submit"  class ="add_to_cart"name="add_to_cart" id="add_to_cart" value="Add to Cart">
                        <h6><?= $product->checkStockStatus($product) ?></h6>
                    </div>
                </form>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>



<style>
    .add_to_cart {
	background-color: #007bff;
	border: none;
	border-radius: 5px;
	color: #fff;
	cursor: pointer;
	font-size: 14px;
	padding: 5px 10px;
  }
  .quantity {
  border: 1px solid #ccc;
  border-radius: 4px;
  padding: 8px 12px;
  font-size: 16px;
  outline: none;
  width: 60px;
  text-align: center;
}
.add_to_cart:hover {
  background-color: #0062cc;
  transition: all 0.3s ease;
}
</style>


	<!-- Fin Des Produits -->
	
	<!-- Debut Panier -->

	<section class="SectionPanier flip-out-hor-top hide">>
    <div style="height:100%; width:100%; top:0; left:0; ">
        <label for="search-input" style="float:right; transform: translateY(48px);">
            <a href="#" id="closebtn"><i class="uil uil-times-circle"></i></a>
        </label>
        <input type="text" id="search-input" name="search-input" class="form-style" style="border: 1px solid rgba(0,0,0,.500);" onkeyup="search()" placeholder="Search for product name...">
        <div class="card " style="height:500px; width:100%;border: 1px solid rgba(0,0,0,.500);">
            <div class="card-header"><h3>Panier</h3> 
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                    </ul>
                </div>
            </div>
            
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table table-hover tableau1" id="tableau1">
                    
                        <thead>
                            <tr>
                                <th class="styleth">Product Name</th>
                                <th class="styleth">Description</th>
                                <th class="styleth">Price</th>
                                <th class="styleth">Quantity</th>
                                <th class="styleth">Subtotal</th>
                                <th class="styleth">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($products_in_cart as $product_in_cart): ?>
    <tr>
        <td><?= $product_in_cart['name'] ?></td>
        <td><?= $product_in_cart['description'] ?></td>
        <td><?= $product_in_cart['price'] ?></td>
        <td><?= $product_in_cart['quantity'] ?></td>
        <td><?= $product_in_cart['subtotal'] ?></td>
        <td>
            <a href="./assets/PDF/PDF_Chauffeur.php?a=<?php echo $product_in_cart['id']; ?>&b=<?php echo $product_in_cart['name']; ?>&c=<?php echo $product_in_cart['description']; ?>&d=<?php echo $product_in_cart['price']; ?>&e=<?php echo $product_in_cart['quantity']; ?>&f=<?php echo $product_in_cart['subtotal']; ?>&g=<?= $valeur_id; ?>">
                <i class="edit-del-icon uil uil-file-download-alt"></i>
            </a>
            <div class="nav-item dropdown">
                <a style="color: #0d6efd;" href="#" class="nav-link dropdown-toggle displaylogin" data-bs-toggle="dropdown"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                <div class="dropdown-menu fade-down m-0" style="min-width: 10px; min-height:10px ;">
                    <a class="toggle-edit dropdown-item" style="padding: 0px 16px;">
                        <i class="edit-del-icon uil uil-edit" style="font-size: 20px;"></i>
                    </a>
                    <a class="dropdown-item" style="padding: 0px 16px;" href="deleteCarte.php?idc=<?= $product_in_cart['idc'] ?>">
                        <i class="edit-del-icon uil uil-trash-alt" style="font-size: 20px;"></i>
                    </a>
                </div>                                                                                       
            </div>
        </td>
    </tr>
<?php endforeach;?>

</tbody>
</table>
<a href="./assets/PDF/PDF_Produit.php" target="_blank">Facture</a>


                  <script src="html2pdf.bundle.js"></script> 
    
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
		
	</section>

	<!-- Fin Panier -->


		

    

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
<script src="./assets/JS/InputControlFront.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script> 
<script src="./assets/JS/Panier.js"></script>



</html>
