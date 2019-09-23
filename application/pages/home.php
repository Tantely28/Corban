<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
	.btn-1{
		font-size: 20px; 
		border-radius: 10px;
		font-weight: bold;
		padding: 10px 40px;
		font-family: 'Roboto', sans-serif;
		background-color:#0e3fab;
		left: 10px;
		color: #fff;
		border:none;
	}
	.btn-1:hover{
		font-size: 20px; 
		border-radius: 10px;
		font-weight: bold;
		padding: 10px 40px;
		font-family: 'Roboto', sans-serif;
		background-color:#ffffff;
		left: 10px;
		color: #0e3fab;
		border:2px solid #0e3fab;
	}
	.btn-2{
		border-radius: 50px;
		padding: 10px 40px;
		color:  #545454;
		font-weight: bold;
		font-family:'Arimo', sans-serif;
		background: linear-gradient(#ffde59,#ffbd59,#ff914d);
		border:none;
	}
	.btn-2:hover{
		border-radius: 50px;
		padding: 10px 40px;
		color: #ffde59;
		font-weight: bold;
		font-family:'Arimo', sans-serif;
		background: #545454;
		border:2px solid #ffde59;
	}
	.morph div img {
  width: 200px;
  height: 150px;
  -webkit-filter: grayscale(0) blur(0px);
  filter: grayscale(0) blur(0px);
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
 
.morph div:hover img {
  width: 150px; /* on affiche l'image au carré */
  height: 150px;
  border-radius: 50%;  /* on arrondit l'image */
  -webkit-transform: rotate(360deg); /* rotation de l'image */
  transform: rotate(360deg);
}
</style>
<body>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
	  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="4" class="active"></li>
  </ol>

  	<div class="carousel-inner">
    	<div class="carousel-item active">
      		<img src="assets/images/accueil/1.jpg" class="d-block w-100" alt="">
      		<div class="carousel-caption d-none d-md-block">
      			<div style="margin:0px 300px 0px 0px;">
      				<h5>"Acquiring the right talent is the most important key to growth"</h5>
          			<p style="font-size: 20px;
          					  padding: 2px 0px 8px 0px;">Marc Bennioff
          			</p>
          			<p style="font-family: 'Raleway', sans-serif;
          					  font-size: 16px;
          					  line-height: 0.5cm;
          					  padding: 2px 0px 20px 0px;">
          				Plus de 7 000 CV dans notre base de données, plus de 21 000 
						followers sur les réseaux sociaux, recrutez rapidement, trouvez 
					    le bon talent et accompagnez-vous par Corban
				    </p>
					<div style="padding-bottom: 100px;">
						<a href="index.php?page=offres">
							<button type="button" class="btn-1">Demander une offre
							</button>
						</a>
					</div>
      			</div>
        	</div>
    	</div>
    	
	    <div class="carousel-item">
	      	<img src="assets/images/accueil/4.jpg" class="d-block w-100" alt="">
	      	<div class="carousel-caption d-none d-md-block">
		      	<div class="" style="margin:0px 300px 0px 0px;bottom: 200px;">	
		          	<h5 style="font-family: Raleway
		          			   padding: 2px 0px 20px 0px;">Découvrez nos dernières offres d’emploi publiées
		          	</h5>
					<div  style="padding-bottom: 100px;">
						<a href="index.php?page=ressources">
							<button type="button" class="btn-2 ">SAISIR L’OPPORTUNITE </button>
						</a>
					</div>
				</div>	
	        </div>
	    </div>

	    <div class="carousel-item">
	      	<img src="assets/images/accueil/1.jpg" class="d-block w-100" alt="">
	      	<div class="carousel-caption d-none d-md-block">
	      		<div class="" style="margin:0px 300px 0px 0px;bottom: 200px;">
		          	<h5>"Reading is essential for those who seek to rise above the ordinary" </h5>
		          	<p style="font-size: 20px;
		          			  padding: 2px 0px 8px 0px;">Jim Bouton
		          	</p>
		          	<p style="font-family: 'Raleway', sans-serif;
		          			  font-size: 16px;
		          			  line-height: 0.5cm;
		          			  padding: 2px 0px 20px 0px;">
		          		Rejoignez-nous pour notre prochain Book Club, une opportunité 
						de discuter un sujet  qui vous passionne et développer votre network
					</p>
					<div  style="padding-bottom: 100px;">
						<a href="index.php?page=book">
						<button type="button" class="btn-1 " >En savoir plus</button>
					</a>
					</div>
						
				</div>
	        </div>
	    </div>

	    <div class="carousel-item">
	      	<img src="assets/images/accueil/4.jpg" class="d-block w-100" alt="">
	      	<div class="carousel-caption d-none d-md-block">
	      		<div class="" style="margin:0px 300px 0px 0px;bottom: 200px;">
		          	<h5 style="padding: 2px 0px 20px 0px;">
		          		Articles, vidéos et infographies,profitez gratuitement de nos ressources
		          	</h5>
		          	<div  style="padding-bottom: 100px;">
		          		<a href="index.php?page=ressources">
		          		<button type="button" class="btn-2 " >NAVIGUER</button>
		          	</a>
		          	</div>
		          		
				</div>	
	        </div>
	    </div>
	</div>
	<a class="carousel-control-prev" 
	   href="#carouselExampleIndicators" 
	   role="button" 
	   data-slide="prev">
	   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	   <span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" 
	   href="#carouselExampleIndicators" 
	   role="button" 
	   data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	</a>
</div>

<section class="container-fluid" style="background: linear-gradient(#ffde59,#ffbd59);
										padding: 80px 20px;">
	<div class="container">
		<div class="row" style="margin-bottom: 50px;margin-top: 10px">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h2 style="color: #545454; 
						   font-weight: bold;
						   text-align: center;">CORBAN en quelques chiffres
				</h2>
			</div>
		</div>

		<div id="chiffre" class="row" style="margin-bottom: 20px;text-align: center;">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<h3 style="font-weight: bold;
						   font-family: 'Lora', serif;
						   color: #ffffff;
						   font-size: 35px" class="numero1">+ 12 000
				</h3>
				<p style="color: #000000; font-family: 'Arimo', sans-serif;">
					followers sur <br>LinkedIn
				</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<h3 style="font-weight: bold;
						   font-family: 'Lora', serif;
						   color: #ffffff;
						   font-size: 35px" class="numero2">+ 9 000
				</h3>
				<p style="color: #000000; 
						  font-family: 'Arimo', sans-serif;">
						  followers sur<br> Facebook
				</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<h3 style="font-weight: bold;
						   font-family: 'Lora', serif;
						   color: #ffffff;
						   font-size: 35px" class="numero3">7
				</h3>
				<p style="color: #000000; 
						  font-family: 'Arimo', sans-serif;">
						  années<br> d'expérience
				</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<h3 style="font-weight: bold;
						   font-family: 'Lora', serif;
						   color: #ffffff;
						   font-size: 35px" class="numero4">+ 7 000
				</h3>
				<p style="color: #000000; 
				          font-family: 'Arimo', sans-serif;">
				          CV dans notre<br> base de données
				</p>
			</div>
	    </div>
	</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        window.onscroll = function() {
            f(12000, 'numero1');
            f(9000, 'numero2');
            f(7, 'numero3');
            f(7000, 'numero4');
        }

        function f(nombre, classes) {
            $({countNum: $('.'+classes).html()}).animate({countNum: nombre}, {
                duration: 1000,
                easing: 'linear',
                step: function () {
                    $('.'+classes).html(Math.floor(this.countNum) + "+");
                },
                complete: function () {
                    $('.'+classes).html(this.countNum + "+");
                    //alert('finished');
                }
            });
        }
    </script>

	<p class="col-sm-12 col-xs-12" style="color: #000000;
			  font-weight: bold;
			  font-family: 'Raleway', sans-serif;">
			  Ils nous font<br> confiance
	</p>

	<div class="container">
		<div class="row" style="color: #000000; text-align: center; ">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" >
				<div>
					<p style="background-color:#DCDCDC;
						  font-size: 20px;
						  text-align: center;
						  padding: 10px 10px;">LOGO
					</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" >
				<div>
					<p style="background-color:#DCDCDC;
						  font-size: 20px;
						  text-align: center;
						  padding: 10px 10px;">LOGO
					</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" >
				<div>
					<p style="background-color:#DCDCDC;
						  font-size: 20px;
						  text-align: center;
						  padding: 10px 10px;">LOGO
					</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" >
				<div>
					<p style="background-color:#DCDCDC;
						  font-size: 20px;
						  text-align: center;
						  padding: 10px 10px;">LOGO
					</p>
				</div>
			</div>
		</div>
	</div>		
</section>

<section class="container-fluid" style="background-color: #ffffff;padding: 80px 20px;">
	<div class="container">
		<div class="row" style="margin-bottom: 50px;margin-top: 50px">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
				<h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="color: #222222; 
						   font-weight:bold;
						   font-family: 'Raleway', sans-serif;
						   text-align: center;
						   margin-bottom: 50px;">Notre mission
				</h2>
				<p class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="color:#444041;
						  font-family:Raleway
						  text-align: justify;
						  line-height: 1.8;">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
					eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
					enim ad minim veniam, quis nostrud exercitation ullamco laboris
					nisi ut aliquip ex ea commodo consequat
				</p>
			</div>
		</div>
	</div>
</section>

<section class="container-fluid" style="background-color:#f7f7f7;padding-top: 80px; padding-bottom: 80px;">
	<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
		<div style="padding-bottom: 60px;">
			<p data-aos="fade-right" data-aos-duration="600" style="color: #444041;font-family: arimo">
		   Ce qu'ils disent de nous
		</p>
		<h2 data-aos="fade-right" data-aos-duration="900" style="font-family: 'Raleway', sans-serif;
				  font-weight: bold;
				  color: #444041">TEMOIGNAGE
		</h2>
		</div>
		
	</div>

	<div class="container">
	<div class="row" style="font-family: 'Raleway', sans-serif;color: #444041">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<p data-aos="fade-right" data-aos-duration="1000" style="font-weight: bold;text-align: center;">
				Franck Rakotondrahanta - Cadre Commercial Bancaire
			</p>
			<div data-aos="fade-right" data-aos-duration="1000" style="text-align: center;">
				<img src="assets/images/temoignage/Frank.png" style="max-width: 100%;height: 200px;">
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<p data-aos="flip-left" data-aos-duration="1400" style="text-align: justify;">
				Pour un commercial et/ou un manage, le livre INFLUENCE est un must. 
              Il devra permettre d’améliorer mon efficience et mon efficacité. 
              Alors, si vous voulez aussi améliorer votre capacité de persuasion de vos clients et prospects, ou améliorer et affiner votre posture managériale, je vous recommande ce livre. 
              Merci Rija pour l'initiative et le partage. 
			</p>
			
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<p data-aos="fade-right" data-aos-duration="1000" style="font-weight: bold; text-align: center;">
				Laurie Antonia Rakotomalala - Photographe
			</p>
			<div data-aos="fade-right" data-aos-duration="1000" style="text-align: center;">
				<img src="assets/images/temoignage/Laurie.png" style="max-width: 100%;height: 200px;">
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<p data-aos="flip-right" data-aos-duration="1400" style="text-align: justify;">
				 Ce Book Club / network répond à pas mal de questions que je me pose dans ma vie professionnelle. 
              La partie qui m’a le plus marqué c’est le principe du “donnez” ce que vous vous voulez recevoir….  
              Merci aux TIPS de Jean Luc (Axian), Gilto (Encor Madagascar) et de Fano (Torio Creatives) sans oublier Rija Rajemisa. 
			
		</div>
	</div>
</div>
</section>

<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				
				<span class="contact100-form-title">
					<strong style="color: #545454">Pour plus d'information</strong> <br> CONTACTEZ-NOUS
				</span>

				<div class="wrap-input100 input100-select  bg1">
					<span class="label-input100">Je suis*</span>
					<div>
						<select class="js-select2" name="service">
							<option>Sélectionner</option>
							<option>Responsable de recrutement</option>
							<option>DRH</option>
							<option>General Manager</option>
							<option>Autre</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div> 

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="SVP Veuillez entrer votre prénom">
					<span class="label-input100">Prénom*</span>
					<input class="input100" type="text" name="nom" placeholder="Entrer votre prénom">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="SVP Veuillez entrer votre nom">
					<span class="label-input100">Nom*</span>
					<input class="input100" type="text" name="nom" placeholder="Entrer votre nom">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="SVP Veuillez entrer le nom votre organisation">
					<span class="label-input100">Nom de votre organisation*</span>
					<input class="input100" type="text" name="organisation" placeholder="Entrer votre nom d'organisation">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="SVP Veuillez entrer votre numéro télèphone">
					<span class="label-input100">Téléphone*</span>
					<input class="input100" type="text" name="phone" placeholder="Entrer votre numéro télèphone">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "SVP Veuillez entrer email (email@a.z)">
					<span class="label-input100">Email *</span>
					<input class="input100" type="email" name="email" placeholder="Entrer votre Email ">
				</div>

				<div class="wrap-input100 input100-select  bg1 rs1-wrap-input100">
					<span class="label-input100">Pays*</span>
					<div>
						<select class="js-select2" name="service">
							<option>Sélectionner</option>
							<option>Madagascar</option>
							<option>France</option>
							<option>Italie</option>
							<option>...</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

	
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "SVP Veuillez entrer votre Message...">
					<span class="label-input100">Message</span>
					<textarea class="input100" name="message" placeholder="Entrer votre message ici..."></textarea>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Envoyer
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>
	
	
</body>
</html>

	