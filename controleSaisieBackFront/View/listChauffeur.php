<?php
include "../Controller/ChauffeurC.php";
include "../Controller/UtilisateurC.php";
include "../Controller/TransportC.php";

$valeur_id = isset($_GET['val_id']) ? $_GET['val_id'] : 0;

$UtilisateurC = new UtilisateurC();
$Username= $UtilisateurC->nomUtilisateur($valeur_id);

$ChauffeurC = new ChauffeurC();
$listchauffeur = $ChauffeurC->listChauffeur();

$count2Wheels = $ChauffeurC->countStatVehicule("Bike");
$count4Wheels = $ChauffeurC->countStatVehicule("Car");
$countplus4Wheels = $ChauffeurC->countStatVehicule("Bus");

$TransportC = new TransportC();
$listtransport = $TransportC->listTransport();

$countEvent = $TransportC->countStatType("Event");
$countClub = $TransportC->countStatType("Club");
$countDelivery = $TransportC->countStatType("Delivery");

$countJan = $TransportC->countStatMonth('01');
$countFeb = $TransportC->countStatMonth('02');
$countMar = $TransportC->countStatMonth('03');
$countApr = $TransportC->countStatMonth('04');
$countMay = $TransportC->countStatMonth('05');
$countJun = $TransportC->countStatMonth('06');
$countJul = $TransportC->countStatMonth('07');
$countAug = $TransportC->countStatMonth('08');
$countSep = $TransportC->countStatMonth('09');
$countOct = $TransportC->countStatMonth('10');
$countNov = $TransportC->countStatMonth('11');
$countDec = $TransportC->countStatMonth('12');

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
  <link href="./assets Dashboard/CSS Dashboard/nucleo-svg.css" rel="stylesheet" />
  <link href="./assets/CSS/Chat.css" rel="stylesheet" />
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
        <?php echo "<a href='listEvent.php?val_id=" . $valeur_id ."'class='nav-link text-white'>
            <div class='text-white text-center me-2 d-flex align-items-center justify-content-center'>
              <i class='material-icons opacity-10 uil uil-calendar-alt'></i>
            </div>
            <span class='nav-link-text ms-1'>Event</span>
          </a>"; ?>
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
          <a class="nav-link text-white active bg-gradient-primary" href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10 uil uil-truck"></i>
            </div>
            <span class="nav-link-text ms-1">Transportations</span>
          </a>
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
    <div class="container-fluid py-4 slide-out-right chathidden Chataffiche">


          <!-- Chat-Start -->
          <div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
<div class="col-md-6">
            <div class="card card-bordered">
              <div class="card-header">
                <h4 class="card-title"><strong>Admin Chat</strong></h4>
              </div>


              <div class="ps-container ps-theme-default ps-active-y" id="chat-content" style="overflow-y: scroll !important; height:400px !important;">
                <div class="media media-chat">
                  <div class="media-body">  
                    <h3>Hi</h3>
                    <p>How are you ...???</p>
                    <p>What are you doing tomorrow?<br> Can we come up a bar?</p>
                    <p class="meta"><time datetime="2023">23:58</time></p>
                  </div>
                </div>

            

              <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 0px; right: 2px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 2px;"></div></div></div>

              <div class="publisher bt-1 border-light">
                <img class="avatar avatar-xs" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">
                <form action="">
                  <input class="publisher-input" type="text" placeholder="Write something">
                  <input type="submit" name="Message" value="Submit" class="publisher-btn text-info">
                </form>
              </div>

             </div>
          </div>
          </div>
          </div>
          </div>
          <!-- Chat-End -->

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
            <div class="card-body">
              <h6 class="mb-0 ">Requests</h6>
              <p class="text-sm ">Number of Transport Requested</p>
              <hr class="dark horizontal">
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
            <div class="card-body">
              <h6 class="mb-0 "> Requestes </h6>
              <p class="text-sm "> Monthly Transports Requested</p>
              <hr class="dark horizontal">
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
            <div class="card-body">
              <h6 class="mb-0 ">Vehicule</h6>
              <p class="text-sm ">Driver's Vehicule</p>
              <hr class="dark horizontal">
            </div>
          </div>
        </div>
      </div>
      <section class="row mb-4 sectionphp">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4 ">
          <div class="card tablediv">
            <div class="card-body px-0 pb-2 tableviewdiv">
                      <h3>---Drivers---</h3>
                      <table class="tableview tableau1">
				                <tr class="TitleTab">
				                	<!--<th class="styleth">#</th>-->
				                	<th class="styleth">First Name</th>
				                	<th class="styleth">Last Name</th>
				                	<th class="styleth">Phone</th>
				                	<th class="styleth">Email</th>
				                	<th class="styleth">Vehicule</th>
				                	<th><a class="toggle-add"><i class="edit-del-icon uil uil-book-medical"></i></a></th>
				                </tr>
                        <?php
                          foreach ($listchauffeur as $Chauffeur) 
                          {
                          ?>
				                  	<tr>
                                          <td class="styleth"><?= $Chauffeur['Nom']; ?></td>
                                          <td class="styleth"><?= $Chauffeur['Prenom']; ?></td>
                                          <td class="styleth"><?= $Chauffeur['Tel']; ?></td>
                                          <td class="styleth"><?= $Chauffeur['Email']; ?></td>
                                          <td class="styleth"><?= $Chauffeur['Vehicule']; ?></td>
				                  		<td>
                                <a class="toggle-edit" onclick="
                                    editChauffeur(
                                      '<?= $Chauffeur['Id_Ch']; ?>',
                                      '<?= $Chauffeur['Nom']; ?>',
                                      '<?= $Chauffeur['Prenom']; ?>',
                                      '<?= $Chauffeur['Tel']; ?>',
                                      '<?= $Chauffeur['Email']; ?>',
                                      '<?= $Chauffeur['Vehicule']; ?>'
                                    )">
                                  <i class="edit-del-icon uil uil-edit"></i>
                                </a>
                                <a href="deleteChauffeur.php?Id_Ch=<?php echo $Chauffeur['Id_Ch']; ?>&val_id=<?= $valeur_id; ?>"><i class="edit-del-icon uil uil-trash-alt"></i></a>
				                  		</td>
                              <td>
                              <a href="./assets/PDF/PDF_Chauffeur.php?a=<?php echo $Chauffeur['Id_Ch']; ?>
                              &b=<?php echo $Chauffeur['Nom']; ?>
                              &c=<?php echo $Chauffeur['Prenom']; ?>
                              &d=<?php echo $Chauffeur['Tel']; ?>
                              &e=<?php echo $Chauffeur['Email']; ?>
                              &f=<?php echo $Chauffeur['Vehicule']; ?>
                              &g=<?= $valeur_id; ?>"><i class="edit-del-icon uil uil-file-download-alt"></i></a>
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
        <div class="col-lg-4 col-md-6">
          <div class="card inputdivadd InputlistAdd slide-in-right">






          <!--! ====================================================== Input Ajout Modif       -->





			  <form  class="form-group" method="POST" action="addChauffeur.php?val_id=<?= $valeur_id; ?>" onsubmit="return validateFormAddChauffeur()">
				<ul>
					<li>
						<h3>Add Chauffeur</h3>
					</li>
					<li>
						<input type="text" name="noma" class="form-style" placeholder="Nom" id="noma"  >
						<i class="input-icon uil uil-box"></i>
					</li>
					<li>
						<input type="text" name="prenoma" class="form-style" placeholder="Prenom" id="prenoma"  >
						<i class="input-icon uil uil-usd-circle"></i>
					</li>
					<li>
						<input type="number" name="tela" class="form-style" placeholder="Tel" id="tela"  >
						<i class="input-icon uil uil-tag"></i>
					</li>
					<li>
						<input type="email" name="emaila" class="form-style" placeholder="Email" id="emaila"  >
						<i class="input-icon uil uil-home"></i>
					</li>
					<li>
            <i class="input-icon uil uil-tag"></i>
	                  <select name="vehiculea" class="form-style" id="vehiculea">
	                  	<option value="">Vehicule</option>
	                  	<option value="Bike">2 wheels</option>
	                  	<option value="Car">4 wheels</option>
		                  <option value="Bus">+4 wheels</option>
	                  </select>
					</li>
          <li>
						<input type="text" name="Usernamea" class="form-style" placeholder="Username" id="Usernamea">
						<i class="input-icon uil uil-box"></i>
					</li>
					<li>
						<input type="password" name="mdpa" class="form-style" placeholder="Mdp" id="mdpa">
						<i class="input-icon uil uil-home"></i>
					</li>
					<li>
						<input type="date" name="doba" class="form-style" placeholder="Dob" id="doba">
						<i class="input-icon uil uil-user"></i>
					</li>
				</ul>
				<input type="submit" name="Add" value="Submit" class="btninput mt-4">
			  </form>
          </div>
        
          <div class="card inputdivedit InputlistEdit slide-out-right">
         <!--! ====================================================== Input Ajout Modif       -->
			  <form  class="form-group" method="POST" action="updateChauffeur.php?val_id=<?= $valeur_id; ?>" onsubmit="return validateFormModifChauffeur()">
          <input type="hidden" name="Id_Chu" class="form-style" placeholder="Id du chauffeur a modifier" id="Id_Chu">
        <ul>
					<li>
						<h3>Edit Chauffeur</h3>
					</li>
					<li>
						<input type="text" name="nomu" class="form-style" placeholder="Nom" id="nomu">
						<i class="input-icon uil uil-box"></i>
					</li>
					<li>
						<input type="text" name="prenomu" class="form-style" placeholder="Prenom" id="prenomu">
						<i class="input-icon uil uil-usd-circle"></i>
					</li>
					<li>
						<input type="number" name="telu" class="form-style" placeholder="Tel" id="telu">
						<i class="input-icon uil uil-tag"></i>
					</li>
					<li>
						<input type="email" name="emailu" class="form-style" placeholder="Email" id="emailu">
						<i class="input-icon uil uil-home"></i>
					</li>
					<li>
            <i class="input-icon uil uil-tag"></i>
	                  <select name="vehiculeu" class="form-style" id="vehiculeu">
	                  	<option value="">Vehicule</option>
	                  	<option value="Bike">2 wheels</option>
	                  	<option value="Car">4 wheels</option>
		                  <option value="Bus">+4 wheels</option>
	                  </select>
					</li>
          <li>
						<input type="text" name="Usernameu" class="form-style" placeholder="Username" id="Usernameu">
						<i class="input-icon uil uil-box"></i>
					</li>
					<li>
						<input type="password" name="mdpu" class="form-style" placeholder="Mdp" id="mdpu">
						<i class="input-icon uil uil-home"></i>
					</li>
					<li>
						<input type="date" name="dobu" class="form-style" placeholder="Dob" id="dobu">
						<i class="input-icon uil uil-user"></i>
					</li>

				</ul>
				<input type="submit" name="Update" value="Submit" class="btninput mt-4">
			  </form>
          </div>
        </div>
      </section>
      <section class="row mb-4 sectionphp" style="margin-top: 170px;">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4 ">
          <div class="card tablediv">
            <div class="card-body px-0 pb-2 tableviewdiv" >
            <h3>---Transport---</h3>
				                <table class="tableview tableau2">
				                  <tr class="TitleTab">
				                  	<th class="styleth">Client</th>
				                  	<th class="styleth">Chauffeur</th>
				                  	<th class="styleth">Type</th>
				                  	<th class="styleth">N°</th>
				                  	<th class="styleth">Date</th>
				                  	<th class="styleth">Adress</th>
				                  	<th class="styleth">Name</th>
				                  	<th class="styleth">Phone</th>
				                  	<th class="styleth">Message</th>
				                  	<th><a class="toggle-add2"><i class="edit-del-icon uil uil-book-medical"></i></a></th>
				                  </tr>
                          <?php
                            foreach ($listtransport as $Transport) 
                            {
                            ?>
				                    	<tr>
                                  <td class="styleth"><?= $Transport['IdClient']; ?></td>
                                  <td class="styleth"><?= $Transport['Id_Ch']; ?></td>
                                  <td class="styleth"><?= $Transport['Type']; ?></td>
                                  <td class="styleth"><?= $Transport['Nbr_Pers']; ?></td>
                                  <td class="styleth"><?= $Transport['Date']; ?></td>
				                    		  <td class="styleth"><?= $Transport['Adresse']; ?></td>
                                  <td class="styleth"><?= $Transport['Nom']; ?></td>
                                  <td class="styleth"><?= $Transport['Tel']; ?></td>
                                  <td class="styleth"><?= $Transport['Message']; ?></td>
				                    		  <td>
                                    <a class="toggle-edit2" onclick="
                                    editTransport(
                                      '<?= $Transport['Id_T']; ?>',
                                      '<?= $Transport['IdClient']; ?>',
                                      '<?= $Transport['Id_Ch']; ?>',
                                      '<?= $Transport['Type']; ?>',
                                      '<?= $Transport['Nbr_Pers']; ?>',
                                      '<?= $Transport['Date']; ?>',
                                      '<?= $Transport['Adresse']; ?>',
                                      '<?= $Transport['Nom']; ?>',
                                      '<?= $Transport['Tel']; ?>',
                                      '<?= $Transport['Message']; ?>'
                                    )">
                                      <i class="edit-del-icon uil uil-edit"></i>
                                    </a>
                                    <a href="deleteTransport.php?Id_T=<?php echo $Transport['Id_T']; ?>&val_id=<?= $valeur_id; ?>"><i class="edit-del-icon uil uil-trash-alt"></i></a>
                                  </td>
				                    	</tr>
                                        <?php
                            }
                            ?>
                          </table> 
                      <button class="uil uil-step-backward" id= "bouton-precedent2"disabled></button>
                      <button class="uil uil-skip-forward" id="bouton-suivant2"></button> 
		                    </div>
          </div> 
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card inputdivadd InputlistAdd2 slide-in-right">

          <!--! ====================================================== Input Ajout Modif       -->

        <form  class="form-group" method="POST" action="addTransport.php?val_id=<?= $valeur_id; ?>" onsubmit="return validateFormAddTransport()">
				<ul>
					<li>
						<h3> Add Transport</h3>
					</li>
					<li>
						<input type="number" name="IdClientat" class="form-style" placeholder="IdClient" id="IdClientat" >
						<i class="input-icon uil uil-box"></i>
					</li>
					<li>
						<input type="number" name="Id_Chat" class="form-style" placeholder="IdChauffeur" id="Id_Chat" >
						<i class="input-icon uil uil-usd-circle"></i>
					</li>
          <li>
	              <i class="input-icon uil uil-tag"></i>
	                  <select name="Typeat" class="form-style" id="Typeat">
	                  	<option value="">Type</option>
	                  	<option value="Event">Event</option>
	                  	<option value="Club">Club</option>
		                  <option value="Delivery">Delivery</option>
	                  </select>
          </li>
					<li>
						<input type="number" name="Nbr_Persat" class="form-style" placeholder="NombrePersonne" id="Nbr_Persat" >
						<i class="input-icon uil uil-home"></i>
					</li>
					<li>
						<input type="date" name="Dateat" class="form-style" placeholder="Date" id="Dateat" >
						<i class="input-icon uil uil-user"></i>
					</li>
					<li>
						<input type="text" name="adresseat" class="form-style" placeholder="Adresse" id="adresseat" >
						<i class="input-icon uil uil-user"></i>
					</li>
					<li>
						<input type="text" name="nameat" class="form-style" placeholder="Name" id="nameat" >
						<i class="input-icon uil uil-user"></i>
					</li>
					<li>
						<input type="tel" name="numat" class="form-style" placeholder="Phone" id="numat" >
						<i class="input-icon uil uil-user"></i>
					</li>
					<li>
						<input type="text" name="Noteat" class="form-style" placeholder="Note for the driver" id="Noteat" >
						<i class="input-icon uil uil-user"></i>
					</li>
				</ul>
				<input type="submit" name="Add" value="Submit" class="btninput mt-4">
			  </form>
          </div>
        
          <div class="card inputdivedit InputlistEdit2 slide-out-right">
        <!--! ====================================================== Input Ajout Modif       -->
			  <form  class="form-group" method="POST" action="updateTransport.php?val_id=<?= $valeur_id; ?>" onsubmit="return validateFormModifTransport()">
          <input type="hidden" name="Id_Tut" class="form-style" placeholder="Id du Transport a modifier" id="Id_Tut" >
        <ul>
					<li>
						<h3>Edit Transport</h3>
					</li>
					<li>
					<input type="number" name="IdClientut" class="form-style" placeholder="IdClient" id="IdClientut" >
						<i class="input-icon uil uil-box"></i>
					</li>
					<li>
						<input type="number" name="Id_Chut" class="form-style" placeholder="IdChauffeur" id="Id_Chut" >
						<i class="input-icon uil uil-usd-circle"></i>
					</li>
          <li>
	              <i class="input-icon uil uil-tag"></i>
	                  <select name="Typeut" class="form-style" id="Typeut">
	                  	<option value="">Type</option>
	                  	<option value="Event">Event</option>
	                  	<option value="Club">Club</option>
		                  <option value="Delivery">Delivery</option>
	                  </select>
          </li>
					<li>
						<input type="number" name="Nbr_Persut" class="form-style" placeholder="NombrePersonne" id="Nbr_Persut" >
						<i class="input-icon uil uil-home"></i>
					</li>
					<li>
						<input type="date" name="Dateut" class="form-style" placeholder="Date" id="Dateut" >
						<i class="input-icon uil uil-user"></i>
					</li>
					<li>
						<input type="text" name="adresseut" class="form-style" placeholder="Adresse" id="adresseut" >
						<i class="input-icon uil uil-user"></i>
					</li>
					<li>
						<input type="text" name="nameut" class="form-style" placeholder="Name" id="nameut" >
						<i class="input-icon uil uil-user"></i>
					</li>
					<li>
						<input type="tel" name="numut" class="form-style" placeholder="Phone" id="numut" >
						<i class="input-icon uil uil-user"></i>
					</li>
					<li>
						<input type="text" name="Noteut" class="form-style" placeholder="Note for the driver" id="Noteut" >
						<i class="input-icon uil uil-user"></i>
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
    var Event     =<?= $countEvent ?>;
    var Club      =<?= $countClub ?>;
    var Delivery =<?= $countDelivery ?>;
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["Event", "Club", "Delivery"],
        datasets: [{
          label: "Transports Requested",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [Event, Club, Delivery],
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
              suggestedMax: 500,
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
    var Jan  = <?= $countJan ?>;
    var Feb  = <?= $countFeb ?>;
    var Mar  = <?= $countMar ?>;
    var Apr  = <?= $countApr ?>;
    var May  = <?= $countMay ?>;
    var Jun  = <?= $countJun ?>;
    var Jul  = <?= $countJul ?>;
    var Aug  = <?= $countAug ?>;
    var Sep  = <?= $countSep ?>;
    var Oct  = <?= $countOct ?>;
    var Nov  = <?= $countNov ?>;
    var Dec  = <?= $countDec ?>;


    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Jan","Feb","Mar","Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Requested",
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
          data: [ Jan, Feb, Mar, Apr, May, Jun, Jul, Aug, Sep, Oct, Nov, Dec],
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
    var Wheels2 = <?= $count2Wheels ?>;
    var Wheels4 = <?= $count4Wheels ?>;
    var Wheelsp4 = <?= $countplus4Wheels ?>;

    new Chart(ctx3, {
      type: "bar",
      data: {
        labels: ["2Wheels", "4Wheels", "+4Wheels"],
        datasets: [{
          label: "Vehicule",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [Wheels2, Wheels4, Wheelsp4],
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
              suggestedMax: 500,
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
  <script src="./assets/JS/Chat.js"></script>

</body>

</html>