<?php
include_once '../Controller/TransportC.php';
include_once '../Controller/ChauffeurC.php';
include_once "../Controller/UtilisateurC.php";


$valeur_id = isset($_GET['val_id']) ? $_GET['val_id'] : 0;
$UtilisateurC = new UtilisateurC();
$Username= $UtilisateurC->nomUtilisateur($valeur_id);

$ChauffeurC= new ChauffeurC();
$id_chauffeur=$ChauffeurC->idChauffeur($valeur_id);

$ReservationC = new TransportC();
$list = $ReservationC->listTransportpourchauffeur($id_chauffeur);

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> Culturna </title>
  <link rel="icon" type="image/png" href="./assets Dashboard/img Dashboard/favicon.png">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
  <link rel="stylesheet" href="./assets/CSS/Reservation.css">

</head>
<body>

	<!--! Header ================================================== -->

    <header id="header">
        <div class="header-back">
            <a href="#" class="Skapere">Skapere</a>
        </div>

        <div class="header-back">
            <ul>
                <li><a href="#" class="active">Transport</a></li>
                <?php
        		foreach ($Username as $User) 
        		{
        		?>
						<li>
							<?php echo "<a href='Page_Profile.php?val_id=" . $valeur_id ."'>".$User['Username']."</a>"; ?>
						</li>
						<?php
				}
        		?>
            </ul>
        </div>
    </header>

	  <!--! Table or list ============================================== -->
	<section class="List">
		<div class="Tablelist">
			<table class="tableview tableau1">
				<tr class="TitleTab">
					<th class="styleth">Type</th>
					<th class="styleth">Nbr Personne</th>
					<th class="styleth">Date</th>
					<th class="styleth">Adresse</th>
                    <th class="styleth">Nom</th>
					<th class="styleth">Tel</th>
					<th class="styleth">Message</th>
					<th class="styleth">Action</th>
				</tr>
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
						<td class="styleth">
							<?php $test=$Transport['Id_T'];
							$id_Client= $Transport['IdClient'];
							echo "<a href='./FunctionShareLocalisation.php?val_id=" . $valeur_id ."&id_Chauffeur=". $id_chauffeur ."&id_Client=". $id_Client ."&once=". 0 ."'><i class='edit-del-icon uil uil-check'></i></a>"; ?>
						</td>
					</tr>
                    <?php
        		}
       		 ?>	
			</table>
				<button class="uil uil-step-backward" id= "bouton-precedent1"disabled></button>
        		<button class="uil uil-skip-forward" id="bouton-suivant1"></button>
		</div>
	</section>

	<!--! Scroll back to top ================================================== -->
	<div class="scroll-to-top"></div>

    
</body>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script  src="./assets/JS/scriptdashboard.js"></script>
<script src="./assets/JS/InputControlFront.js"></script>
<script src="./assets Dashboard/js Dashboard/Input-Variables.js"></script>
<script src="./assets/JS/pagination.js"></script>


</html>