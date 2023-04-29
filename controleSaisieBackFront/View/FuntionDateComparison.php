<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once './assets/Mailing/Exception.php';
require_once './assets/Mailing/PHPMailer.php';
require_once './assets/Mailing/SMTP.php';

include_once "../Controller/UtilisateurC.php";
include_once "../Controller/EventC.php";
include_once "../Controller/ReservationC.php";

$valeur_id = isset($_GET['val_id']) ? $_GET['val_id'] : 0;


$ReservationC = new ReservationC();
$Reserv = $ReservationC->DateReservation($valeur_id);


foreach ($Reserv as $ide){ $idEvent = $ide['idEvent']; } ; // Id de l'évènement
echo "IdEvent: ".$idEvent."<br>";

$EventC = new EventC();
$DateEvent = $EventC->DateEvent($idEvent);

foreach ($DateEvent as $datee){ $event_date = $datee['date'];  // Date de l'évènement
                                $event_name = $datee['name']; } ; // Nom de l'évènement
echo "DateEvent: ".$event_date."<br>";
echo "DateEvent: ".$event_name."<br>";

$mail = new PHPMailer(true);
$alert = '';

// Email et Message
foreach ($Reserv as $Userr){ $email = $Userr['email']; } ;      //receiver Email
$message = "Vous avez un évènement nommé ".$event_name."reservé  le ".$event_date;    //Message sent
echo "Email: ".$email."<br>";
// Date actuelle
$current_date = date("Y-m-d");

// Date dans deux jours
$two_days_later = date("Y-m-d", strtotime("+2 days"));
$one_days_later = date("Y-m-d", strtotime("+1 days"));

$EventC->deleteExpiredEvents();
$test=$EventC->historiqueMail($valeur_id,$event_date);

if($test==0)
{
    // Comparaison des dates
    if (($event_date == $two_days_later)||($event_date == $one_days_later)) {
        // Envoi du mail de rappel
        try {
            $mail->isSMTP();
            $mail->Host= 'smtp.gmail.com';
            $mail->SMTPAuth= true;
            $mail->Username= 'culturnacop@gmail.com';
            $mail->Password= 'kdpxcaqpexwxnlbn';
            $mail->SMTPSecure= PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port= 587;
    
            $mail->setFrom('culturnacop@gmail.com' , ); 
            $mail->addAddress($email); 
    
            $mail->Subject = 'Message Received (Contact Page)';
            $mail->Body = '<h3>Message : '.$message.'</h3>';
            $mail->IsHTML(true);
    
            $mail->send();
            $alert = 'Message envoyé avec succès !';
    
        } catch (Exception $e) {
            $alert = 'Une erreur s\'est produite lors de l\'envoi du message. Veuillez réessayer plus tard.';
        }
    }
}

header('location:Page_accueil.php?val_id=' . urlencode($valeur_id));

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="./assets Dashboard/img Dashboard/favicon.png">
  <title> Culturna </title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
  <link rel="stylesheet" href="./assets/CSS/Loading.css">

</head>
<body>
     <div id="load">
      <div>G</div>
      <div>N</div>
      <div>I</div>
      <div>D</div>
      <div>A</div>
      <div>O</div>
      <div>L</div>
    </div> 
</body>
</html>