<?php
include_once '../Controller/ClubC.php';
// Inclure la bibliothèque QR Code


$ClubC = new ClubC();
$listFoot = $ClubC->listClubtype("FootBall");
$listBasket = $ClubC->listClubtype("BasketBall");
$listTennis = $ClubC->listClubtype("Tennis");
$listDessin = $ClubC->listClubtype("Dessin");
$listTheatre = $ClubC->listClubtype("Théatre");




?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> Culturna </title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
  <link rel="stylesheet" href="./style Event.css">
  <link rel="stylesheet" href="./styleEventRotation.css">
  <link rel="stylesheet" href="./styleInputNextPrevious.css">
	<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
  <link rel="stylesheet" href="Qrcode.css">

</head>
<body>



	<!--! Background Animation ================================================== -->
	<section class="bganim">
		<div class='air air1'></div>
		<div class='air air2'></div>
		<div class='air air3'></div>
		<div class='air air4'></div>
	</section>

	<!--! Header ================================================== -->

    <header id="header">
        <div class="header-back">
            <a href="#" class="Skapere">Skapere</a>
        </div>

        <div class="header-back">
            <ul >
                
                <li><a href="#" class="active">Clubs</a></li>
                <li><a href="#" >Evenement</a></li>
                <li><a href="#">Reclamation</a></li>
				<li><a href="#">Magasin</a></li>
                <li><a href="#">Dashboard</a></li>
				
            </ul>
        </div>
    </header>




	<!--! Scroll back to top ================================================== -->
	<div class="scroll-to-top"></div>


	<!--! Burger Menu or Sidebar ============================================== -->

	<div class="burger">
		<span></span>
	  </div>
	  
	  <nav class="navadmin">
		<ul class="main">
		  	<li><h3 href="#" >Type des Clubs:</h3></li>
		  	<li><a href="#" class="active">Football</a></li>
		  	<li><a href="#">BasketBall</a></li>
		  	<li><a href="#">Tennis</a></li>
		  	<li><a href="#">Dessin</a></li>
		  	<li><a href="#">Théatre</a></li>
				<li><a href="MatFront.php" >Voir la liste des materiels</a></li>
				<li><a href="Qr.php">Chercher un club</a></li>
		</ul>
	  </nav>

	  <div class="overlay"></div>


	  <!--! Liste Club par Type ============================================== -->
		
		
	<section class="List">
		<ul class="Tablelist">
			<li class="Type Type1">
				<h1 class="Title_Types"> Football </h1>
				<ul class="UnType">
					
				<?php
				foreach ($listFoot as $Club) 
        		{

        		?>
					<li class="UnEvent">
					<button class="card_event" >
							<div class="card_event_contenu">
								<div class="card_frontinfo">
									<img id="im"src="uploadsC/<?= basename($Club['image']) ?>" alt="<?= $Club['nom_C'] ?>" class="img_event" onclick="afficherMateriels(<?= $Club['id_Club']; ?>)" width="80">
								</div>
								<div class="card_backinfo">
									<h1 class="NomEvent"><?= $Club['nom_C']; ?></h1>
									<h2 class="PrixEvent"><?= $Club['mailC']; ?></h2>
									<div class="DateEvent">
									<?php
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



									
									?>
									</div>
									<!--<div id="container">
									<div class="input-form">

									<button id="<?//= $Club['id_Club']; ?>bt" class="generate-btn" data-input="<?///= $Club['id_Club']; ?>in" data-img="<?//= $Club['id_Club']; ?>im">QR Code</button>
<input type="hidden" id="<?//= $Club['id_Club']; ?>in" value="<?//= $Club['nom_C']; ?>">


    
    </div>
    <div id="qr-code">
		<img id="<?//= $Club['id_Club']; ?>im" src="uploadsC/qrcode.png" alt="QR Code" />

    </div>-->
		</div>
	
	
	


								</div>
							</div>
						</button>
					</li>
				<?php
       			}
        		?>	
				</ul>
			</li>
			<li class="Type Type1">
				<h1 class="Title_Types"> BasketBall</h1>
				<ul class="UnType">
				<?php
				foreach ($listBasket as $Club) 
        		{
        		?>
					<li class="UnEvent">
						
					<button class="card_event" data-id="<?= $Club['id_Club']; ?>">
							<div class="card_event_contenu">
								<div class="card_frontinfo">
								<img src="uploadsC/<?= basename($Club['image']) ?>" alt="<?= $Club['nom_C'] ?>" class="img_event" width="80">
								
</div>
								<div class="card_backinfo">
									
									<h1 class="NomEvent"><?= $Club['nom_C']; ?></h1>
									<h2 class="PrixEvent"><?= $Club['mailC']; ?></h2>
									<div class="DateEvent">
									<?php
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



									
									?>
									</div>
								</div>
							</div>
						</button>
					</li>
				<?php
       			}
        		?>	
				</ul>
			</li>
			<li class="Type Type1">
				<h1 class="Title_Types"> Tennis </h1>
				<ul class="UnType">
				<?php
				foreach ($listTennis as $Club) 
        		{
        		?>
					<li class="UnEvent">
						
					<button class="card_event" data-id="<?= $Club['id_Club']; ?>">
							<div class="card_event_contenu">
								<div class="card_frontinfo">
								<img src="uploadsC/<?= basename($Club['image']) ?>" alt="<?= $Club['nom_C'] ?>" class="img_event" width="80">
								</div>
								<div class="card_backinfo">
									
									<h1 class="NomEvent"><?= $Club['nom_C']; ?></h1>
									<h2 class="PrixEvent"><?= $Club['mailC']; ?></h2>
									<div class="DateEvent">
									<?php
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



									
									?>
									</div>
								</div>
							</div>
						</button>
					</li>
				<?php
       			}
        		?>	
				</ul>
			</li>
			<li class="Type Type1">
				<h1 class="Title_Types"> Dessin </h1>
				<ul class="UnType">
				<?php
				foreach ($listDessin as $Club) 
        		{
        		?>
					<li class="UnEvent">
					
					<button class="card_event" data-id="<?= $Club['id_Club']; ?>">
							<div class="card_event_contenu">
								<div class="card_frontinfo">
								<img src="uploadsC/<?= basename($Club['image']) ?>" alt="<?= $Club['nom_C'] ?>" class="img_event" width="80">
								</div>
								<div class="card_backinfo">
									
									<h1 class="NomEvent"><?= $Club['nom_C']; ?></h1>
									<h2 class="PrixEvent"><?= $Club['mailC']; ?></h2>
									<div class="DateEvent">
									<?php
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



									
									?></div>
								</div>
							</div>
						</button>
					</li>
				<?php
       			}
        		?>	
				</ul>
			</li>
			<li class="Type Type1">
				<h1 class="Title_Types"> Theatre</h1>
				<ul class="UnType">
				<?php
				foreach ($listTheatre as $Club) 
        		{
        		?>
					<li class="UnEvent">
						
					<button class="card_event" data-id="<?= $Club['id_Club']; ?>">
							<div class="card_event_contenu">
								<div class="card_frontinfo">
								<img src="uploadsC/<?= basename($Club['image']) ?>" alt="<?= $Club['nom_C'] ?>" class="img_event" width="80">
								</div>
								<div class="card_backinfo">
									
									<h2 class="NomEvent"><?= $Club['nom_C']; ?></h2>
									<h2 class="PrixEvent"><?= $Club['mailC']; ?></h2>
									<div class="DateEvent">
									<?php
switch ($Club['noteC']) {
  case 1:
		echo"<span class='fas fa-star  checked' data-star='1' ></span>";
		echo"<span class='fas fa-star ' data-star='2' ></span>";
		echo"<span class='fas fa-star ' data-star='3' ></span>";
		echo"<span class='fas fa-star ' -star='4' ></span>";
		echo"<span class='fas fa-star ' data-star='5' ></span>";

    break;
  case 2:
    echo"<span class='fas fa-star checked' data-star='1' ></span>";
		echo"<span class='fas fa-star checked' data-star='2' ></span>";
		echo"<span class='fas fa-star ' data-star='3' ></span>";
		echo"<span class='fas fa-star ' data-star='4' ></span>";
		echo"<span class='fas fa-star ' data-star='5' ></span>";
    break;
  case 3:
    echo"<span class='fas fa-star checked' data-star='1' ></span>";
		echo"<span class='fas fa-star checked' data-star='2' ></span>";
		echo"<span class='fas fa-star checked ' data-star='3' ></span>";
		echo"<span class='fas fa-star  ' data-star='4' ></span>";
		echo"<span class='fas fa-star ' data-star='5' ></span>";
    break;
		case 4:
			echo"<span class='fas fa-star checked' data-star='1' ></span>";
			echo"<span class='fas fa-star checked' data-star='2' ></span>";
			echo"<span class='fas fa-star checked ' data-star='3' ></span>";
			echo"<span class='fas fa-star  checked' data-star='4' ></span>";
			echo"<span class='fas fa-star ' data-star='5' ></span>";
			break;
			case 5:
				echo"<span class='fas fa-star checked' data-star='1' ></span>";
				echo"<span class='fas fa-star checked' data-star='2' ></span>";
				echo"<span class='fas fa-star checked ' data-star='3' ></span>";
				echo"<span class='fas fa-star checked ' data-star='4' ></span>";
				echo"<span class='fas fa-star checked' data-star='5' ></span>";
				break;
  default:
    echo ".";
}



									
									?>
									</div>
								</div>
							</div>
						</button>
					</li>
				<?php
       			}
        		?>	
				</ul>
			</li>
			
				</ul>
			</li>
		</ul>
		
	</section>
	
<script>
      <!/*function goToPage(clubId) {
        window.location.href = "path/to/page.php?clubId=" + clubId;
      }*/
    </script>
		<footer></footer>
    <script>
    /*var btnsQR = document.querySelectorAll('.btn_qr');
    btnsQR.forEach(function(btnQR) {
        btnQR.addEventListener('click', function() {
            var qrNomClub = this.getAttribute('data-nomclub');
            var qrCode = new QRCode(document.createElement('div'), {
                text: qrNomClub,
                width: 128,
                height: 128,
                colorDark : "#000000",
                colorLight : "#ffffff",
                correctLevel : QRCode.CorrectLevel.H
            });
            var qrCodeImg = qrCode._oQRCode.createImgTag(4);
            var qrModalBody = document.querySelector('#qrModal .modal-body');
            qrModalBody.innerHTML = qrCodeImg;
            $('#qrModal').modal('show');
        });
    });*/
// Get all the buttons with class "generate-btn"
/*var generateBtns = document.getElementsByClassName("generate-btn");

// Loop through all the buttons and add the event listener
for (var i = 0; i < generateBtns.length; i++) {
  var generateBtn = generateBtns[i];
  var qrInput = document.getElementById(generateBtn.dataset.input);
  var qrImg = document.getElementById(generateBtn.dataset.img);
  generateBtn.addEventListener("click", function() {
    if (qrInput.value.length > 0) {
      this.generateBtn.innerText = "Generating QR Code...";
      this.qrImg.src = "https://api.qrserver.com/v1/create-qr-code/?size=170x170&data=" + qrInput.value;
      this.qrImg.onload = function() {
        container.classList.add("active");
        generateBtn.innerText = "Generate QR Code";
      }
    }
  });
}



		/*var container = document.getElementById("container");
    var generateBtn = document.getElementById("<?//= $Club['id_Club']; ?>bt");
    var qrInput = document.getElementById("<?//= $Club['id_Club']; ?>in");
    var qrImg = document.getElementById("<//?= $Club['id_Club']; ?>im");

    generateBtn.onclick = function () {      
      if(qrInput.value.length > 0){ 
        generateBtn.innerText = "Generating QR Code..."       
        qrImg.src = "https://api.qrserver.com/v1/create-qr-code/?size=170x170&data="+qrInput.value;
        qrImg.onload = function () {
          container.classList.add("active");
          generateBtn.innerText = "Generate QR Code";
        }
      }
    }
		/*var clubButtons = document.querySelectorAll(".qr-button");

for (var i = 0; i < clubButtons.length; i++) {
  clubButtons[i].addEventListener("click", function() {
    var clubnom = this.parentNode.querySelector(".qr-input");
    var qrImage = this.parentNode.querySelector(".qr-image");

    qrImage.src = "https://api.qrserver.com/v1/create-qr-code/?size=170x170&data=" + clubnom.value;
    this.parentNode.querySelector(".qr-code").classList.add("active");
  });
}
*/

</script>

<section class="input-visibility flip-out-hor-top out-of-screen" >
		<form  method="POST" action="" >
			<div class="stepper" >
				<div class="step--1 step-active"></div>
				<div class="step--2"></div>
			</div>
			<div class="form form-active">
				<a href="#" id="closebtn1"><i class="icon-close uil uil-times-circle"></i></a>
				<div class="form--header-container">
					<h1 class="form--header-title">
						Club
					</h1>
	
					<p class="form--header-text">
						Donner une note
					</p>
				</div>
				<input type="hidden" name="idEventa" id="idEventa"/>
				<input type="hidden" name="prixeventa" id="prixeventa"/>
				<input type="hidden" name="dateeventa" id="dateeventa"/>
				<input class="inputreserv" type="text" placeholder="Name" name="namea" id="namea"/>
				<input class="inputreserv" type="email" placeholder="Email" name="emaila" id="emaila"/>
				<button class="form__btn" id="btn-1">Next</button>
			</div>
			<div class="form">
				<a href="#" id="closebtn2"><i class="icon-close uil uil-times-circle"></i></a>
				<div class="form--header-container">
				
				<button class="form__btn" id="btn-3-prev"></button>
				<button class="form__btn invis" id="btn-3"></button>
				<input type="submit" name="Add" value="Submit" class="form__btn">
			</div>
			<div class="form--message"></div>
		</form>
	</section>


    
</body>












		</body>
		
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
		<script  src="./script Event.js"></script>
		<script  src="./scriptInputNextPrevious.js"></script>
		<script src="./assets/JS/InputControlFront.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script> 

		
		
</html>
