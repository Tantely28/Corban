<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Entretien Vidéo</title>
  <link href="https://fonts.googleapis.com/css?family=Arimo:400,700|Lora:400,700|Raleway:400,700|Roboto:400,700&display=swap" rel="stylesheet"> 
</head>
<body>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
	  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/service/entretienvideo/43.jpg" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block" style="bottom: 270px;">
      	<div style="text-align: center;">
      		<h4 style="color: #ffffff; 
                    font-weight: bold;
                    font-family: 'Raleway', sans-serif;
                   text-align: left;
                    font-size: 80px"><strong>Entretien Vidéo</strong> 
          </h4>
          <p style="color:#ffffff;
                    font-size: 30px;
                    font-family: 'Raleway', sans-serif;
                    text-align: left;
                    float: left;">Entrez dans l'ère du recrutement 2.0</p>
      	</div>
      </div>
    	</div>
    </div>	
</div>

<section class="container-fluid" style="padding-top: 80px;padding-bottom: 50px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2 style="font-family:'Raleway', sans-serif; 
                  color:#545454;
                  font-weight: bold;
                  font-size: 45px;
                  text-align:center;"> <strong>Entretien Vidéo</strong> 
        </h2>
        <h3 style="color: #ff914d;
                  font-family: 'Arimo', sans-serif;
                  text-align: center;
                  padding-top: 20px;">ENTREZ DANS L'ERE DU RECRUTEMENT 2.0</h3>
      </div>
    </div>
  </div>
  <div class="row" style="color: #222222;
                          font-family: 'Arimo', sans-serif;
                          padding-top: 30px;
                          padding-bottom: 40px;">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <h4 style="font-weight: bold;padding-bottom: 20px">Le concept</h4>
      <div style="font-size: 24px;">
        <p>
          Cette plateforme digitale dédiée au recrutement 2.0 met en relation les candidats à la recherche de nouvelle opportunité de travail et les entreprises à la recherche de meilleur
          talents.
        </p>
        <p>
          Inscrivez-vous et ayez accès à des entretiens différés des candidats potentiels.
        </p>
        <p>Contactez-nous pour plus d'information.</p>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <h4 style="font-weight: bold;padding-bottom: 20px">Les avantages</h4>
      <div style="font-size: 24px;">
        <p>●  accélérer le processus de recrutement</p>
        <p>● large choix des candidats potentiels</p>
      </div>
    </div>
  </div>
</section>
<section class="container-fluid">
    <div class="container">
        <div class="row" id="entretientvideos">

        </div>
    </div>
</section>

<div class="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2 style="text-align: center;"> <strong>Pour plus d'information</strong> </h2>
        <h3 style="text-align: center;">CONTACTEZ NOUS</h3>
      </div>
    </div>
    <div class="row" style="padding-bottom: 20px;">
      <div class="col-lg-3 col-md-3">
      </div>  
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <input  type="text" placeholder="Nom" style="padding-bottom: 20px;">
        <input  type="text" placeholder="Téléphone" style="padding-bottom: 20px;">
        <input  type="text" placeholder="Entreprise">
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <input  type="text" placeholder="Prénom" style="padding-bottom: 20px;">
        <input  type="text" placeholder="Adresse email"style="padding-bottom: 20px;">
        <select>
          <option>Vous êtes</option>
            <option>Responsablerecrutement</option>
          <option>DRH</option>
          <option>Chef d'entreprise</option>
          <option>Autre</option>
        </select>
      </div>
      <div class="col-lg-3 col-md-3">
      </div>  
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
        <button type="button" class="btn">Envoyer</button>  
      </div>
    </div>
  </div>
</div>

<script>
    var xrh=new XMLHttpRequest();
    xrh.open('GET','http://127.0.0.1:8000/api/video/CV');
    xrh.onreadystatechange=function () {
        if (this.readyState === 4 && this.status === 200) {
            var arr=JSON.parse(xrh.response);

            for(var i=0;i<arr.length;i++) {
                document.getElementById("entretientvideos").innerHTML +=
                    '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><div style="background-color: white; width: 175px; padding: 3px 3px 2px 2px; margin-bottom: 10px; border-radius: 7px">' +
                    '<video controls src="http://localhost/Corban/application/back/public/uploads/'+arr[i].video +'" width="175px" height="200px"></video>' +
                    '<b>'+arr[i].type+'</b></br><a href="index.php?page=entretientvideos='+arr[i].id+'" class="btn btn-outline-primary"><b>Regarder</b></a></div></div>'
            }
        }
    }
    xrh.send()
</script>

</body>
</html>
