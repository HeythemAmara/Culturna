<?php
include_once '../Controller/TransportC.php';
include_once '../Controller/ChauffeurC.php';
include_once "../Controller/UtilisateurC.php";

use PHPMailer\PHPMailer\PHPMailer;
require_once './assets/Mailing/Exception.php';
require_once './assets/Mailing/PHPMailer.php';
require_once './assets/Mailing/SMTP.php';


$valeur_id = isset($_GET['val_id']) ? $_GET['val_id'] : 0;
$id_Chauffeur = isset($_GET['id_Chauffeur']) ? $_GET['id_Chauffeur'] : 0;
$id_Client = isset($_GET['id_Client']) ? $_GET['id_Client'] : 0;

echo "<br>".$valeur_id."<br>";
echo "<br>".$id_Chauffeur."<br>";
echo "<br>".$id_Client."<br>";

$UtilisateurC = new UtilisateurC();
$email= $UtilisateurC->emailUtilisateur($id_Client);

$ChauffeurC = new ChauffeurC();


$mail = new PHPMailer(true);
$alert = '';

$link="https://c0b7-197-19-242-220.ngrok-f
ree.app/Culturna/perso/controleSaisieBackFront/View/Page_SharedLocalisation.php?id_Client=".$id_Client."&id_chauffeur=".$id_Chauffeur;


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
        $mail->Body = '
        <!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
<meta charset="utf-8"> <!-- utf-8 works for most cases -->
<meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldnt be necessary -->
<meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
<meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
<title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700|Lato:300,400,700" rel="stylesheet">

<!-- CSS Reset : BEGIN -->
<style>

    /* What it does: Remove spaces around the email design added by some email clients. */
    /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
    html,
body {
margin: 0 auto !important;
padding: 0 !important;
height: 100% !important;
width: 100% !important;
background: #f1f1f1;
}

/* What it does: Stops email clients resizing small text. */
* {
-ms-text-size-adjust: 100%;
-webkit-text-size-adjust: 100%;
}

/* What it does: Centers email on Android 4.4 */
div[style*="margin: 16px 0"] {
margin: 0 !important;
}

/* What it does: Stops Outlook from adding extra spacing to tables. */
table,
td {
mso-table-lspace: 0pt !important;
mso-table-rspace: 0pt !important;
}

/* What it does: Fixes webkit padding issue. */
table {
border-spacing: 0 !important;
border-collapse: collapse !important;
table-layout: fixed !important;
margin: 0 auto !important;
}

/* What it does: Uses a better rendering method when resizing images in IE. */
img {
-ms-interpolation-mode:bicubic;
}

/* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
a {
text-decoration: none;
}

/* What it does: A work-around for email clients meddling in triggered links. */
*[x-apple-data-detectors],  /* iOS */
.unstyle-auto-detected-links *,
.aBn {
border-bottom: 0 !important;
cursor: default !important;
color: inherit !important;
text-decoration: none !important;
font-size: inherit !important;
font-family: inherit !important;
font-weight: inherit !important;
line-height: inherit !important;
}

/* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
.a6S {
display: none !important;
opacity: 0.01 !important;
}

/* What it does: Prevents Gmail from changing the text color in conversation threads. */
.im {
color: inherit !important;
}

/* If the above doesnt work, add a .g-img class to any image in question. */
img.g-img + div {
display: none !important;
}

/* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
/* Create one of these media queries for each additional viewport size youd like to fix */

/* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
@media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
u ~ div .email-container {
    min-width: 320px !important;
}
}
/* iPhone 6, 6S, 7, 8, and X */
@media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
u ~ div .email-container {
    min-width: 375px !important;
}
}
/* iPhone 6+, 7+, and 8+ */
@media only screen and (min-device-width: 414px) {
u ~ div .email-container {
    min-width: 414px !important;
}
}

</style>

<!-- CSS Reset : END -->

<!-- Progressive Enhancements : BEGIN -->
<style>

    /* What it does: Hover styles for buttons */
    .primary{
background: #448ef6;
}
.bg_white{
background: #ffffff;
}
.bg_light{
background: #fafafa;
}
.bg_black{
background: #000000;
}
.bg_dark{
background: rgba(0,0,0,.8);
}
.email-section{
padding:2.5em;
}

/*BUTTON*/
.btn{
padding: 5px 15px;
display: inline-block;
}
.btn.btn-primary{
border-radius: 30px;
background: #448ef6;
color: #ffffff;
}
.btn.btn-white{
border-radius: 30px;
background: #ffffff;
color: #000000;
}
.btn.btn-white-outline{
border-radius: 30px;
background: transparent;
border: 1px solid #fff;
color: #fff;
}

h1,h2,h3,h4,h5,h6{
font-family: "Josefin Sans", sans-serif;
color: #000000;
margin-top: 0;
font-weight: 400;
}

body{
font-family: "Josefin Sans", sans-serif;
font-weight: 400;
font-size: 15px;
line-height: 1.8;
color: rgba(0,0,0,.4);
}

a{
color: #448ef6;
}

table{
}
/*LOGO*/

.logo{
margin: 0;
display: inline-block;
position: absolute;
top: 10px;
left: 0;
right: 0;
margin-bottom: 0;
}

.logo a{
color: #fff;
font-size: 24px;
font-weight: 700;
text-transform: uppercase;
font-family: "Josefin Sans", sans-serif;
display: inline-block;
border: 2px solid #fff;
line-height: 1.3;
padding: 10px 15px 4px 15px;
margin: 0;
}
.logo h1 a span{
line-height: 1;
}

.navigation{
padding: 0;
}
.navigation li{
list-style: none;
display: inline-block;;
margin-left: 5px;
font-size: 13px;
font-weight: 500;
}
.navigation li a{
color: rgba(0,0,0,.4);
}

/*HERO*/
.hero{
position: relative;
z-index: 0;
}

.hero .overlay{
position: absolute;
top: 0;
left: 0;
right: 0;
bottom: 0;
content: "";
width: 100%;
background: #000000;
z-index: -1;
opacity: .3;
}

.hero .text{
color: rgba(255,255,255,.9);
}
.hero .text h2{
color: #fff;
font-size: 40px;
margin-bottom: 0;
font-weight: 600;
line-height: 1;
text-transform: uppercase;
}
.hero .text h2 span{
font-weight: 600;
color: #448ef6;
}


/*HEADING SECTION*/
.heading-section{
}
.heading-section h2{
color: #000000;
font-size: 28px;
margin-top: 0;
line-height: 1.4;
font-weight: 700;
text-transform: uppercase;
letter-spacing: 1px;
}
.heading-section .subheading{
margin-bottom: 20px !important;
display: inline-block;
font-size: 13px;
text-transform: uppercase;
letter-spacing: 2px;
color: rgba(0,0,0,.4);
position: relative;
}
.heading-section .subheading::after{
position: absolute;
left: 0;
right: 0;
bottom: -10px;
content: "";
width: 100%;
height: 2px;
background: #448ef6;
margin: 0 auto;
}

.heading-section-white{
color: rgba(255,255,255,.8);
}
.heading-section-white h2{
font-family: 
line-height: 1;
padding-bottom: 0;
}
.heading-section-white h2{
color: #ffffff;
}
.heading-section-white .subheading{
margin-bottom: 0;
display: inline-block;
font-size: 13px;
text-transform: uppercase;
letter-spacing: 2px;
color: rgba(255,255,255,.4);
}


/*BLOG*/
.blog-entry{
border: 1px solid red;
padding-bottom: 30px !important !important;
}
.text-blog .meta{
text-transform: uppercase;
font-size: 13px;
margin-bottom: 0;
}

/*FOOTER*/

.footer{
color: rgba(255,255,255,.5);

}
.footer .heading{
color: #ffffff;
font-size: 20px;
}
.footer ul{
margin: 0;
padding: 0;
}
.footer ul li{
list-style: none;
margin-bottom: 10px;
}
.footer ul li a{
color: rgba(255,255,255,1);
}


@media screen and (max-width: 500px) {


}


</style>


</head>

<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #222222;">
<center style="width: 100%; background-color: #f1f1f1;">
<div style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
  &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
</div>
<div style="max-width: 600px; margin: 0 auto;" class="email-container">
    <!-- BEGIN BODY -->
  <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
      <tr>
      <td valign="middle" class="hero bg_white" style="background-image: url(https://swiver.io/wp-content/uploads/2022/04/Intelligence-collective-en-entreprise.webp); background-size: cover; height: 400px;">
          <div class="overlay"></div>
        <table>
            <tr>
                <td>
                    <div class="text" style="padding: 0 4em; text-align: center;">
                        <h1 class="logo"><a href="./Page_accueil.php">Culturna</a></h1>
                        <h2>Heythem is Coming</h2>
                        <img src="./assets Dashboard/img Dashboard/logo-white.png" alt="">
                        <p>'. $link .'</p>
                        <p><a href="./Page_accueil.php" class="btn btn-primary">Read more</a></p>
                    </div>
                </td>
            </tr>
        </table>
      </td>
      </tr><!-- end tr -->
  </table>
</div>
</center>
</body>
</html>';
        $mail->IsHTML(true);

        $mail->send();

    } catch (Exception $e) {
        $alert = 'Une erreur s\'est produite lors de l\'envoi du message. Veuillez réessayer plus tard.';
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div id="map"></div>
    <div id="details" style="background-color: white;"></div>

    <script>
var reqcount = 0;
var prevCoords = null;

navigator.geolocation.watchPosition(successCallback);

function successCallback(position) {
    const { accuracy, latitude, longitude, altitude, heading, speed } = position.coords;
    // Show a map centered at latitude / longitude.
    reqcount++;
    details.innerHTML = "Accuracy: "+accuracy+"<br>";
    details.innerHTML += "Latitude: "+latitude+" | Longitude: "+longitude+"<br>";
    details.innerHTML += "Altitude: "+altitude+"<br>";
    details.innerHTML += "Heading: "+heading+"<br>";
    details.innerHTML += "Speed: "+speed+"<br>";
    details.innerHTML += "reqcount: "+reqcount;

    // Send the latitude and longitude to the server
    sendCoordsToServer(latitude, longitude);

    // Check if the new coordinates are different from the previous coordinates
    if (prevCoords == null || prevCoords.latitude != latitude || prevCoords.longitude != longitude) {
        map.innerHTML = '<iframe width="350" height="450" src="https://maps.google.com/maps?q='+latitude+','+longitude+'&amp;z=15&amp;output=embed"></iframe>';
        prevCoords = { latitude, longitude };
    }
}

function sendCoordsToServer(latitude, longitude) {
    // Create a new XMLHttpRequest object
    var xhr = new XMLHttpRequest();

    // Set the URL of the server-side script to the current PHP script
    var url = '<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' + '?id_Chauffeur=<?php echo $id_Chauffeur ?>&id_Client=<?php echo $id_Client ?>';

    // Set the HTTP method (GET or POST) and specify that we want to make an asynchronous request
    xhr.open('POST', url, true);

    // Set the request headers (if needed)
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // Define the data that we want to send to the server
    var data = 'latitude=' + encodeURIComponent(latitude) + '&longitude=' + encodeURIComponent(longitude);

    // Send the request with the data
    xhr.send(data);

    // Add an AJAX call to the Sharelocation function to update the location without reloading the page
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var response = this.responseText;
            console.log(response);
            // Call the Sharelocation function with the updated latitude and longitude values
            <?php $ChauffeurC->Sharelocation($id_Chauffeur, $id_Client, "'+latitude+'", "'+longitude+'"); ?>
        }
    };
}
</script>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the latitude and longitude values from the POST request
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    $id_Chauffeur = isset($_GET['id_Chauffeur']) ? $_GET['id_Chauffeur'] : 0;
    $id_Client = isset($_GET['id_Client']) ? $_GET['id_Client'] : 0;

    // Do something with the latitude and longitude values, such as saving them to a database
    $ChauffeurC->Sharelocation($id_Chauffeur, $id_Client, $latitude, $longitude);
    // Send a response back to the client
    echo 'Latitude: ' . $latitude . ' | Longitude: ' . $longitude;
}  

    
?>



</body>
</html>