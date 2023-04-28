<!--<!DOCTYPE html>
<html>
  <head>
    <title>Page Example</title>
  </head>
  <body>
    <script>
      const urlParams = new URLSearchParams(window.location.search);
      const clubId = urlParams.get('clubId');
      console.log(clubId);
    </script>
  </body>
</html>-->

<?php

include '../Controller/ClubC.php';
/*$clubC = new ClubC();

$id_club = $_GET['id_Club'];

$clubC = new ClubC();
$materiels = $clubC->getMaterielsByClub($id_club);

echo json_encode($materiels);*/


$clubC = new ClubC();

if (isset($_POST['id_Club'])) {
    $id_club = $_POST['id_Club'];
    $materiels = $clubC->getMaterielsByClub($id_club);
}
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

</head>
<body>
<section class="bganim">
		<div class='air air1'></div>
		<div class='air air2'></div>
		<div class='air air3'></div>
		<div class='air air4'></div>
	</section>


  <header id="header">
        <div class="header-back">
            <a href="#" class="Skapere">Skapere</a>
        </div>

        <div class="header-back">
            <ul>
                
                <li><a href="#" class="active">Clubs</a></li>
                <li><a href="#" >Evenement</a></li>
                <li><a href="#">Reclamation</a></li>
				<li><a href="#">Magasin</a></li>
                <li><a href="#">Dashboard</a></li>
				
            </ul>
        </div>
    </header>
    <div class="scroll-to-top"></div>


    <h1>Materiels associés au club</h1>
    <ul>
        <?php foreach ($materiels as $materiel) 
        {

          ?>
        <li class="UnEvent">
           <class="UnEvent">
        
          <button class="card_event" data-id="<?= $materiel['id_M']; ?>">
            <div class="card_event_contenu">
              <div class="card_frontinfo">
              
                <img id="im"src="uploadsC/<?= basename($materiel['image']) ?>" alt="<?= $materiel['nom_M'] ?>" class="img_event" width="80">
                
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
</body>

</html>
         
   



