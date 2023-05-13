<?php
include "../Controller/EventC.php";
include "../Controller/ReservationC.php";
include "../Controller/UtilisateurC.php";
require_once "../Controller/productC.php";
require_once "../Model/products.php";

$valeur_id = isset($_GET['val_id']) ? $_GET['val_id'] : 0;

$UtilisateurC = new UtilisateurC();
$Username= $UtilisateurC->nomUtilisateur($valeur_id);



//dalou product
$productC = new productC();
$listproducts = $productC->listProducts();
///

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets Dashboard/img Dashboard/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets Dashboard/img Dashboard/favicon.png">
  <title>
    Culturna
  </title>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <link href="./assets Dashboard/CSS Dashboard/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/CSS/Calendrier.css" rel="stylesheet" />
  <link href="./assets Dashboard/CSS Dashboard/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <link id="pagestyle" href="./assets Dashboard/CSS Dashboard/material-dashboard.css" rel="stylesheet" />
  <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
  <link id="pagestyle" href="./assets Dashboard/CSS Dashboard/dashboard.css" rel="stylesheet" />
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  
</head>

<body class="g-sidenav-show  bg-gray-200">
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark ToBeBlured" id="sidenav-main">
    <div class="sidenav-header">
      <a class="navbar-brand m-0" href="#" target="_blank">
        <img src="./assets Dashboard/img Dashboard/logo-white.png" class="navbar-brand-imgg h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Culturna</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
        <?php echo "<a href='listUtilisateurs.php?val_id=" . $valeur_id ."' class='nav-link text-white'>
            <div class='text-white text-center me-2 d-flex align-items-center justify-content-center'>
              <i class='material-icons opacity-10 uil uil-user'></i>
            </div>
            <span class='nav-link-text ms-1'>Utilisateur</span>
          </a>"; ?>
        </li>
        <li class="nav-item">
          <?php echo "<a href='listClub.php?val_id=" . $valeur_id ."'class='nav-link text-white'>
            <div class='text-white text-center me-2 d-flex align-items-center justify-content-center'>
              <i class='material-icons opacity-10 uil uil-volleyball'></i>
            </div>
            <span class='nav-link-text ms-1'>Club</span>
          </a>"; ?>
        </li>
        <li class="nav-item">
        <?php echo "<a href='listEvent.php?val_id=" . $valeur_id ."'class='nav-link text-white'>
            <div class='text-white text-center me-2 d-flex align-items-center justify-content-center'>
              <i class='material-icons opacity-10 uil uil-calendar-alt'></i>
            </div>
            <span class='nav-link-text ms-1'>Événement</span>
          </a>"; ?>
        </li>
        <li class="nav-item">
          <?php echo "<a href='listProduct.php?val_id=" . $valeur_id ."'class='nav-link text-white active bg-gradient-primary'>
            <div class='text-white text-center me-2 d-flex align-items-center justify-content-center'>
              <i class='material-icons opacity-10 uil uil-box'></i>
            </div>
            <span class='nav-link-text ms-1'>Produit</span>
          </a>"; ?>
        </li>
        <li class="nav-item">
          <?php echo "<a href='listReclamation.php?val_id=" . $valeur_id ."'class='nav-link text-white'>
            <div class='text-white text-center me-2 d-flex align-items-center justify-content-center'>
              <i class='material-icons opacity-10 uil uil-notes'></i>
            </div>
            <span class='nav-link-text ms-1'>Réclamation</span>
          </a>"; ?>
        </li>
        <li class="nav-item">
          <?php echo "<a href='listChauffeur.php?val_id=" . $valeur_id ."' class='nav-link text-white'>
            <div class='text-white text-center me-2 d-flex align-items-center justify-content-center'>
              <i class='material-icons opacity-10 uil uil-truck'></i>
            </div>
            <span class='nav-link-text ms-1'>Transport</span>
          </a>"; ?>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center"></div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="#" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <a class="d-sm-inline d-none" href="Page_ProfileAdmin.php?val_id=<?= $valeur_id; ?>"><?php foreach ($Username as $Userr){ echo $Userr['Username']; } ?></a> 
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0 btnChat">
                <i class="uil uil-chat fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="./assets Dashboard/img Dashboard/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                        <span class="font-weight-bold">Nouveau message</span> de Laure
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          il y a 13 minutes
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="./assets Dashboard/img Dashboard/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                        <span class="font-weight-bold">Nouvel album</span> par Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 jour
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>carte de crédit</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                        Paiement effectué avec succès
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 jours
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4 container-calender slide-out-right calendrierhidden calendrieraffiche" >
      
        <!-- Calendar -->


    <div class="container" >
      <div class="left">
        <div class="calendar ">
          <div class="month">
            <i class="fas fa-angle-left prev"></i>
            <div class="date">december 2015</div>
            <i class="fas fa-angle-right next"></i>
          </div>
          <div class="weekdays">
            <div>Sun</div>
            <div>Mon</div>
            <div>Tue</div>
            <div>Wed</div>
            <div>Thu</div>
            <div>Fri</div>
            <div>Sat</div>
          </div>
          <div class="days"></div>
          <div class="goto-today">
            <div class="goto">
              <input type="text" placeholder="mm/yyyy" class="date-input" />
              <button class="goto-btn">Go</button>
            </div>
            <button class="today-btn">Today</button>
          </div>
        </div>
      </div>
      <div class="right">
        <div class="today-date">
          <div class="event-day">wed</div>
          <div class="event-date">12th december 2022</div>
        </div>
        <div class="events"></div>
        <div class="add-event-wrapper">
          <div class="add-event-header">
            <div class="title">Add Note</div>
            <i class="fas fa-times close"></i>
          </div>
          <div class="add-event-body">
            <div class="add-event-input">
              <input type="text" placeholder="Note Name" class="event-name" />
            </div>
            <div class="add-event-input">
              <input
                type="text"
                placeholder="Note Time From"
                class="event-time-from"
              />
            </div>
            <div class="add-event-input">
              <input
                type="text"
                placeholder="Note Time To"
                class="event-time-to"
              />
            </div>
          </div>
          <div class="add-event-footer">
            <button class="add-event-btn">Add Note</button>
          </div>
        </div>
      </div>
      <button class="add-event">
        <i class="fas fa-plus"></i>
      </button>
  </div>



        <!-- End of calendar -->
        
      <!--
        <div class="row">
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Today's Money</p>
                <h4 class="mb-0">$53k</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Today's Users</p>
                <h4 class="mb-0">2,300</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
            </div>
          </div>
        </div>
      </div>-->
        
      </div>
      <div class="row mt-4">
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <div class="chart">
                  <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
            </div>
            <!-- heree -->
 
            <?php
// Connexion à la base de données
$pdo = config::getConnexion();

// Requête SQL pour récupérer les données de la première statistique
$sql1 = "SELECT type, COUNT(*) as nb_events FROM event GROUP BY type";

// Exécution de la requête SQL pour la première statistique
$stmt1 = $pdo->query($sql1);

// Récupération des résultats sous forme d'un tableau pour la première statistique
$results1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);

// Construction du tableau de données pour la première statistique
$data1 = array();
foreach ($results1 as $row) {
    $type = $row['type'];
    $count = $row['nb_events'];
    $data1[$type] = $count;
}

$pdo = config::getConnexion();

// Requête SQL pour récupérer le total des quantités
$sql = "SELECT SUM(quantity_disp) as total_quantity FROM products";

// Exécution de la requête SQL
$stmt = $pdo->query($sql);

// Récupération du résultat sous forme d'un tableau associatif
$result = $stmt->fetch(PDO::FETCH_ASSOC);

// Récupération de la valeur de la colonne "total_quantity"
$totalQuantity = $result['total_quantity'];

// Requête SQL pour récupérer les données de la deuxième statistique
$sql2 = "SELECT MONTH(date) as month1, COUNT(*) as count FROM event GROUP BY  MONTH(date)";

// Exécution de la requête SQL pour la deuxième statistique
$stmt2 = $pdo->prepare($sql2);
$stmt2->execute();

// Récupération des résultats sous forme d'un tableau pour la deuxième statistique
$results2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

// Construction du tableau de données pour la deuxième statistique
$data2 = array();
foreach ($results2 as $row) {

    $month2 = $row['month1'];
    $count = $row['count'];
    $label = date('M ', mktime(0, 0, 0, $month2, 1)); // formatage du label
    $data2[$label] = $count;
}

// Exécute la requête SQL pour récupérer les données de nombre total de prix par mois
$sql3 = "SELECT MONTH(date) as month2, SUM(prix) as total_prix FROM event GROUP BY MONTH(date)";
$stmt3 = $pdo->prepare($sql3);
$stmt3->execute();
$results3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);

// Crée un tableau de labels de mois et de données de nombre total de prix
$label3 = [];
$data3 = [];
foreach ($results3 as $row) {
    $month3 = $row['month2'];
    $total_prix = $row['total_prix'];
    $label3[] = date('M', mktime(0, 0, 0, $month3, 1));
    $data3[] = $total_prix;
}
?>
<!------selon le type--------------->
            <div class="card-body">
              <h6 class="mb-0 ">Nombre des produits</h6>
              <p class="text-sm ">Nombre des produits disponible</p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card z-index-2  ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                <div class="chart">
                  <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
            </div>
            <!-----------------selon date-------------------------->

            <div class="card-body">
              <h6 class="mb-0 "> Quantité de produits</h6>
              <p class="text-sm ">Quantité de produits disponible</p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm"> mis à jour il y a 4 minutes </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-4 mb-3">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                <div class="chart">
                  <canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
            </div>
            <!-----------------------selon prix------------------------------------->

            <div class="card-body">
              <h6 class="mb-0 ">Prix des produits</h6>
              <p class="text-sm ">Gains mensuels</p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm">juste mis à jour</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class="row mb-4 sectionphp">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4 ">
          <div class="card tablediv">
            <div class="card-body px-0 pb-2 tableviewdiv">
                        <!--! ====================================================== Tableauxxxx Lennnnaaaaa -->
                        <h3>---Produit---</h3>
                  
                        <input type="text" id="search-input" class="form-style" onkeyup="search()" placeholder="Chercher le nom du produit...">
                        <select name="sort-by-price" id="sort-by-price" class="form-style">
                           <option value="" selected disabled>Trier par prix</option>
                           <option value="desc">Prix décroissant</option>
                           <option value="asc">Prix croissant</option>
                        </select>
                        <button class="btninput " onclick="sortTableByQuantity()"> Trier quantité</button>

                        <table class="tableview tableau1" id="tableau1">
				                <tr class="TitleTab">
								                  <th class="styleth">Produit</th>
									                <th class="styleth">Nom</th>
									                <th class="styleth">description</th>
									                <th class="styleth">Prix</th>								                
									                <th class="styleth">Image</th>
									                <th class="styleth">quantité</th>
				                	        <th><a class="toggle-add"><i class="edit-del-icon uil uil-book-medical"></i></a></th>
				                </tr>
                        <?php
                          foreach ($listproducts as $product) 
                          {
                          ?>                    

				                  	<tr>
									               <td class="styleth"><?= $product['id']; ?></td>
                                 <td class="styleth"><?= $product['name']; ?></td>
                                 <td class="styleth"><?= $product['description']; ?></td>
                                 <td class="styleth"><?= $product['price']; ?></td>                           
                                 
                                 <td class="styleth">
                                 <img class="product-image" src="ImageProduit/<?= basename($product['image']) ?>" alt="<?= $product['image'] ?>" width="80"></td>
						                     <td class="styleth"><?= $product['quantity_disp'] ?></td>
				                  		   <td>
                              <a class="toggle-edit" onclick="
                                    editproducts(
                                      '<?=$product['id']; ?>',
                                      '<?= $product['name']; ?>',
                                      '<?= $product['description']; ?>',                                    
                                      '<?= $product['price']; ?>',
                                      '<?= $product['quantity_disp']; ?>'
                                    )">
                                  <i class="edit-del-icon uil uil-edit"></i>
                                    </a>
                                    <a href="deleteProduct.php?id=<?php echo $product['id']; ?>&val_id=<?= $valeur_id; ?>"><i class="edit-del-icon uil uil-trash-alt"></i></a>
				                  		</td>
				                  	</tr>
                                      <?php
                          }
                          ?>		
               </table>  
                  <button class="uil uil-step-backward" id= "bouton-precedent1"disabled></button>
                  <button class="uil uil-skip-forward" id="bouton-suivant1"></button>
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
                   td = tr[i].getElementsByTagName("td")[1]; 
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

          document.getElementById("sort-by-price").addEventListener("change", function() {
    var table, rows, switching, i, x, y, shouldSwitch;
    table = document.getElementById("tableau1");
    switching = true;

    // Run loop until no switching is needed
    while (switching) {
        switching = false;
        rows = table.getElementsByTagName("tr");
        for (i = 1; i < (rows.length - 1); i++) {
            shouldSwitch = false;
            x = rows[i].getElementsByTagName("td")[3];
            y = rows[i + 1].getElementsByTagName("td")[3];
            if (document.getElementById("sort-by-price").value == "desc") {
                if (Number(x.innerHTML) < Number(y.innerHTML)) {
                    shouldSwitch = true;
                    break;
                }
            } else if (document.getElementById("sort-by-price").value == "asc") {
                if (Number(x.innerHTML) > Number(y.innerHTML)) {
                    shouldSwitch = true;
                    break;
                }
            }
        }
        if (shouldSwitch) {
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
        }
    }
});

function sortTableByQuantity() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("tableau1");
  switching = true;
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("td")[5];
      y = rows[i + 1].getElementsByTagName("td")[5];
      /* Check if the two rows should switch place,
      based on the quantity value: */
      if (parseInt(x.textContent) > parseInt(y.textContent)) {
        // If so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}


        </script>
        
<!-- Le code HTML est inchangé -->

        <div class="col-lg-4 col-md-6">
          <div class="card inputdivadd InputlistAdd slide-in-right">


          <!--! ======================================= Input Ajout Modif       -->
			  <form  id="eventForm"class="form-group" method="POST" enctype="multipart/form-data"  action="add_product.php?val_id=<?= $valeur_id; ?>" onsubmit="return validateFormAddEvent()" >          
        
              <ul>
					<li>
						<h3> Ajouter Produit</h3>
					</li>
					<li>
					<input type="text" name="name" class="form-style" placeholder="Nom" id="name" onblur="checkName()" autocomplete="off"  required>
						<i class="input-icon uil uil-clipboard"></i>
            <p id="nameError" style="color:red; display:none;">Veuillez entrer un nom avec une majuscule.</p>
            </li>
					<li>
						<input type="text" name="description" class="form-style" placeholder="description" id="description" onblur="checkDescriptionu()"autocomplete="off"  required>
						<i class="input-icon uil uil-clipboard"></i>
            <p id="descriptionError" style="color:red; display:none;">Veuillez entrer une description valide.</p>
            </li>
					<li>
						<input type="number" name="price" class="form-style" placeholder="Prix" id="price">
						<i class="input-icon uil uil-usd-circle"></i>
                        </li>
					<li>
					
						<input type="file" name="image" class="form-style" placeholder="Image" id="imagea">
						<i class="input-icon uil uil-image"></i>
					</li>
					<li>
						<input type="number" name="quantity_disp" class="form-style" placeholder="quantity_disp" id="nbrPlaceMaxa">
						<i class="input-icon uil uil-clipboard"></i>
                    </li>
					</li>
				</ul>
				<input type="submit" name="Add" value="Submit" class="btninput mt-4 Add-event-PHP-JS" >
			  </form>
          </div>
        
    <div class="card inputdivedit InputlistEdit slide-out-right">
        <!--! ====================================================== Input Ajout Modif       -->
        <form  class="form-group" method="POST" enctype="multipart/form-data" action="updateProduct.php"> 
				
        <ul>
					<li>
						<h3>Modifier Produit</h3>

                        </li>
					<li>
          <input type="number" name="id" class="form-style" placeholder="id produit a Modifier" id="id">  
            <i class="input-icon uil uil-parcel"></i>
            
            </li>
					<li>
          <input type="text" name="nameuu" class="form-style" placeholder="Nom"  id="nameuu" onblur="checkNameupdate()" autocomplete="off">
          <i class="input-icon uil uil-clipboard"></i>
          <p id="nameupdate" style="color:red; display:none;">Veuillez entrer un nom avec une majuscule.</p>
          </li>
		    <li>		
					<input type="text" name="descriptionu" class="form-style" placeholder="description" id="descriptionu" onblur="checkDescription2()" autocomplete="off">
						<i class="input-icon uil uil-file-landscape"></i>
            <p id="descriptionError" style="color:red; display:none;">Veuillez entrer une description valide.</p>
            </li>
              <li>

					<input type="number" name="priceu" class="form-style" placeholder="Prix" id="priceu" autocomplete="off">
                    <i class="input-icon uil uil-usd-circle"></i>
					</li>
                  <li>

					<input type="file" name="imageu" class="form-style" placeholder="image" id="imageu" autocomplete="off">
                    <i class="input-icon uil uil-image"></i>
                   </li>
                  <li>

          <input type="number" name="quantity_dispu" step="0.01" min="0"  max="999" class="form-style" placeholder="quantity disp" id="quantity_dispu"  min="-1" max="999" >
          <i class="input-icon uil uil-box"></i>
					</li>
					</ul>
				<input type="submit" name="Update" value="Submit" class="btn mt-4">
			</form>

    </div>
 </div>
      </section>
          <!--! ====================================================== Input Ajout Modif       -->
          </div>
          <div class="card inputdivedit InputlistEdit2 slide-out-right">
        <!--! ====================================================== Input Ajout Modif       -->
          </div>
        </div>
      </section>
      <footer class="footer py-4  footerpageadmin ToBeBlured">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                fabriqué avec <i class="fa fa-heart"></i>par
                <a href="#" class="font-weight-bold" target="_blank">Skapere</a>
                pour une meilleure expérience.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="#" class="nav-link text-muted" target="_blank">Skapere</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link text-muted" target="_blank">À propos de nous</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link text-muted" target="_blank">Instagram</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link pe-0 text-muted" target="_blank">Facebook</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin ps ToBeBlured">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <p>Voir nos options de tableau de bord.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Couleur de la barre latérale</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Type de navigation latérale</h6>
          <p class="text-sm">Choisissez entre 2 types de sidenav différents.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Sombre</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">Blanc</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">Vous pouvez changer le type de sidenav uniquement sur la vue du bureau.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Barre de navigation fixe</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Blanc / Sombre</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets Dashboard/js Dashboard/core/popper.min.js"></script>
  <script src="./assets Dashboard/js Dashboard/core/bootstrap.min.js"></script>
  <script src="./assets Dashboard/js Dashboard/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets Dashboard/js Dashboard/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets Dashboard/js Dashboard/plugins/chartjs.min.js"></script>
  <script>
 
    var ctx = document.getElementById("chart-bars").getContext("2d");
   new Chart(ctx, {
      type: "bar",
      data: {
        labels: <?php echo json_encode(array_column($results1, 'type')); ?>,
        datasets: [{
          label: "Nombre d'événements",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: <?php echo json_encode(array_column($results1, 'nb_events')); ?>,
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: <?php echo max(array_column($results1, 'nb_events')); ?>,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });


  var ctx2 = document.getElementById("chart-line").getContext("2d");

new Chart(ctx2, {
  type: "line",
  data: {
    labels: <?= json_encode(array_keys($data2)) ?>,
    datasets: [{
      label: 'Nombre d\'événements',
      tension: 0,
      borderWidth: 0,
      pointRadius: 5,
      pointBackgroundColor: "rgba(255, 255, 255, .8)",
      pointBorderColor: "transparent",
      borderColor: "rgba(255, 255, 255, .8)",
      borderColor: "rgba(255, 255, 255, .8)",
      borderWidth: 4,
      backgroundColor: "transparent",
      fill: true,
      data: <?= json_encode(array_values($data2)) ?>,
      maxBarThickness: 6

    }],
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: {
        display: false,
      }
    },
    interaction: {
      intersect: false,
      mode: 'index',
    },
    scales: {
      y: {
        grid: {
          drawBorder: false,
          display: true,
          drawOnChartArea: true,
          drawTicks: false,
          borderDash: [5, 5],
          color: 'rgba(255, 255, 255, .2)'
        },
        ticks: {
          display: true,
          color: '#f8f9fa',
          padding: 10,
          font: {
            size: 14,
            weight: 300,
            family: "Roboto",
            style: 'normal',
            lineHeight: 2
          },
        }
      },
      x: {
        grid: {
          drawBorder: false,
          display: false,
          drawOnChartArea: false,
          drawTicks: false,
          borderDash: [5, 5]
        },
        ticks: {
          display: true,
          color: '#f8f9fa',
          padding: 10,
          font: {
            size: 14,
            weight: 300,
            family: "Roboto",
            style: 'normal',
            lineHeight: 2
          },
        }
      },
    },
  },
});

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: <?php echo json_encode($label3); ?>,
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: <?php echo json_encode($data3); ?>,
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#f8f9fa',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="./assets Dashboard/js Dashboard/material-dashboard.min.js"></script>
  <script src="./assets Dashboard/js Dashboard/Input-Animation.js"></script>
  <script src="./assets Dashboard/js Dashboard/Input-Variables.js"></script>
  <script src="./assets/JS/InputControl.js"></script>
  <script src="./assets/JS/pagination.js"></script>
  <script src="./assets/JS/Calendrier.js"></script>

  <script>

function checkName() {
    var nameInput = document.getElementById("name");
    var nameValue = nameInput.value;
    const longueur = nameValue.length;
    const premiereLettre = nameValue.charAt(0);
    if (longueur < 4) {
      document.getElementById("nameError").innerHTML = "Le nom doit contenir au moins 4 lettres";
      document.getElementById("nameError").style.display = "block";
      nameInput.classList.add("error");
      nameInput.value = '';
      nameInput.focus();
    } else if (longueur > 15) {
      document.getElementById("nameError").innerHTML = "Le nom ne peut pas contenir plus de 12 lettres";
      document.getElementById("nameError").style.display = "block";
      nameInput.classList.add("error");
      nameInput.value = '';
      nameInput.focus();
    } else if (premiereLettre !== premiereLettre.toUpperCase()) {
      document.getElementById("nameError").innerHTML = "La première lettre doit être en majuscule";
      document.getElementById("nameError").style.display = "block";
      nameInput.classList.add("error");
      nameInput.value = '';
      nameInput.focus();
    } else {
      document.getElementById("nameError").style.display = "none";
      nameInput.classList.remove("error");
    }
  }
  
    function checkDescriptionu() {
      var descriptionInput = document.getElementById("descriptionu");
      var descriptionValue = descriptionInput.value;
      if (descriptionValue !== '') {
        if (descriptionValue.length < 10) {
          document.getElementById("descriptionError").style.display = "block";
          descriptionInput.classList.add("error");
          descriptionInput.value = '';
          descriptionInput.focus();
        } else {
          document.getElementById("descriptionError").style.display = "none";
          descriptionInput.classList.remove("error");
        }
      } else {
        document.getElementById("descriptionError").style.display = "none";
        descriptionInput.classList.remove("error");
      }
    }
    
    document.getElementById("description").addEventListener("blur", checkDescription);
  
  
  
  
  
  
  
  
  
  
    function setupQuantityControls() {
      // Get all the quantity controls
      const quantityControls = document.querySelectorAll('.quantity-control');
    
      // Loop through the quantity controls
      quantityControls.forEach(quantityControl => {
        // Get the input field and buttons
        const quantityInput = quantityControl.querySelector('.quantity-input');
        const decrementBtn = quantityControl.querySelector('.decrement-quantity-btn');
        const incrementBtn = quantityControl.querySelector('.increment-quantity-btn');
    
        // Add click event listeners to the buttons
        decrementBtn.addEventListener('click', () => {
          // Decrement the quantity only if it's greater than 1
          if (quantityInput.value > 1) {
            quantityInput.value--;
          }
        });
    
        incrementBtn.addEventListener('click', () => {
          // Increment the quantity
          quantityInput.value++;
        });
      });
    }
    
    // Call the function to set up the quantity controls
    setupQuantityControls();
    
  
  
  
  
  
  
  
  
  
  
  
    //input control
  
    function checkNameupdate() {
      var nameInput = document.getElementById("nameuu");
      var nameValue = nameInput.value;
      const longueur = nameValue.length;
      const premiereLettre = nameValue.charAt(0);
      if (longueur < 4) {
        document.getElementById("nameupdate").innerHTML = "Le nom doit contenir au moins 4 lettres";
        document.getElementById("nameupdate").style.display = "block";
        nameInput.classList.add("error");
        nameInput.value = '';
        nameInput.focus();
      } else if (longueur > 20) {
        document.getElementById("nameupdate").innerHTML = "Le nom ne peut pas contenir plus de 12 lettres";
        document.getElementById("nameupdate").style.display = "block";
        nameInput.classList.add("error");
        nameInput.value = '';
        nameInput.focus();
      } else if (premiereLettre !== premiereLettre.toUpperCase()) {
        document.getElementById("nameupdate").innerHTML = "La première lettre doit être en majuscule";
        document.getElementById("nameupdate").style.display = "block";
        nameInput.classList.add("error");
        nameInput.value = '';
        nameInput.focus();
      } else {
        document.getElementById("nameupdate").style.display = "none";
        nameInput.classList.remove("error");
      }
    }

    function checkDescription2() {
      var descriptionInput = document.getElementById("descriptionu");
      var descriptionValue = descriptionInput.value;
      if (descriptionValue !== '') {
        if (descriptionValue.length < 10) {
          document.getElementById("descriptionError").style.display = "block";
          descriptionInput.classList.add("error");
          descriptionInput.value = '';
          descriptionInput.focus();
        } else {
          document.getElementById("descriptionError").style.display = "none";
          descriptionInput.classList.remove("error");
        }
      } else {
        document.getElementById("descriptionError").style.display = "none";
        descriptionInput.classList.remove("error");
      }
    }
    
    document.getElementById("description").addEventListener("blur", checkDescription);
  
  
  
  </script>
</body>

</html>