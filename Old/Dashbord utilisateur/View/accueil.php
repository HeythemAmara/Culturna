<?php
include "../Controller/UtilisateurC.php";
$UtilisateurC = new UtilisateurC();
$list = $UtilisateurC->listUtilisateur();
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> Culturna </title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
  <link rel="stylesheet" href="./style Main Page.css">

</head>
<body>


	<!--! Header ================================================== -->

    <header id="header">
        <div class="header-back">
            <a href="#" class="Skapere">Skapere</a>
        </div>
        <nav class="header-back">
            <ul>
                <li><a href="#" class="active">Accueil</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Destination</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#" class="toggle-login">Connexion</a></li>
            </ul>
        </nav>
    </header>


	<!--! Section ================================================== -->
    
    <Section>
        <h2 id="text"><span>Notre culture notre future</span><br>Culturna</h2>
        <img src="src/Library.png" id="Library">   
        <img src="https://user-images.githubusercontent.com/65358991/170092616-5a70c4af-2eed-496f-bde9-b5fcc7142a31.png" id="water">
        
        
    </Section>

	<!--! Information ================================================== -->
    
    <div class="sec">
        <h2>Information</h2>
        <p>HI <br><br>HI <br><br>HI <br><br>HI <br><br>HI <br><br>HI <br><br>HI <br><br>HI <br><br>
            HI <br><br>HI <br><br>HI <br><br>HI <br><br>HI <br><br>HI <br><br>HI <br><br>HI <br><br>
            HI <br><br>HI <br><br>HI <br><br>HI <br><br>HI <br><br>HI <br><br>HI <br><br>HI <br><br>
            HI <br><br>HI <br><br>HI <br><br>HI <br><br>HI <br><br>HI <br><br>HI <br><br>HI <br><br>
        </p>
    </div>


	<!--! Login ================================================== -->

    <div class="LoginSEC  LoginSECbase">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center"> <!-- Lenna rigel el div hedhi-->
						<h6 class="sectioninfo mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
			          	<input class="checkbox " type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section">
											<h4 class="mb-4 pb-3">Log In</h4>
											<a href="#" id="closebtn-signin"><i class="icon-close uil uil-times-circle"></i></a>
											<div class="form-group">
												<input type="email" name="loginemail" class="form-style" placeholder="Your Email" id="loginemail" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="loginpass" class="form-style" placeholder="Your Password" id="loginpass" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<a href="#" class="btn mt-4">submit</a>
                            				<p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
				      					</div>
			      					</div>
			      				</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Sign Up</h4>
											<a href="#" id="closebtn-signup"><i class="icon-close uil uil-times-circle"></i></a>
											<div class="form-group">
												<input type="text" name="logupname" class="form-style" placeholder="Your Full Name" id="logupname" autocomplete="off">
												<i class="input-icon uil uil-user"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="email" name="logupemail" class="form-style" placeholder="Your Email" id="logupemail" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="loguppass" class="form-style" placeholder="Your Password" id="loguppass" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<div class="form-group mt-2">
												<input type="password" name="logupage" class="form-style" placeholder="Your Age" id="logupage" autocomplete="off">
												<i class="input-icon uil uil-calendar-alt"></i>
											</div>
											<a href="#" class="btn mt-4">submit</a>
				      					</div>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>

	<!--! Scroll back to top ================================================== -->
	<div class="scroll-to-top"></div>



    
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script  src="./script Main Page.js"></script>
</html>

