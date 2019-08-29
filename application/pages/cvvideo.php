
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/service/cvvideo/43.jpg" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block" style="bottom: 200px;">
      	<div style="text-align: center;">
      		<h4 style="color: #ffffff; 
                    font-weight: bold;
                    font-family: 'Raleway', sans-serif;
                   text-align: left;
                    font-size: 80px"><strong>CV Vidéo</strong> 
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
                  text-align:center;"> <strong>CV Vidéo</strong> 
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
      <h4 style="font-weight: bold;padding-bottom: 20px">Pour les candidats</h4>
      <div style="font-size: 24px;">
        <p>
          Le CV Vidéo est un moyen de se démarquer de la concurrence et d'aboutir facilement à un entretien d'embauche.
        </p>
        <p>
          Corban propose:<br>
          - La conception et le tournage de votre CV Vidéo.<br>
          - Sa diffusion auprès des potentiels recruteurs.
        </p>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <h4 style="font-weight: bold;padding-bottom: 20px">Pour les recruteurs</h4>
      <div style="font-size: 24px;">
        <p>Le CV Vidéo vous permet de faire immédiatement une différenciation du profil du candidat recherché et donne une vision plus globale du candidat dans des conditions idéales.
        </p>
        <p>
          Corban propose:<br>
          - L'accès à notre base de donnée de CV Vidéos triés sur le volet.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="container-fluid" style="background-color: #ffff;padding: 80px 20px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            </div>
        </div>
        <center>
            <h2 style="color: #222222;
                          text-align: center;
                          font-family: Raleway Heavy;
                          font-weight: bold;
                          padding-bottom: 10px;
                          font-size: 45px;">CV vidéo du candidat</h2>

<div class="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2 style="text-align: center;"><strong> Pour plus d'information</strong></h2>
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
            <hr>
            <div class="row" id="tem" style="margin-left: 2px;">

            </div>
            <div id="desc" style="float: right; width: 300px; text-align: left; margin-top: -470px">
            </div>
            <hr>
            <div class="row" id="cvvideo" style="text-align: center;">


            </div>
        </center>
    </div>
</section>

<script>
    var xrh=new XMLHttpRequest();
    xrh.open('GET',"http://127.0.0.1:8000/api/video/CV/un/<?php echo $_GET['idvideo'] ?>");
    xrh.onreadystatechange=function () {
        if (this.readyState === 4 && this.status === 200) {
            var arr=JSON.parse(xrh.response);

            document.getElementById("tem").innerHTML +='<p><video controls src="http://localhost/Corban/application/back/public/uploads/'+arr.video +'" width="720px" height="450px"></video>'
            document.getElementById("desc").innerHTML +='<p>'+arr.description+'</p>'
        }
    };
    xrh.send()


    var xhrtt=new XMLHttpRequest();
    xhrtt.open('GET','http://127.0.0.1:8000/api/video/CV');
    xhrtt.onreadystatechange=function () {
        if (this.readyState === 4 && this.status === 200) {
            var arr=JSON.parse(xhrtt.response);

            for(var i=0;i<arr.length;i++) {
                document.getElementById("cvvideo").innerHTML +=
                    '<div class="col-lg-3 col-md-4 col-6"><div style="background-color: white; width: 200px; padding: 0 0 0 0; margin-bottom: 10px; border-radius: 7px; text-align: center"><a href="index.php?page=cvvideo&idvideo='+arr[i].id+'""><video src="http://localhost/Corban/application/back/public/uploads/'+arr[i].video +'" width="200px" height="200px"></video>'+arr[i].type+'</b></a></div></div>'
            }
        }
    };
    xhrtt.send()
</script>
