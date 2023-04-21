<?php
include "../Controller/EventC.php";
include "../Controller/ReservationC.php";

$EventC = new EventC();
$listEvent = $EventC->listEvent();

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
  <link href="./assets Dashboard/CSS Dashboard/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <link id="pagestyle" href="./assets Dashboard/CSS Dashboard/material-dashboard.css" rel="stylesheet" />
  <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
  <link id="pagestyle" href="./assets Dashboard/CSS Dashboard/dashboard.css" rel="stylesheet" />
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
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
          <a class="nav-link text-white " href="../pages/dashboard.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10 uil uil-user"></i>
            </div>
            <span class="nav-link-text ms-1">User</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/tables.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10 uil uil-volleyball"></i>
            </div>
            <span class="nav-link-text ms-1">Club</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="../pages/billing.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10 uil uil-calendar-alt"></i>
            </div>
            <span class="nav-link-text ms-1">Event</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/virtual-reality.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10 uil uil-box"></i>
            </div>
            <span class="nav-link-text ms-1">Product</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/rtl.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10 uil uil-notes"></i>
            </div>
            <span class="nav-link-text ms-1">Reclamations</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/notifications.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10 uil uil-truck"></i>
            </div>
            <span class="nav-link-text ms-1">Reservationations</span>
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
                <span class="d-sm-inline d-none">Ism el user</span>
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
    <div class="container-fluid py-4">
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
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">New Clients</p>
                <h4 class="mb-0">3,462</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2%</span> than yesterday</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Sales</p>
                <h4 class="mb-0">$103,430</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5% </span>than yesterday</p>
            </div>
          </div>
        </div>
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
              <h6 class="mb-0 ">Website Views</h6>
              <p class="text-sm ">Last Campaign Performance</p>
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
            <div class="card-body">
              <h6 class="mb-0 "> Daily Sales </h6>
              <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) increase in today sales. </p>
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
            <div class="card-body">
              <h6 class="mb-0 ">Completed Tasks</h6>
              <p class="text-sm ">Last Campaign Performance</p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm">just updated</p>
              </div>
            </div>
          </div>
        </div>
      </div>
       <!--! ============================SECTION========================== -->
      <section class="row mb-4 sectionphp">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4 ">
          <div class="card tablediv">
            <div class="card-body px-0 pb-2 tableviewdiv">
                        <!--! ====================================================== Tableauxxxx Lennnnaaaaa -->
				                <table class="tableview">
				                <tr class="TitleTab">
								<th class="styleth">Id Event</th>
									<th class="styleth">Name</th>
									<th class="styleth">Type</th>
									<th class="styleth">Time</th>
									<th class="styleth">Date</th>
									<th class="styleth">Prix</th>
									<th class="styleth">Image</th>
									<th class="styleth">NbrPlaceMax</th>
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
                        <td class="styleth"><?= $Event['image']; ?></td>
						            <td class="styleth"><?= $Event['nbrPlaceMax']; ?></td>
				                  		<td>
										  <a href="deleteEvent.php?idEvent=<?php echo $Event['idEvent']; ?>"><i class="edit-del-icon uil uil-trash-alt"></i></a>
				                  		</td>
				                  		<td>
										  <a  id="edit-event" href="updateEvent.php?idEvent=<?php echo $Event['idEvent']; ?>"><i class="edit-del-icon uil uil-edit"></i></a>
				                  		</td>

				                  	</tr>
                                      <?php
                          }
                          ?>		
                          </table>  
		                    </div>
          </div> 
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card inputdivadd InputlistAdd slide-in-right">
          <!--! ======================================= Input Ajout Modif       -->
			  <form  class="form-group" method="POST" action="addEvent.php" onsubmit="return validateFormAddEvent()" >          

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
	                  	<option value="Type1">Théatre</option>
	                  	<option value="Type2">Musique</option>
		                  <option value="Type3">Culture</option>
		                  <option value="Type4">Dance</option>
		                  <option value="Type5">Art</option>
		                  <option value="Type6">Sport</option>
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
				<input type="submit" name="Add" value="Submit" class="btninput mt-4">
			  </form>
          </div>
        
    <div class="card inputdivedit InputlistEdit slide-out-right">
        <!--! ====================================================== Input Ajout Modif       -->
      <form class="form-group" method="POST" action="UpdateEvent.php" onsubmit="return validateFormModifierEvent()">
        <ul>
					<li>
						<h3>Edit Event</h3>
					</li>
					<li>
			      <input type="number" value="<?php echo $event->getIdEvent(); ?>" name="idEventu" class="form-style" placeholder="id Event a Modifier" id="idEventu">
			      <i class="input-icon uil uil-dialpad-alt"></i>
		      </li>
		      <li>
		      	<input type="text" value="<?php echo $event->getName(); ?>" name="nameu" class="form-style" placeholder="Nom" id="nameu">
		      	<i class="input-icon uil uil-clipboard"></i>
		      </li>
          <li>
	              <i class="input-icon uil uil-file-landscape"></i>
			<select name="typeu" class="form-style" id="typeu">
				<option value="">Type</option>
				<option value="Type1" <?php if ($event->getType() == "Type1") echo "selected"; ?>>Théatre</option>
				<option value="Type2" <?php if ($event->getType() == "Type2") echo "selected"; ?>>Musique</option>
				<option value="Type3" <?php if ($event->getType() == "Type3") echo "selected"; ?>>Culture</option>
				<option value="Type4" <?php if ($event->getType() == "Type4") echo "selected"; ?>>Dance</option>
				<option value="Type5" <?php if ($event->getType() == "Type5") echo "selected"; ?>>Art</option>
				<option value="Type6" <?php if ($event->getType() == "Type6") echo "selected"; ?>>Sport</option>
			</select>
          </li>
		      <li>
		      	<input type="time" name="timeu" class="form-style" placeholder="Time" id="timeu" value="<?php echo $event->getTime(); ?>" >
		      	<i class="input-icon uil uil-clock"></i>
		      </li>
		      <li>
		      	<input type="date" name="dateu" class="form-style" placeholder="Date" id="dateu" value="<?php echo $event->getDate(); ?>" >
		      	<i class="input-icon uil uil-calendar-alt"></i>
		      </li>
		      <li>
		      	<input type="number" name="prixu" class="form-style" placeholder="Prix" id="prixu" value="<?php echo $event->getPrix(); ?>" >
		      	<i class="input-icon uil uil-usd-circle"></i>
		      </li>
		      <li>
		      	<input type="file" name="imageu" class="form-style" placeholder="Image" id="imageu" value="<?php echo $event->getImage(); ?>" >
		      	<i class="input-icon uil uil-image"></i>
		      </li>
		      <li>
		      	<input type="number" name="nbrPlaceMaxu" class="form-style" placeholder="PlaceMax" id="nbrPlaceMaxu" value="<?php echo $event->getNbrPlaceMax(); ?>" >
		      	<i class="input-icon uil uil-user-minus"></i>
		      </li>
	      </ul>
	      <input type="submit" name="Update" value="Submit" class="btninput mt-4">
       <!-- <input type= "reset" class="btninput"Cancel>   -->

			</form>
    </div>
 </div> <script>
  document.getElementById("edit-event").addEventListener("click", function(event) {
    event.preventDefault(); // prevent the default behavior of the link
    populateFormFields(); // call the function to populate the form fields
  });

  function populateFormFields() {
    // get the ID of the event to be edited from the link URL
    const urlParams = new URLSearchParams(window.location.search);
    const idEvent = urlParams.get('idEvent');

    // use AJAX to fetch the event information from the server
    const xhr = new XMLHttpRequest();
    xhr.onload = function() {
      if (xhr.status === 200) {
        const event = JSON.parse(xhr.responseText);
        // populate the form fields with the event information
        document.getElementById("idEventu").value = event.idEvent;
        document.getElementById("nameu").value = event.name;
        document.getElementById("typeu").value = event.type;
        document.getElementById("timeu").value = event.time;
        document.getElementById("dateu").value = event.date;
        document.getElementById("prixu").value = event.prix;
        document.getElementById("imageu").value = event.image;
        document.getElementById("nbrPlaceMaxu").value = event.nbrPlaceMax;
      }
    };
    xhr.open('GET', `getEvent.php?idEvent=${idEvent}`);
    xhr.send();
  }
</script>

      </section>
      <section class="row mb-4 sectionphp2">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4 ">
          <div class="card tablediv">
            <div class="card-body px-0 pb-2 tableviewdiv">
                      <!--! ====================================================== Tableauxxxx Lennnnaaaaa -->
				                <table class="tableview">
				                  <tr class="TitleTab">
								  <th class="styleth">Id Reservation</th>
							<th class="styleth">Id Event</th>
							<th class="styleth">Name</th>
							<th class="styleth">Email</th>
							<th class="styleth">nbrPlaces</th>
							<th class="styleth">Num</th>
							<th class="styleth">Id Client</th>
				                  	<th><a class="toggle-edit2"><i class="edit-del-icon uil uil-edit"></i></a></th>
				                  	<th><a class="toggle-add2"><i class="edit-del-icon uil uil-book-medical"></i></a></th>
				                  </tr>
                          <?php
                            foreach ($listReservation as $Reservation) 
                            {
                            ?>
				                    	<tr>
						<td class="styleth"><?= $Reservation['idReserv']; ?></td>
                        <td class="styleth"><?= $Reservation['idEvent']; ?></td>
                        <td class="styleth"><?= $Reservation['name']; ?></td>
                        <td class="styleth"><?= $Reservation['email']; ?></td>
                        <td class="styleth"><?= $Reservation['nbrPlace']; ?></td>
                        <td class="styleth"><?= $Reservation['num']; ?></td>
						<td class="styleth"><?= $Reservation['idClient']; ?></td>
				        <td>
						<a href="deleteReserv.php?idReserv=<?php echo $Reservation['idReserv']; ?>"><i class="edit-del-icon uil uil-trash-alt"></i></a>
				        </td>
				                    	</tr>
                                        <?php
                            }
                            ?>
                          </table>  
		                    </div>
          </div> 
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card inputdivadd InputlistAdd2 slide-in-right">






          <!--! ====================================================== Input Ajout Modif       -->





        <form  class="form-group" method="POST" action="addReserv.php" onsubmit="return validateFormAddReserv()">
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
          </div>
        
          <div class="card inputdivedit InputlistEdit2 slide-out-right">
                                                                  <!--! ====================================================== Input Ajout Modif       -->
			  <form  class="form-group" method="POST" action="updateReserv.php" onsubmit="return validateFormModifReserv()">
        <ul>
					<li>
						<h3>Edit Reservation</h3>
					</li>
					<li>
						<input type="number" name="idReservu" class="form-style" placeholder="id Reservation a Modifier" id="idReservu" autocomplete="off">
						<i class="input-icon uil uil-dialpad-alt"></i>
					</li>
					<li>
						<input type="number" name="idEventu" class="form-style" placeholder="idEvent" id="idEventu" autocomplete="off">
						<i class="input-icon uil uil-dialpad-alt"></i>
					</li>
					<li>
						<input type="text" name="nameu" class="form-style" placeholder="Nom" id="nameu" autocomplete="off">
						<i class="input-icon uil uil-clipboard"></i>
					</li>
					<li>
						<input type="email" name="emailu" class="form-style" placeholder="Email" id="emailu" autocomplete="off">
						<i class="input-icon uil uil-at"></i>
					</li>
					<li>
						<input type="number" name="nbrPlaceu" class="form-style" placeholder="NombrePlaces" id="nbrPlaceu" autocomplete="off">
						<i class="input-icon uil uil-users-alt"></i>
					</li>
					<li>
						<input type="number" name="numu" class="form-style" placeholder="Numéro" id="numu" autocomplete="off">
						<i class="input-icon uil uil-phone"></i>
					</li>
					<li>
						<input type="number" name="idClientu" class="form-style" placeholder="IdClient" id="idClientu" autocomplete="off">
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
        labels: ["M", "T", "W", "T", "F", "S", "S"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [50, 50, 10, 50, 50, 10, 40],
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

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
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
          data: [50, 40, 300, 320, 500, 100, 200, 230, 500],
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
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
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
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
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
  <script src="./assets/JS/InputControl.js"></script>
</body>

</html>