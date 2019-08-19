<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
	.btn-4{
		background-color:#1fa055;
    	color: #fff; 
    	border-radius: none;
    	border: none; 
	}
	.btn-4:hover{
		background-color:#fff;
    	color: #1fa055; 
    	border:none; 
	}
	/* Popup container - can be anything you want */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
</style>
<body>
<footer>
	<div class="container" style="color: #ffffff;">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<h2 style="font-family: Raleway Heavy; 
						   font-weight: bold;
						   color: #ffffff;">Corban Perfomance
				</h2>
				<div style="padding: 10px 10px;margin-right: 5px;">
					<a href="https://www.facebook.com/CorbanPerformanceConsulting/">
						<img src="assets/images/footer/fb.png" style="margin-right: 10px;">
					</a>
					<a href="https://www.linkedin.com/company/corban-performance-consulting/">
						<img src="assets/images/footer/in.png" >
					</a>
					<div class="popup" onclick="myFunction()">
						<a href=" https://www.linkedin.com/in/rijarajemisa/?miniProfileUrn=urn%3Ali%3Afs_miniProfile%3AACoAAAGXRe4B3Kl27RS6IO9f2eEhxjrLU7mZn2s">
							<img src="assets/images/footer/rj.png" >
						</a>
  						<span class="popuptext" id="myPopup">Rija Rajemisa</span>
					</div>
				</div>
				<div style="font-family: arimo;
					        margin-right: 5px;
					        padding: 20px 10px;
					        color: #ffffff;">
					<p style="margin-bottom: 2px;">Adresse physique</p> 
					<p style="margin-bottom: 2px;">Antananarivo, Madagasc</p>
					<p style="margin-bottom: 2px;">Téléphone</p>
					<p style="margin-bottom: 2px;">Adresse email</p>
				</div>
				<div style="font-family: arimo;
							margin-right: 5px;
							padding: 20px 10px;
							">
					<h4 style="color: #ffffff;">Souscrire à notre Newsletter</h4>
					<div class="input-group mb-3">
  						<input type="text" 
  								class="form-control" 
  								placeholder="Adresse email" 
  								aria-label="Recipient's username" 
  								aria-describedby="button-addon2" 
  								style="border-radius: none;">
  						<div class="input-group-append">
    						<button class="btn-4"type="button">Envoyer</button>
  						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-9 col-md-9 col-sm-6 col-xs-12" style="font-family: arimo">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<h3 style="color: #ffffff;">A PROPOS</h3>
						<p style="margin-top: 20px;">Corban</p>
						<p >Book Club</p>
					</div>

					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<h3 style="color: #ffffff;">NOS OFFRES D'EMPLOI</h3>
						<p style="margin-top: 20px;">Les offres récentes</p>
						<p>Postuler</p>
					</div>

					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<h3 style="color: #ffffff;">SERVICES</h3>
						<p style="margin-top: 20px;">Recrutement</p>
						<p>Formations</p>
						<p>Conseils</p>
						<p>Coopatation</p>
						<p>CV Vidéo</p>
						<p>Entretien Vidéo</p>
						<p>Inbound Recruiting</p>
						<p>Externalisation de paie</p>
					</div>

					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<h3 style="color: #ffffff;">RESSOURCES</h3>
						<p style="margin-top: 20px;">Blog</p>
						<p>Pro Tips</p>
						<p>Citations</p>
						<p>Dans la journée d'un...</p>
						<p>Vlog</p>
						<p>Sucess stories</p>
						<p>Fact & Fuel</p>
					</div>

				</div>
			</div>
		</div>

		<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12" style="text-align: center; margin-top: 20px;">
			<p>&copy Copy right NL Technologie 2019</p>
		</div>
	</div>
</footer>
<script>
// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
</body>
</html>

	