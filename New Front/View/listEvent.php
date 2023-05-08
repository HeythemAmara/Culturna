<?php
include "../Controller/EventC.php";
include "../Controller/ReservationC.php";
include "../Controller/UtilisateurC.php";

$valeur_id = isset($_GET['val_id']) ? $_GET['val_id'] : 0;
$ajoutfail = isset($_GET['ajoutfail']) ? $_GET['ajoutfail'] : 0;

$UtilisateurC = new UtilisateurC();
$Username= $UtilisateurC->nomUtilisateur($valeur_id);

$EventC = new EventC();
$listEvent = $EventC->listEvent();
$event_calender = $EventC->getDatesEvenements();

$ReservationC = new ReservationC();
$listReservation = $ReservationC->listReservation();
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
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
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
            <span class='nav-link-text ms-1'>User</span>
          </a>"; ?>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10 uil uil-volleyball"></i>
            </div>
            <span class="nav-link-text ms-1">Club</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10 uil uil-calendar-alt"></i>
            </div>
            <span class="nav-link-text ms-1">Event</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10 uil uil-box"></i>
            </div>
            <span class="nav-link-text ms-1">Product</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10 uil uil-notes"></i>
            </div>
            <span class="nav-link-text ms-1">Reclamations</span>
          </a>
        </li>
        <li class="nav-item">
        <?php echo "<a href='listChauffeur.php?val_id=" . $valeur_id ."' class='nav-link text-white'>
            <div class='text-white text-center me-2 d-flex align-items-center justify-content-center'>
              <i class='material-icons opacity-10 uil uil-truck'></i>
            </div>
            <span class='nav-link-text ms-1'>Transportations</span>
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
                <a class="d-sm-inline d-none" href="Page_Profile.php?val_id=<?= $valeur_id; ?>"><?php foreach ($Username as $Userr){ echo $Userr['Username']; } ?></a> 
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
              <a href="javascript:;" class="nav-link text-body p-0 btnCalendar">
                <i class="uil uil-calendar-alt fixed-plugin-button-nav cursor-pointer"></i>
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
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
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
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
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
                          <title>credit-card</title>
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
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
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
              <h6 class="mb-0 ">Types of the events</h6>
              <p class="text-sm ">Number of events for each type</p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm"> campaign sent 2 days ago </p>
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
              <h6 class="mb-0 "> Dates of the events </h6>
              <p class="text-sm ">Number of events for each month</p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm"> updated 4 min ago </p>
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
              <h6 class="mb-0 ">Price of the events </h6>
              <p class="text-sm ">Monthly earnings</p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm">just updated</p>
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
                        <h3>---Event---</h3>
                  
                        <input type="text" id="search-input" class="form-style" onkeyup="search()" placeholder="Search for event name...">
                        <select name="sort-by-price" id="sort-by-price" class="form-style">
                           <option value="" selected disabled>Trier par prix</option>
                           <option value="desc">Prix décroissant</option>
                           <option value="asc">Prix croissant</option>
                        </select>
                        <button class="btninput " onclick="sortTableByDate()">Trier Date </button>

                        <table class="tableview tableau1" id="tableau1">
				                <tr class="TitleTab">
								                  <th class="styleth">Event</th>
									                <th class="styleth">Name</th>
									                <th class="styleth">Type</th>
									                <th class="styleth">Time</th>
									                <th class="styleth">Date</th>
									                <th class="styleth">Prix</th>
									                <th class="styleth">Image</th>
									                <th class="styleth">NbrPlace</th>
				                	        <th><a class="toggle-add"><i class="edit-del-icon uil uil-book-medical"></i></a></th>
				                </tr>
                        <?php
                          foreach ($listEvent as $Event) 
                          {
                          ?>                    

				                  	<tr>
									               <td class="styleth"><?= $Event['idEvent']; ?></td>
                                 <td class="styleth"><?= $Event['name']; ?></td>
                                 <td class="styleth"><?= $Event['type']; ?></td>
                                 <td class="styleth"><?= $Event['time']; ?></td>
                                 <td class="styleth"><?= $Event['date']; ?></td>
                                 <td class="styleth"><?= $Event['prix']; ?></td>
                                 <td class="styleth">
									<img src="./ImageEvent/<?= $Event['image']; ?>" alt="Evenement" class="img_event" width="90"></td>
						                     <td class="styleth"><?= $Event['nbrPlaceMax']; ?></td>
				                  		   <td>
                              <a class="toggle-edit" onclick="
                                    editEvent(
                                      '<?=$Event['idEvent']; ?>',
                                      '<?= $Event['name']; ?>',
                                      '<?= $Event['type']; ?>',
                                      '<?= $Event['time']; ?>',
                                      '<?= $Event['date']; ?>',
                                      '<?= $Event['prix']; ?>',
                                      '<?= $Event['nbrPlaceMax']; ?>'
                                    )">
                                  <i class="edit-del-icon uil uil-edit"></i>
                                    </a>
                                    <a href="deleteEvent.php?idEvent=<?php echo $Event['idEvent']; ?>&val_id=<?= $valeur_id; ?>"><i class="edit-del-icon uil uil-trash-alt"></i></a>
				                  		</td>
				                  	</tr>
                                      <?php
                          }
                          ?>		
               </table>  
                  <button onclick="exportTableToExcel('tableau1','Liste Des Evenements')">Export Table Data To Excel File</button>  
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
            x = rows[i].getElementsByTagName("td")[5];
            y = rows[i + 1].getElementsByTagName("td")[5];
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

function sortTableByDate() {
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
      x = rows[i].getElementsByTagName("td")[4];
      y = rows[i + 1].getElementsByTagName("td")[4];
      /* Check if the two rows should switch place,
      based on the date value: */
      if (new Date(x.textContent) > new Date(y.textContent)) {
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


function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);

    // Supprimer la colonne "Image" et son contenu
    var table = tableSelect.cloneNode(true);
    var tableRows = table.getElementsByTagName('tr');
    for (var i = 0; i < tableRows.length; i++) {
        var rowCells = tableRows[i].getElementsByTagName('td');
        if (rowCells.length > 6) {
            rowCells[6].parentNode.removeChild(rowCells[6]);
        }
    }
    tableHTML = table.outerHTML.replace(/ /g, '%20');
    tableHTML = tableHTML.replace(/<th[^>]*>Image<\/th>/, '');
    tableHTML = tableHTML.replace(/<td[^>]*>\s*<img[^>]*>\s*<\/td>/gi, '');

    // Spécifier le nom du fichier
    filename = filename ? filename + '.xls' : 'excel_data.xls';

    // Créer l'élément de lien de téléchargement
    downloadLink = document.createElement("a");

    document.body.appendChild(downloadLink);

    if (navigator.msSaveOrOpenBlob) {
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob(blob, filename);
    } else {
        // Créer un lien vers le fichier
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

        // Définir le nom du fichier
        downloadLink.download = filename;

        // Déclencher la fonction
        downloadLink.click();
    }
}

</script>
        
<!-- Le code HTML est inchangé -->

        <div class="col-lg-4 col-md-6">
          <div class="card inputdivadd InputlistAdd slide-in-right">


          <!--! ======================================= Input Ajout Modif       -->
			  <form  id="eventForm"class="form-group" method="POST" action="addEvent.php?val_id=<?= $valeur_id; ?>" onsubmit="return validateFormAddEvent()" >          

				<ul>
					<li>
						<h3>Add Event</h3>
					</li>
          <li>
					<input type="text" name="namea" class="form-style" placeholder="Nom" id="namea">
						<i class="input-icon uil uil-clipboard"></i>
					</li>
          <li>
	              <i class="input-icon uil uil-file-landscape"></i>
	                  <select name="typea" class="form-style" id="typea">
	                  	<option value="">Type</option>
	                  	<option value="Theatre">Theatre</option>
	                  	<option value="Musique">Musique</option>
		                  <option value="Culture">Culture</option>
		                  <option value="Dance">Dance</option>
		                  <option value="Art">Art</option>
		                  <option value="Sport">Sport</option>
	                  </select>
          </li>
					<li>
						<input type="time" name="timea" class="form-style" placeholder="Time" id="timea">
						<i class="input-icon uil uil-clock"></i>
					</li>
					<li>
						<input type="date" name="datea" class="form-style" placeholder="Date" id="datea">
						<i class="input-icon uil uil-calendar-alt"></i>
					</li>
					<li>
						<input type="number" name="prixa" class="form-style" placeholder="Prix" id="prixa">
						<i class="input-icon uil uil-usd-circle"></i>
					</li>
					<li>
						<input type="file" name="imagea" class="form-style" placeholder="Image" id="imagea">
						<i class="input-icon uil uil-image"></i>
					</li>
					<li>
						<input type="number" name="nbrPlaceMaxa" class="form-style" placeholder="PlaceMax" id="nbrPlaceMaxa">
						<i class="input-icon uil uil-user-minus"></i>
					</li>
				</ul>
				<input type="submit" name="Add" value="Submit" class="btninput mt-4 Add-event-PHP-JS" onclick="addeventtocalender()">
			  </form>
          </div>
        
    <div class="card inputdivedit InputlistEdit slide-out-right">
        <!--! ====================================================== Input Ajout Modif       -->
      <form class="form-group" method="POST" action="updateEvent.php?val_id=<?= $valeur_id; ?>" onsubmit="return validateFormModifierEvent()">
      <input type="hidden" name="idEventu" class="form-style" placeholder="id Event a Modifier" id="idEventu">  
      <ul>
					<li>
						<h3>Edit Event</h3>
					</li>
		      <li>
		      	<input type="text" name="nameu" class="form-style" placeholder="Nom" id="nameu">
		      	<i class="input-icon uil uil-clipboard"></i>
		      </li>
          <li>
	              <i class="input-icon uil uil-file-landscape"></i>
	                  <select name="typeu" class="form-style" id="typeu">
	                  	<option value="">Type</option>
	                  	<option value="Theatre">Theatre</option>
	                  	<option value="Musique">Musique</option>
		                  <option value="Culture">Culture</option>
		                  <option value="Dance">Dance</option>
		                  <option value="Art">Art</option>
		                  <option value="Sport">Sport</option>
	                  </select>
          </li>
		      <li>
		      	<input type="time" name="timeu" class="form-style" placeholder="Time" id="timeu">
		      	<i class="input-icon uil uil-clock"></i>
		      </li>
		      <li>
		      	<input type="date" name="dateu" class="form-style" placeholder="Date" id="dateu">
		      	<i class="input-icon uil uil-calendar-alt"></i>
		      </li>
		      <li>
		      	<input type="number" name="prixu" class="form-style" placeholder="Prix" id="prixu">
		      	<i class="input-icon uil uil-usd-circle"></i>
		      </li>
		      <li>
		      	<input type="file" name="imageu" class="form-style" placeholder="Image" id="imageu">
		      	<i class="input-icon uil uil-image"></i>
		      </li>
		      <li>
		      	<input type="number" name="nbrPlaceMaxu" class="form-style" placeholder="PlaceMax" id="nbrPlaceMaxu">
		      	<i class="input-icon uil uil-user-minus"></i>
		      </li>
	      </ul>
	      <input type="submit" name="Update" value="Submit" class="btninput mt-4">
       <!-- <input type= "reset" class="btninput"Cancel>   -->

			</form>
    </div>
 </div>
      </section>
      <section class="row mb-4 sectionphp2">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4 ">
          <div class="card tablediv">
            <div class="card-body px-0 pb-2 tableviewdiv">
            <h3>---Reservation---</h3>
            <input type="text" id="search-input2" class="form-style " onkeyup="search2()" placeholder="Search for event name...">
				      <table class="tableview tableau2" id="tableau2">
				        <tr class="TitleTab">
							    <th class="styleth">Event</th>
							    <th class="styleth">Name</th>
							    <th class="styleth">Email</th>
							    <th class="styleth">nbrPlace</th>
							    <th class="styleth">Num</th>
							    <th class="styleth">Client</th>
                  <th class="styleth">Prix</th>				              
                  <th><a class="toggle-add2"><i class="edit-del-icon uil uil-book-medical"></i></a></th>
				        </tr>
                  <?php
                  foreach ($listReservation as $Reservation) 
                  {
                  ?>
				            <tr>
                        <td class="styleth"><?= $Reservation['idEvent']; ?></td>
                        <td class="styleth"><?= $Reservation['name']; ?></td>
                        <td class="styleth"><?= $Reservation['email']; ?></td>
                        <td class="styleth"><?= $Reservation['nbrPlace']; ?></td>
                        <td class="styleth"><?= $Reservation['num']; ?></td>
	                      <td class="styleth"><?= $Reservation['idClient']; ?></td>
                        <td class="styleth"><?= $Reservation['PrixReserv']; ?></td>
			                  <td>
                          <a class="toggle-edit2" onclick="
                             editReservation(
                              '<?= $Reservation['idReserv']; ?>',
                              '<?= $Reservation['idEvent']; ?>',
                              '<?= $Reservation['name']; ?>',
                              '<?= $Reservation['email']; ?>',
                              '<?= $Reservation['nbrPlace']; ?>',
                              '<?= $Reservation['num']; ?>',
                              '<?= $Reservation['idClient']; ?>'
                            )">
                              <i class="edit-del-icon uil uil-edit"></i>
                          </a>
                          <a href="deleteReserv.php?idReserv=<?php echo $Reservation['idReserv']; ?>&val_id=<?= $valeur_id; ?>"><i class="edit-del-icon uil uil-trash-alt"></i></a>
			                  </td>
				            </tr>
                  <?php
                  }
                  ?>
              </table> 
                  <button onclick="exportTableToExcel('tableau2','Liste Des Reservations')">Export Table Data To Excel File</button>  
                  <button class="uil uil-step-backward" id= "bouton-precedent2"disabled></button>
                  <button class="uil uil-skip-forward" id="bouton-suivant2"></button>
		        </div>
          </div> 
        </div>
        
        <script>
          function search2() {
             // Declare variables
                 var input, filter, table, tr, td, i, txtValue;
                   input = document.getElementById("search-input2");
                 filter = input.value.toUpperCase();
                 table = document.getElementById("tableau2");
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
                document.getElementById("search-input2").addEventListener("input", function(event) {
                    search2();
                });
                document.getElementById("search-input2").addEventListener("blur", function() {
                  search2();
          });
        </script>
        <div class="col-lg-4 col-md-6">
          <div class="card inputdivadd InputlistAdd2 slide-in-right">


          
          <!--! ====================================================== Input Ajout Modif       -->





        <form  class="form-group" method="POST" action="addReserv.php?val_id=<?= $valeur_id; ?>" onsubmit="return validateFormAddReserv()">
				<ul>
					<li>
						<h3> Add Reservation</h3>
					</li>
					<li>
						<input type="text" name="idEventa" class="form-style" placeholder="IdEvent" id="idEventa">
						<i class="input-icon uil uil-dialpad-alt"></i>
					</li>  
					<li>
						<input type="text" name="namea" class="form-style" placeholder="Nom" id="namea">
						<i class="input-icon uil uil-clipboard"></i>
					</li>
					<li>
						<input type="email" name="emaila" class="form-style" placeholder="Email" id="emaila">
						<i class="input-icon uil uil-at"></i>
					</li>
					<li>
						<input type="number" name="nbrPlacea" class="form-style" placeholder="NombrePlaces" id="nbrPlacea">
						<i class="input-icon uil uil-users-alt"></i>
					</li>
					<li>
						<input type="number" name="numa" class="form-style" placeholder="Numéro" id="numa">
						<i class="input-icon uil uil-phone"></i>
					</li>
					<li>
						<input type="number" name="idClienta" class="form-style" placeholder="IdClient" id="idClienta">
						<i class="input-icon uil uil-dialpad-alt"></i>
					</li>
			
				</ul>
				<input type="submit" name="Add" value="Submit" class="btninput mt-4">
			  </form>

          <script>
            var ajoutfail=<?= $ajoutfail ?>;
            if(ajoutfail==1)
            {
              alert("Nombre de place indisponible");
            }
          </script>

          </div>
        
          <div class="card inputdivedit InputlistEdit2 slide-out-right">
        <!--! ====================================================== Input Ajout Modif       -->
			  <form  class="form-group" method="POST" action="updateReserv.php?val_id=<?= $valeur_id; ?>" onsubmit="return validateFormModifReserv()">
        <input type="hidden" name="idReservu" class="form-style" placeholder="id Reservation a Modifier" id="idReservu"  >
        <ul>
					<li>
						<h3>Edit Reservation</h3>
					</li>
					<li>
						<input type="number" name="idEventu" class="form-style" placeholder="idEvent" id="idEventuEdit"  >
						<i class="input-icon uil uil-dialpad-alt"></i>
					</li>
					<li>
						<input type="text" name="nameu" class="form-style" placeholder="Nom" id="nameuEdit"  >
						<i class="input-icon uil uil-clipboard"></i>
					</li>
					<li>
						<input type="email" name="emailu" class="form-style" placeholder="Email" id="emailu"  >
						<i class="input-icon uil uil-at"></i>
					</li>
					<li>
						<input type="number" name="nbrPlaceu" class="form-style" placeholder="NombrePlaces" id="nbrPlaceu"  >
						<i class="input-icon uil uil-users-alt"></i>
					</li>
					<li>
						<input type="number" name="numu" class="form-style" placeholder="Numéro" id="numu"  >
						<i class="input-icon uil uil-phone"></i>
					</li>
					<li>
						<input type="number" name="idClientu" class="form-style" placeholder="IdClient" id="idClientu"  >
						<i class="input-icon uil uil-dialpad-alt"></i>
					</li>

				</ul>
				<input type="submit" name="Update" value="Submit" class="btninput mt-4">
			  </form>
          </div>
        </div>
      </section>
      <footer class="footer py-4  footerpageadmin">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="#" class="font-weight-bold" target="_blank">Skapere</a>
                for a better experience.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="#" class="nav-link text-muted" target="_blank">Skapere</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link text-muted" target="_blank">About Us</a>
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
  <div class="fixed-plugin ps">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
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
          <h6 class="mb-0">Sidebar Colors</h6>
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
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
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

</body>

</html>