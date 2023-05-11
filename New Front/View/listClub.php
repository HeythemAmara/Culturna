<?php
require_once "../Controller/UtilisateurC.php";
require_once "../Controller/ClubC.php";
require_once '../Controller/MatC.php';

$valeur_id = isset($_GET['val_id']) ? $_GET['val_id'] : 0;

$UtilisateurC = new UtilisateurC();
$Username= $UtilisateurC->nomUtilisateur($valeur_id);

$ClubC = new ClubC();
$listClub = $ClubC->listClub();
$countFoot= $ClubC->countType("Football");
$countbasket= $ClubC->countType("BasketBall");
$countTennis= $ClubC->countType("Tennis");
$counttheatre= $ClubC->countType("Théatre");
$countdessin= $ClubC->countType("Dessin");

$MatC = new MaterielC();
$list = $MatC->listMateriel();
$countFootM= $MatC->countTypeMat("Football");
$countbasketM= $MatC->countTypeMat("BasketBall");
$countTennisM= $MatC->countTypeMat("Tennis");
$counttheatreM= $MatC->countTypeMat("Théatre");
$countdessinM= $MatC->countTypeMat("Dessin");



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
  <script>src="./input-control-club"</script>
  <script> src="./Input-Variables"</script>
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
          <?php echo "<a href='listClub.php?val_id=" . $valeur_id ."'class='nav-link text-white active bg-gradient-primary'>
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
          <?php echo "<a href='listProduct.php?val_id=" . $valeur_id ."'class='nav-link text-white'>
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
              <h6 class="mb-0 "> Clubs </h6>
              <p class="text-sm ">Nombre des clubs classé par type</p>
              <hr class="dark horizontal">
            </div>
          </div>
        </div>
        <!--        xhart2 -->
      <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card z-index-2  ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                <div class="chart">
                  <canvas id="chart-bars2" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 "> Matériels </h6>
              <p class="text-sm ">Nombre des Matériels classé par type</p>
              <hr class="dark horizontal">
            </div>
          </div>
        </div>
        <!-- 3-----------
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
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
      < ------->
      <section class="row mb-4 sectionphp">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4 ">
          <div class="card tablediv">
            <div class="card-body px-0 pb-2 tableviewdiv">
                      <h3>---Clubs---</h3>
                      <input type="text" id="search-input" class="form-style" onkeyup="search()" placeholder="Chercher un club...">

                      <button id="sort-alpha" class="btninput mt-4">Tri alphabétique </button>
                        
                      <table class="tableview tableau1" id ="tableau1">
				                <tr class="TitleTab">
				                	<th class="styleth">Id </th>
				                	<th class="styleth">Nom </th>
				                	<th class="styleth">Type </th>
                          <th class="styleth">Email </th>
                          <th class="styleth">Logo </th>
                          <th class="styleth">Message </th>
                          <th><a class="toggle-add"><i class="edit-del-icon uil uil-book-medical"></i></a></th>

				                </tr>
                        <?php
                          foreach ($listClub as $Club) 
                          {
                          ?>
				                  	<tr>
                            <td class="styleth"><?= $Club['id_Club']; ?></td>
                                          <td class="styleth"><?= $Club['nom_C']; ?></td>
                                          <td class="styleth"><?= $Club['type_C']; ?></td>
                                          <td class="styleth"><?= $Club['mailC']; ?></td>
                                          <td class="styleth"><img src="uploadsC/<?= basename($Club['image']) ?>" alt="<?= $Club['nom_C'] ?>" width="80"></td>
                                          <td class="styleth"><?= $Club['noteC']; ?></td>
                                          

				                  		<td>
                                <a class="toggle-edit" onclick="
                                    editClub(
                                      '<?= $Club['id_Club']; ?>',
                                      '<?= $Club['nom_C']; ?>',
                                      '<?= $Club['mailC']; ?>',
                                      '<?= $Club['type_C']; ?>',
                                      '<?= $Club['image']; ?>'
                                      
                                    )">
                                  <i class="edit-del-icon uil uil-edit"></i>
                                </a>
				                  			<a href="deleteClub.php?id_Club=<?php echo $Club['id_Club']; ?>"><i class="edit-del-icon uil uil-trash-alt"></i></a>
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

          

    // Run loop until no switching is needed
   




document.getElementById("sort-alpha").addEventListener("click", function() {
    var table, rows, switching, i, x, y, shouldSwitch;
    table = document.getElementById("tableau1");
    switching = true;

    // Run loop until no switching is needed
    while (switching) {
        switching = false;
        rows = table.rows;
        for (i = 1; i < (rows.length - 1); i++) {
            shouldSwitch = false;
            x = rows[i].getElementsByTagName("td")[1];
            y = rows[i + 1].getElementsByTagName("td")[1];
            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                shouldSwitch = true;
                break;
            }
        }
        if (shouldSwitch) {
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
        }
    }
});
</script>       
        <div class="col-lg-4 col-md-6">
          <div class="card inputdivadd InputlistAdd slide-in-right">






          <!--! ====================================================== Input Ajout Modif       -->





          <form  class="form-group" method="POST" enctype="multipart/form-data"  action="addClub.php">
				
				<ul>
					<li>
          <script src="script-input-control-club.js"></script>
						<h3> Ajout Club</h3>
					</li>
          
					<li>
          <style>.error-message {
                 color: red;
                font-size: 14px;
                 margin-top: 5px;
          }</style>
						<input type="text" name="namea" class="form-style" placeholder="Nom" id="namea" pattern="[a-zA-Z\s]+"  required onblur="checkName()"    autocomplete="off">
            <div id="nameError" class="error-message"></div>
						<i class="input-icon uil uil-clipboard"></i>
					</li>
          
          <li>
						<input type="email" name="maila" class="form-style" placeholder="Email" id="maila"   required  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  autocomplete="off">
						
            <i class="input-icon uil uil-clipboard"></i>
					</li>
          
					<li>
						<!--<input type="text" name="typea" class="form-style" placeholder="Type" id="typea" autocomplete="off">-->
						<select name="typea" class="form-style" placeholder="Type" id="typea" autocomplete="off">
          <option value="FootBall">FootBall</option>
					<option  value="BasketBall">BasketBall</option>
					<option value="Tennis">Tennis</option>
					<option value="Dessin">Dessin</option>
					<option value="Musculation">Musculation</option>
                    <option value="Theatre">Théatre</option>

      </select>
      <i class="input-icon uil uil-file-landscape"></i>

					</li>
          <li>
          <input type="file" name="image" class="form-style" placeholder="image" id="image"  autocomplete="off">
				   <i class="input-icon uil uil-image"></i>

					</li>


				</ul>
				<input type="submit" name="Add" value="Soumettre" class="btninput mt-4">
			  </form>
          </div>
        
          <div class="card inputdivedit InputlistEdit slide-out-right">
         <!--! ====================================================== Input Ajout Modif       -->
         <form  class="form-group" method="POST" enctype="multipart/form-data" action="updateClub.php">
				
				<ul>
					<li>
						<h3>modification club</h3>
					</li>
					<li>
						<input type="number" name="id_Club" class="form-style" placeholder="id Club a Modifier" id="id_Club" --pattern="[0-9]+" required autocomplete="off">
						<i class="input-icon uil uil-dialpad-alt"></i>
					</li>
					<li>
						<input type="text" name="nameu" class="form-style" placeholder="Nom" id="nameu" pattern="[a-zA-Z\s]+" onblur="checkNameUpdate()" required autocomplete="off">
            <div id="updateError" class="error-message"></div>
						<i class="input-icon uil uil-clipboard"></i>
					</li>

          <li>
						<input type="email" name="mailu" class="form-style" placeholder="Mail" id="mailu"  required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  autocomplete="off">
            
            <i class="input-icon uil uil-clipboard"></i>
					</li>


					<li>
						<select name="typeu" class="form-style" placeholder="Type" id="typeu" autocomplete="off">
          <option value="FootBall">FootBall</option>
					<option  value="BasketBall">BasketBall</option>
					<option value="Tennis">Tennis</option>
					<option value="Dessin">Dessin</option>
					<option value="Musculation">Musculation</option>
                    <option value="Theatre">Théatre</option>

      </select>
						<i class="input-icon uil uil-file-landscape"></i>
					</li>

          <li>
					<input type="file" name="imageu" class="form-style" placeholder="image" id="imageu"  accept=".jpg, .jpeg, .png" autocomplete="off">
				   <i class="input-icon uil uil-image"></i>

					</li>

				</ul>
				<input type="submit" name="Update" value="Soumettre" class="btninput mt-4">
			</form>
          </div>
        </div>
      </section>
      <section class="row mb-4 sectionphp" style="margin-top: 170px;">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4 ">
          <div class="card tablediv">
            <div class="card-body px-0 pb-2 tableviewdiv" >
            <h3>---Materiel---</h3>
            <input type="text" id="search-input-mat" class="form-style" onkeyup="searchM()" placeholder="Chercher un materiel...">
            <button id="sort-alpha2" class="btninput mt-4">Tri alphabétique </button>
                        
				                <table class="tableview" id ="tableau2">
                          
				                <tr class="TitleTab">
				                	<th class="styleth">Id </th>
				                	<th class="styleth">Nom </th>
				                	<th class="styleth">Type </th>
                          <th class="styleth">Id Club</th>
                          <th class="styleth">Image </th>
                          <th class="styleth">Nom Club</th>


				                  	<th><a class="toggle-add2"><i class="edit-del-icon uil uil-book-medical"></i></a></th>
				                  </tr>
                          <?php
                            foreach ($list as $Mat) 
                            {
                            ?>
				                    	<tr>
                              <td class="styleth"><?= $Mat['id_M']; ?></td>
                                          <td class="styleth"><?= $Mat['nom_M']; ?></td>
                                          <td class="styleth"><?= $Mat['type_M']; ?></td>
                                          <td class="styleth"><?= $Mat['id_Club_fk']; ?></td>
                                          <td class="styleth"><img src="uploadsC/<?= basename($Mat['image']) ?>" alt="<?= $Mat['nom_M'] ?>" width="80"></td>
                                          <td class="styleth"><?= $Mat['nom_cl']; ?></td>


				                    		  <td>
                                    <a class="toggle-edit2" onclick="
                                    editMat(
                                      '<?= $Mat['id_M']; ?>',
                                      '<?= $Mat['nom_M']; ?>',
                                      '<?= $Mat['type_M']; ?>',
                                      '<?= $Mat['image']; ?>',
                                      '<?= $Mat['nom_cl']; ?>'
                                      
                                      
                                    )">
                                      <i class="edit-del-icon uil uil-edit"></i>
                                    </a>
                                    <a href="deleteMat.php?id_M=<?php echo $Mat['id_M']; ?>"><i class="edit-del-icon uil uil-trash-alt"></i></a>
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
        <script>

function searchM() {
             // Declare variables
                 var input, filter, table, tr, td, i, txtValue;
                                 input = document.getElementById("search-input-mat");
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
                document.getElementById("search-input-mat").addEventListener("input", function(event) {
                    searchM();
                });
                document.getElementById("search-input-mat").addEventListener("blur", function() {
                  searchM();
          });



          document.getElementById("sort-alpha2").addEventListener("click", function() {
    var table, rows, switching, i, x, y, shouldSwitch;
    table = document.getElementById("tableau2");
    switching = true;

    // Run loop until no switching is needed
    while (switching) {
        switching = false;
        rows = table.rows;
        for (i = 1; i < (rows.length - 1); i++) {
            shouldSwitch = false;
            x = rows[i].getElementsByTagName("td")[1];
            y = rows[i + 1].getElementsByTagName("td")[1];
            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                shouldSwitch = true;
                break;
            }
        }
        if (shouldSwitch) {
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
        }
    }
});
</script>   
        <div class="col-lg-4 col-md-6">
          <div class="card inputdivadd InputlistAdd2 slide-in-right">

          <!--! ====================================================== Input Ajout Modif       -->

          <form  class="form-group" method="POST" enctype="multipart/form-data" action="addMat.php">
				
				<ul>
					<li>
         
						<h3> Ajout matériel</h3>
					</li>
          
					<li>
          <style>.error-message {
                 color: red;
                font-size: 14px;
                 margin-top: 5px;
          }</style>

				<input type="text" name="nameam" class="form-style" placeholder="Nom" id="nameam" pattern="[a-zA-Z\s]+" onblur="checkNameMat()" required autocomplete="off">
            <span id="nameErrorm" class="error-message"></span>
						<i class="input-icon uil uil-clipboard"></i>
					</li>
          
         
          
					<li>
						<select name="typeam" class="form-style" placeholder="Type" id="typeam" autocomplete="off">
          <option value="FootBall">FootBall</option>
					<option  value="BasketBall">BasketBall</option>
					<option value="Tennis">Tennis</option>
					<option value="Dessin">Dessin</option>
                    <option value="Theatre">Théatre</option>

      </select>
      <i class="input-icon uil uil-file-landscape"></i>

					</li>
          <li>
          <input type="file" name="imageam" class="form-style" placeholder="image" id="imageam"  autocomplete="off">
				   <i class="input-icon uil uil-image"></i>

					</li>
          <li>
          <input type="number" name="id_ca" class="form-style" placeholder="id Club a ajouter" id="id_ca" --pattern="[0-9]+" required autocomplete="off">
          <i class="input-icon uil uil-dialpad-alt"></i>

					</li>
          <li>
          <input type="text" name="nom_cla" class="form-style" placeholder="Nom Club a ajouter" id="nom_cla" - required autocomplete="off">
          <i class="input-icon uil uil-dialpad-alt"></i>

					</li>
				</ul>
				<input type="submit" name="Add" value="Soumettre" class="btninput mt-4">
			</form>
          </div>
        
          <div class="card inputdivedit InputlistEdit2 slide-out-right">
        <!--! ====================================================== Input Ajout Modif       -->
        <form  class="form-group" method="POST" enctype="multipart/form-data" action="updateMat.php">
				
				<ul>
					<li>
						<h3>Modification matériel</h3>
					</li>
					<li>
						<input type="number" name="id_M" class="form-style" placeholder="id Club a Modifier" id="id_M" --pattern="[0-9]+" required autocomplete="off">
						<i class="input-icon uil uil-dialpad-alt"></i>
					</li>
					<li>
						<input type="text" name="nameum" class="form-style" placeholder="Nom" id="nameum" pattern="[a-zA-Z\s]+" onblur="checkNameUpdateMat()" required autocomplete="off">
            <div id="updateErrorm" class="error-message"></div>
						<i class="input-icon uil uil-clipboard"></i>
					</li>

         


					<li>
						<select name="typeum" class="form-style" placeholder="Type" id="typeum" autocomplete="off">
          <option value="FootBall">FootBall</option>
					<option  value="BasketBall">BasketBall</option>
					<option value="Tennis">Tennis</option>
					<option value="Dessin">Dessin</option>
          <option value="Theatre">Théatre</option>

      </select>
						<i class="input-icon uil uil-file-landscape"></i>
					</li>
          <li>
					<input type="file" name="imageum" class="form-style" placeholder="image" id="imageum"   autocomplete="off">
				   <i class="input-icon uil uil-image"></i>

					</li>
          
          
				</ul>
				<input type="submit" name="Update" value="Soumettre" class="btninput mt-4">
			</form>

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
    
    var Football = <?= $countFoot ?>;
    var Basket = <?= $countbasket ?>;
    var Tennis = <?= $countTennis ?>;
    var Théatre = <?= $counttheatre ?>;
    var dessin = <?= $countdessin ?>;

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["Football", "BasketBall", "Tennis", "Théatre", "Dessin"],
        datasets: [{
          label: "Nombre",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [Football, Basket, Tennis, Théatre, dessin],
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


    var ctx2 = document.getElementById("chart-bars2").getContext("2d");

    var FootballM = <?= $countFootM ?>;
    var BasketM = <?= $countbasketM ?>;
    var TennisM = <?= $countTennisM ?>;
    var ThéatreM = <?= $counttheatreM ?>;
    var dessinM = <?= $countdessinM ?>;



    new Chart(ctx2, {
      type: "bar",
      data: {
        labels: ["Football", "BasketBall", "Tennis", "Théatre", "Dessin"],
        datasets: [{
          label: "Nombre",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [FootballM, BasketM, TennisM, ThéatreM, dessinM],
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


    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "bar",
      data: {
        labels: ["Football", "BasketBall", "Tennis", "Théatre", "Dessin"],
        datasets: [{
          label: "Nombre",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [FootballM, BasketM, TennisM, ThéatreM, dessinM],
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
  <script src="./assets Dashboard/js Dashboard/input-control-club.js"></script>


</body>

</html>