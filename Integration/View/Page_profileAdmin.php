<!--           NNNEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWW              -->
<?php
include "../Controller/UtilisateurC.php";

use PHPMailer\PHPMailer\PHPMailer;
require_once './assets/Mailing/Exception.php';
require_once './assets/Mailing/PHPMailer.php';
require_once './assets/Mailing/SMTP.php';

//$valeur_id =7;
$valeur_id = isset($_GET['val_id']) ? $_GET['val_id'] : 0;
$UtilisateurC = new UtilisateurC();
$Usernameprofile= $UtilisateurC->nomUtilisateur($valeur_id);
$Username= $UtilisateurC->Username($valeur_id);
$Fullnameprofile= $UtilisateurC->Fullname($valeur_id);
$list=$UtilisateurC->listUserId($valeur_id);
$test=0; 

$current_date = date('d/F/Y');


$mail = new PHPMailer(true);
$alert = '';





foreach ($Usernameprofile as $Userr) {}

if(isset($_POST['changemdp'])) {

	//generation de clé
	$chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$key = '';
	for ($i = 0; $i < 8; $i++) {
	  $key .= $chars[rand(0, strlen($chars) - 1)];
	}



$MailTitle="Changement de Mot de passe";

$messagebody="Votre Code est : ".$key;

	//mailing
	$email = $Userr["Email"] ;

	try {
		$mail->isSMTP();
		$mail->Host= 'smtp.gmail.com';
		$mail->SMTPAuth= true;
		$mail->Username= 'culturnaskapere@gmail.com';
        	$mail->Password= 'kecpchkzrncsigpy';
        	$mail->SMTPSecure= PHPMailer::ENCRYPTION_STARTTLS;
        	$mail->Port= 587;

        	$mail->setFrom('culturnaskapere@gmail.com' , ); 
        	$mail->addAddress($email);  

		$mail->Subject = 'Message Received (Contact Page)';
		$mail->Body ='
        <!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
<!--[if gte mso 9]>
<xml>
  <o:OfficeDocumentSettings>
    <o:AllowPNG/>
    <o:PixelsPerInch>96</o:PixelsPerInch>
  </o:OfficeDocumentSettings>
</xml>
<![endif]-->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="x-apple-disable-message-reformatting">
  <!--[if !mso]><!--><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]-->
  <title></title>
  
    <style type="text/css">
      @media only screen and (min-width: 620px) {
  .u-row {
    width: 600px !important;
  }
  .u-row .u-col {
    vertical-align: top;
  }

  .u-row .u-col-100 {
    width: 600px !important;
  }

}

@media (max-width: 620px) {
  .u-row-container {
    max-width: 100% !important;
    padding-left: 0px !important;
    padding-right: 0px !important;
  }
  .u-row .u-col {
    min-width: 320px !important;
    max-width: 100% !important;
    display: block !important;
  }
  .u-row {
    width: 100% !important;
  }
  .u-col {
    width: 100% !important;
  }
  .u-col > div {
    margin: 0 auto;
  }
}
body {
  margin: 0;
  padding: 0;
}

table,
tr,
td {
  vertical-align: top;
  border-collapse: collapse;
}

p {
  margin: 0;
}

.ie-container table,
.mso-container table {
  table-layout: fixed;
}

* {
  line-height: inherit;
}

a[x-apple-data-detectors= true ] {
  color: inherit !important;
  text-decoration: none !important;
}

table, td { color: #000000; } #u_body a { color: #0000ee; text-decoration: underline; } @media (max-width: 480px) { #u_content_image_3 .v-container-padding-padding { padding: 40px 0px 0px !important; } #u_content_image_3 .v-src-width { width: auto !important; } #u_content_image_3 .v-src-max-width { max-width: 100% !important; } #u_content_heading_6 .v-container-padding-padding { padding: 20px 10px 40px !important; } #u_content_heading_6 .v-font-size { font-size: 20px !important; } #u_content_text_deprecated_7 .v-container-padding-padding { padding: 30px 10px 10px !important; } #u_content_text_deprecated_8 .v-container-padding-padding { padding: 10px 10px 30px !important; } #u_content_social_4 .v-container-padding-padding { padding: 30px 10px 10px !important; } #u_content_text_deprecated_9 .v-container-padding-padding { padding: 10px 10px 20px !important; } }
    </style>
  
  

<!--[if !mso]><!--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet" type="text/css"><!--<![endif]-->

</head>

<body class="clean-body u_body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #f8f8fc;color: #000000">
  <!--[if IE]><div class="ie-container"><![endif]-->
  <!--[if mso]><div class="mso-container"><![endif]-->
  <table id="u_body" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #f8f8fc;width:100%" cellpadding="0" cellspacing="0">
  <tbody>
  <tr style="vertical-align: top">
    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #f8f8fc;"><![endif]-->
    

<div class="u-row-container" style="padding: 0px;background-color: transparent">
  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
    <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: transparent;"><![endif]-->
      
<!--[if (mso)|(IE)]><td align="center" width="600" style="background-color: #dde7fe;width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
<div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
  <div style="background-color: #dde7fe;height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
  <!--[if (!mso)&(!IE)]><!--><div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->
  
<table id="u_content_image_3" style="font-family: Open Sans ,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:25px 0px 0px;font-family: Open Sans ,sans-serif;" align="left">
        
<table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr>
    <td style="padding-right: 0px;padding-left: 0px;" align="center">
      
      <img align="center" border="0" src="https://cdn.discordapp.com/attachments/804410208716849175/1104840843459838143/image-5.jpeg" alt="Hero Image" title="Hero Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 600px;" width="600" class="v-src-width v-src-max-width"/>
      
    </td>
  </tr>
</table>

      </td>
    </tr>
  </tbody>
</table>

  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
  </div>
</div>
<!--[if (mso)|(IE)]></td><![endif]-->
      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>



<div class="u-row-container" style="padding: 0px;background-color: transparent">
  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
    <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: transparent;"><![endif]-->
      
<!--[if (mso)|(IE)]><td align="center" width="600" style="background-color: #bdd1f9;width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
<div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
  <div style="background-color: #bdd1f9;height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
  <!--[if (!mso)&(!IE)]><!--><div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->
  
<table id="u_content_heading_6" style="font-family: Open Sans ,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:25px 10px 50px;font-family: Open Sans ,sans-serif;" align="left">
        
  <h1 class="v-font-size" style="margin: 0px; line-height: 140%; text-align: center; word-wrap: break-word; font-size: 22px; font-weight: 400;"><strong>'.$MailTitle.'</strong></h1>

      </td>
    </tr>
  </tbody>
</table>

  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
  </div>
</div>
<!--[if (mso)|(IE)]></td><![endif]-->
      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>



<div class="u-row-container" style="padding: 0px;background-color: transparent">
  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
    <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: transparent;"><![endif]-->
      
<!--[if (mso)|(IE)]><td align="center" width="600" style="background-color: #ffffff;width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
<div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
  <div style="background-color: #ffffff;height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
  <!--[if (!mso)&(!IE)]><!--><div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->
  
<table id="u_content_text_deprecated_7" style="font-family: Open Sans ,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:50px 50px 0px;font-family: Open Sans ,sans-serif;" align="left">
        
  <div class="v-font-size" style="line-height: 140%; text-align: justify; word-wrap: break-word;">
    <p style="line-height: 140%; font-size: 14px;"><span style="font-family:  Open Sans , sans-serif; font-size: 16px; line-height: 22.4px;"><strong>'.$current_date.'</strong></span></p>
<p style="line-height: 140%; font-size: 14px;"> </p>
<p style="line-height: 140%; font-size: 14px;"><span style="font-family:  Open Sans , sans-serif; font-size: 16px; line-height: 22.4px;"><strong>Cher(e) Client(e) '.$Username.' </strong></span></p>
<p style="line-height: 140%; font-size: 14px;"> </p>
<p style="line-height: 140%; font-size: 14px;">'.$messagebody.'</p>
  </div>

      </td>
    </tr>
  </tbody>
</table>

<table id="u_content_text_deprecated_8" style="font-family: Open Sans ,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:25px 10px 50px 50px;font-family: Open Sans ,sans-serif;" align="left">
        
  <div class="v-font-size" style="line-height: 160%; text-align: left; word-wrap: break-word;">
    <p style="font-size: 14px; line-height: 160%;">Cordialement,</p>
<p style="font-size: 14px; line-height: 160%;"> </p>
<p style="font-size: 14px; line-height: 160%;"><strong>Culturna</strong></p>
  </div>

      </td>
    </tr>
  </tbody>
</table>

  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
  </div>
</div>
<!--[if (mso)|(IE)]></td><![endif]-->
      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>



<div class="u-row-container" style="padding: 0px;background-color: transparent">
  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
    <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: transparent;"><![endif]-->
      
<!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
<div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
  <div style="height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
  <!--[if (!mso)&(!IE)]><!--><div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->
  
<table id="u_content_social_4" style="font-family: Open Sans ,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:50px 10px 10px;font-family: Open Sans ,sans-serif;" align="left">
        
<div align="center">
  <div style="display: table; max-width:167px;">
  <!--[if (mso)|(IE)]><table width="167" cellpadding="0" cellspacing="0" border="0"><tr><td style="border-collapse:collapse;" align="center"><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:167px;"><tr><![endif]-->
  
    
    <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 10px;" valign="top"><![endif]-->
    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 10px">
      <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
        <a href="https://www.facebook.com/" title="Facebook" target="_blank">
          <img src="https://cdn.discordapp.com/attachments/804410208716849175/1104840842973290496/image-3.png" alt="Facebook" title="Facebook" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
        </a>
      </td></tr>
    </tbody></table>
    <!--[if (mso)|(IE)]></td><![endif]-->
    
    <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 10px;" valign="top"><![endif]-->
    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 10px">
      <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
        <a href="https://www.instagram.com/" title="Instagram" target="_blank">
          <img src="https://cdn.discordapp.com/attachments/804410208716849175/1104840843682127952/image-1.png" alt="Instagram" title="Instagram" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
        </a>
      </td></tr>
    </tbody></table>
    <!--[if (mso)|(IE)]></td><![endif]-->
    
    <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 10px;" valign="top"><![endif]-->
    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 10px">
      <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
        <a href="https://whatsapp.com/" title="WhatsApp" target="_blank">
          <img src="https://cdn.discordapp.com/attachments/804410208716849175/1104840843220766860/image-4.png" alt="WhatsApp" title="WhatsApp" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
        </a>
      </td></tr>
    </tbody></table>
    <!--[if (mso)|(IE)]></td><![endif]-->
    
    <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 0px;" valign="top"><![endif]-->
    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 0px">
      <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
        <a href="https://github.com/" title="GitHub" target="_blank">
          <img src="https://cdn.discordapp.com/attachments/804410208716849175/1104840842616782920/image-2.png" alt="GitHub" title="GitHub" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
        </a>
      </td></tr>
    </tbody></table>
    <!--[if (mso)|(IE)]></td><![endif]-->
    
    
    <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
  </div>
</div>

      </td>
    </tr>
  </tbody>
</table>

<table id="u_content_text_deprecated_9" style="font-family: Open Sans ,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px 100px 20px;font-family: Open Sans ,sans-serif;" align="left">
        
  <div class="v-font-size" style="line-height: 170%; text-align: center; word-wrap: break-word;">
    <p style="font-size: 14px; line-height: 170%;">Culturna.com|   Skapere   |   20 200 200</p>
  </div>

      </td>
    </tr>
  </tbody>
</table>

<table style="font-family: Open Sans ,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:0px;font-family: Open Sans ,sans-serif;" align="left">
        
  <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
    <tbody>
      <tr style="vertical-align: top">
        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
          <span>&#160;</span>
        </td>
      </tr>
    </tbody>
  </table>

      </td>
    </tr>
  </tbody>
</table>

  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
  </div>
</div>
<!--[if (mso)|(IE)]></td><![endif]-->
      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>


    <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
    </td>
  </tr>
  </tbody>
  </table>
  <!--[if mso]></div><![endif]-->
  <!--[if IE]></div><![endif]-->
</body>

</html>
';
		$mail->IsHTML(true);

		$mail->send();
		$alert = 'Message envoyé avec succès !';

		header('location:FunctionComparaisonMdp.php?val_id=' . $valeur_id .'&key='. $key . '&Email=' . $email);


	} catch (Exception $e) {
		$alert = 'Une erreur s\'est produite lors de l\'envoi du message. Veuillez réessayer plus tard.';
	}
}

?>

<!--           NNNEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWW              -->


<html lang="en"><head>
  <meta charset="utf-8">
  
  
  <title>Culturna</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <meta content="" name="keywords">
  <meta content="" name="description">
  <link rel="stylesheet" href="./assets/CSS/Reservation.css">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="./assets Dashboard/img Dashboard/favicon.png">
	<link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
    <script src="https://kit.fontawesome.com/f75325e0a0.js" crossorigin="anonymous"></script>

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets Front/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets Front/css/style.css" rel="stylesheet">

    <!-- Front Css Utilities -->
    <link href="assets Front/css/Utilities.css" rel="stylesheet">

    <!-- Front Css Main Pages -->
    <link href="assets/CSS/style Main Page.css" rel="stylesheet">

    <!-- RECATCHAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script> 
    <!-- RECATCHAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->
    

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <link href="./assets Dashboard/CSS Dashboard/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets Dashboard/CSS Dashboard/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <link id="pagestyle" href="./assets Dashboard/CSS Dashboard/material-dashboard.css" rel="stylesheet" />
  <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
  <link id="pagestyle" href="./assets Dashboard/CSS Dashboard/dashboard.css" rel="stylesheet" />
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>





  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">
    /* neeeewwww */
    
        body{
      color: #1a202c;
      text-align: left;
      background-color: #e2e8f0;    
  }
  .main-body {
      padding: 15px;
  }
  .card {
      box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
  }
  
  .card {
      position: relative;
      display: flex;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 0 solid rgba(0,0,0,.125);
      border-radius: .25rem;
  }
  
  .card-body {
      flex: 1 1 auto;
      min-height: 1px;
      padding: 1rem;
  }
  
  .gutters-sm {
      margin-right: -8px;
      margin-left: -8px;
  }
  
  .gutters-sm>.col, .gutters-sm>[class*=col-] {
      padding-right: 8px;
      padding-left: 8px;
  }
  .mb-3, .my-3 {
      margin-bottom: 1rem!important;
  }
  
  .bg-gray-300 {
      background-color: #e2e8f0;
  }
  .h-100 {
      height: 100%!important;
  }
  .shadow-none {
      box-shadow: none!important;
  }
  
      </style>
  </head>
  <body>
    <!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    
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
          <?php echo "<a href='listChauffeur.php?val_id=" . $valeur_id ."' class='nav-link text-white '>
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
  <div class="container">
  <div class="main-body">
  
  <nav aria-label="breadcrumb" class="main-breadcrumb">
  <ol class="breadcrumb">
  <!--   <li class="breadcrumb-item"><a href="#">Home</a></li> -->
  <?php echo "<a class='breadcrumb-item' href='listUtilisateurs.php?val_id=" . $valeur_id ."'>Accueil</a>"; ?>
  <li class="breadcrumb-item active" aria-current="page">Profile</li>
  </ol>
  </nav>
  
  <div class="row gutters-sm">
  <div class="col-md-4 mb-3">
  <div class="card">
  <div class="card-body">
  <div class="d-flex flex-column align-items-center text-center">
  <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
  <div class="mt-3">
  <h4><?= $Username ?></h4>
  <p class="text-secondary mb-1"><?= $Fullnameprofile ?></p>
  <p class="text-muted font-size-sm"><?= $Userr['Email']; ?></p>

  
  <form action="" method="post">
  <button type="submit" name="changemdp" value="Change Password" class="btn btn-outline-primary">Changer mot de passe</button>
  </form>
  <hr>
  <?php echo "<a href='Page_accueil.php?val_id=" . 0 ."' class='btn btn-primary'>Se déconnecter</a>"; ?>
  

  
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="col-md-8">
  <div class="card mb-3"> <!-- LEHNE MIN YEBDA EL PROFILE-->
    <form class="form-group" method="POST" action="FunctionUpdateProfile.php">
        <div class="card-body">
             <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Nom et Prénom</h6>
                </div>
                    <input type="text" name="fullname" class="col-sm-9 text-secondary" value="<?= $Fullnameprofile ?>" id="fullname">  
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Email</h6>
                </div>
                <input type="email" name="emailu" class="col-sm-9 text-secondary" value="<?= $Userr['Email']; ?>" id="emailu">
            </div>
            <hr>

            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Date de naissance</h6>
                </div>
                <input type="text" name="dobu" class="col-sm-9 text-secondary" value="<?= $Userr['Dob']; ?>" id="dobu">
            </div>
            <hr>

            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Mot de passe</h6>
                </div>
                <input type="Password" name="mdpu" class="col-sm-9 text-secondary" value="<?= $Userr['Mdp']; ?>" id="mdpu">
            </div>
            <hr>
            <input type="hidden" value="<?= $Userr["Username"] ?>" name="Usernameu">
            <input type="hidden" value="<?= $Userr["Perm"] ?>" name="permu">
            <input type="hidden" value="<?= $valeur_id ?>" name="idu">
            <div class="row">
                <div class="col-sm-12">
                <input type="submit" name="Update" value="Modifier" class="btn btn-info ">
                    <!-- <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a> -->
                </div>
            </div>
        </div>
    </form>  
  <!-- END FOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOORRRMMMM      -->
  </div>
  </div>
  </div>
  </div>
  </div>
</main>
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript"> 
  </script>
  <!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="assets Front/js/main.js"></script>  
  
  </body>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script  src="./assets/JS/scriptdashboard.js"></script>
<script src="./assets/JS/InputControlFront.js"></script>


  </html>