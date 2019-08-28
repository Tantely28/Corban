<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulaire Cooptation</title>
	<link rel="stylesheet" href="css/normalize.css">
  <link href="https://fonts.googleapis.com/css?family=Arimo:400,700|Lora:400,700|Raleway:400,700|Roboto:400,700&display=swap" rel="stylesheet"> 
</head>
<style>
	*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Arimo', sans-serif;
 
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
  text-align: justify;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
  color: #000;
}

label {
  display: block;
  margin-bottom: 8px;
  color: #000;
}

label.light {
  font-weight: 300;
  display: inline;
}

@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }

}
.btn-8{
  text-align: center;
  font-weight: bold;
  padding: 10px 40px;
  font-size: 30px
  color: #545454;
  background: #ffffff;
  border-radius: 50px;
  border: 2px solid #545454;
}
.btn-8:hover{
  font-weight: bold;
  padding: 10px 40px;
  font-size: 30px
  border-radius: 50px;
  background:#545454;
  border:2px solid #fff;
  color: #fff;
}
</style>	
<body>
<section class="container-fluid" style="background: linear-gradient(#ffbd59,#ff914d);
                                        padding-top:150px;
                                        padding-bottom: 50px">
	<div class="container">
		<div class="row" style="text-align: center;">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h2 style="font-family: 'Raleway', sans-serif; 
                   font-weight: bold; 
                   padding-bottom: 35px; 
                   color: #ffffff;
				           font-size: 40px;">INSCRIVEZ-VOUS
        </h2>
				<form>
			   <fieldset>
			    <legend for="mail">Email:</legend>
			    <input type="email" id="mail" name="user_email" placeholder="Votre adresse e-mail">

			    <legend>Civilité</legend>
			    <input type="checkbox" id="development" value="interest_development" name="user_interest">
			    <label class="light" for="development">Melle</label><br>
			    <input type="checkbox" id="design" value="interest_design" name="user_interest">
			    <label class="light" for="design">Mme</label><br>
			    <input type="checkbox" id="business" value="interest_business" name="user_interest">
			    <label class="light" for="business">Mr</label>
			          
			    <legend for="name">Prénom:</legend>
			    <input type="text" id="name" name="user_name" placeholder="Votre Prénom">

			    <legend for="name">Nom:</legend>
			    <input type="text" id="name" name="user_name" placeholder="Votre Nom">
			  </fieldset>  
        <fieldset>  
          <legend for="mail">Adresse courriel (email)</legend>
          <label>
          	Nous en avons besoin afin que nous puissions vous informer par email des offres de recrutement où l'on cherche des coopteurs
          </label>
          <input type="email" id="mail" name="user_email" placeholder="Votre réponse">

          <legend for="">Numéro de portable</legend>
          <label>
          	Nous en avons besoin afin que nous puissions vous contacter le plus rapidement possible
          </label>
          <input type="tel" id="mail" name="" placeholder="Votre réponse">

          <legend for="">Entreprise</legend>
          <label>
          	Le cas échéant, indiquez-nous où vous travaillez actuellement (Sinon, si vous êtes sans emploi, mettez n/a)
          </label>
          <input type="text" id="mail" name="" placeholder="Votre réponse">

          <legend for="">Adresse Professionnel</legend>
          <input type="text" id="mail" name="" placeholder="Votre réponse">

          <legend for="">Ville (où vous travaillez)</legend>
          <input type="text" id="mail" name="" placeholder="Votre réponse">

          <legend for="">Téléphone (Professionnel)</legend>
          <input type="tel" id="mail" name="" placeholder="Votre réponse">

           <legend for="">Pourquoi souhaitez-vous devenir coopteur? </legend>
          <input type="text" id="mail" name="" placeholder="Votre réponse">

          <legend for="">Votre Profil Video</legend>
          <input type="text" id="mail" name="" placeholder="Votre réponse">
          
          <legend for="">Votre Profil Linkedin</legend>
          <input type="text" id="mail" name="" placeholder="Votre réponse">

          <legend for="">Quel est votre métier? </legend>
          <label>Cela nous permet de savoir dans quelles fonctions vous avez votre réseau professionnel. (Sinon, si vous êtes sans emploi, mettez n/a)</p></label>
          <input type="text" id="mail" name="" placeholder="Votre réponse">

          <legend for="">Quel est votre secteur d'activité?</legend>
          <label>Cela nous permet de savoir dans quels secteurs vous avez votre réseau professionnel (Sinon, si vous êtes sans emploi, mettez n/a)
          </label>
          <input type="text" id="mail" name="" placeholder="Votre réponse">
        </fieldset>  
          
        <fieldset>  
          <legend>A part cela, dans quels secteurs d'activité vous avez tissé aussi des réseaux de talents</legend>
          <label>Il se pourrait que vous avez tissé des réseaux professionnels (anciens boss, collègues, subordonnés, amis, etc.) utiles dans vos précedents métiers. Pour nous c'est important. Choisissez en 5 les plus pertinents
          </label>
          <input type="checkbox" id="development" value="interest_development" name="user_interest"><label class="light" for="development">Agroalimentaire</label><br>
          <input type="checkbox" id="development" value="interest_development" name="user_interest"><label class="light" for="development">Bâtiment / travaux publics</label><br>
          <input type="checkbox" id="development" value="interest_development" name="user_interest"><label class="light" for="development">Bois / papier / carton / imprimerie</label><br>
          <input type="checkbox" id="development" value="interest_development" name="user_interest"><label class="light" for="development">Chimie / parachimie</label><br>
          <input type="checkbox" id="development" value="interest_development" name="user_interest"><label class="light" for="development">Commerce / distribution / négoce</label><br>
          <input type="checkbox" id="development" value="interest_development" name="user_interest"><label class="light" for="development">Électronique / électricité</label><br>
          <input type="checkbox" id="development" value="interest_development" name="user_interest"><label class="light" for="development">Etudes et conseils</label><br>
          <input type="checkbox" id="development" value="interest_development" name="user_interest"><label class="light" for="development">Informatique / Télécommunication</label><br>
          <input type="checkbox" id="development" value="interest_development" name="user_interest"><label class="light" for="development">Mécanique</label><br>
          <input type="checkbox" id="development" value="interest_development" name="user_interest"><label class="light" for="development">Mécanique de précision</label><br>
          <input type="checkbox" id="development" value="interest_development" name="user_interest"><label class="light" for="development">Métallurgie / travail du métal</label><br>
          <input type="checkbox" id="development" value="interest_development" name="user_interest"><label class="light" for="development">Pharmacie</label><br>
          <input type="checkbox" id="development" value="interest_development" name="user_interest"><label class="light" for="development">Plastique / caoutchouc</label><br>
            <input type="checkbox" id="design" value="interest_design" name="user_interest"><label class="light" for="design">Textile / habillement / chaussure</label><br>
          <input type="checkbox" id="business" value="interest_business" name="user_interest"><label class="light" for="business">Transports / logistique</label>
        </fieldset>
        
        <fieldset>
          <legend for="">Dans quelle région travaillez-vous?</legend>
          <input type="text" id="" name="" placeholder="Votre réponse">
        </fieldset>
        <a href="#">
          <button class="btn-8" type="button">ENVOYER</button>
        </a>
        
      </form>
			</div>
		</div>
	</div>
</section>
</body>
</html>
	