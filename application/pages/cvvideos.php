<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>CV Vidéo</title>
</head>
<body>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
	  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/service/cvvideo/43.jpg" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block" style="bottom: 200px;text-align: center;">
      	<div>
      		<h4 style="color: #ffffff; 
                    font-weight: bold;
                    font-family: Raleway Heavy;
                    margin-right:270px;
                    font-size: 80px">CV Vidéo
          </h4>
          <p style="color:#ffffff;
                    font-size: 30px;
                    margin-right:200px;
                    margin-top: 30px">Entrez dans l'ère du recrutement 2.0</p>
      	</div>
      </div>
    	</div>
    </div>	
</div>

<section class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2 style="font-family:Raleway Heavy; 
                  color:#545454;
                  font-weight: bold;
                  font-size: 45px;
                  text-align:center;
                  margin-top: 40px ">CV Vidéos
        </h2>
        <h3 style="color: #ff914d;
                  font-family: arimo;
                  text-align: center;
                  margin-top: 20px;">ENTREZ DANS L'ERE DU RECRUTEMENT 2.0</h3>
      </div>
    </div>
  </div>
  <div class="row" style="color: #222222;font-family: arimo;
    margin-top: 20px;
    margin-bottom: 40px;">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <h4 style="font-weight: bold;margin-bottom: 20px">Pour les candidats</h4>
      <div style="text-align: justify;">
        <p>
          Le CV Vidéo est un moyen de se démarquer de la<br> 
          concurrence et d'aboutir facilement à un entretien<br>
           d'embauche.
        </p>
        <p>
          Corban propose:<br>
          - La conception et le tournage de votre CV Vidéo<br>
          - Sa diffusion auprès des potentiels recruteurs
        </p>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <h4 style="font-weight: bold;margin-bottom: 20px">Pour les recruteurs</h4>
      <div style="text-align: justify;">
        <p>Le CV Vidéo vous permet de faire immédiatement une<br> 
          différenciation du profil du candidat recherché et donne une<br> 
          vision plus globale du candidat dans des conditions idéales.</p>
        <p>
          Corban propose:<br>
          L'accès à notre base de donnée de CV Vidéos triés sur le<br> 
          volet
        </p>
      </div>
    </div>
  </div>
</section>

<section class="container-fluid" style="background-color: lightgray; padding: 80px 80px">
  <div class="container">
      <div class="row" id="cvvideos" style="text-align: center;">

      </div>
  </div>
</section>

<div class="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2 style="text-align: center;">Pour plus d'information</h2>
        <h3 style="text-align: center;">CONTACTEZ NOUS</h3>
      </div>
    </div>
    <div class="row" style="margin-bottom: 20px;">
      <div class="col-lg-3 col-md-3">
      </div>  
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <input  type="text" placeholder="Nom" style="margin-bottom: 20px;">
        <input  type="text" placeholder="Téléphone" style="margin-bottom: 20px;">
        <input  type="text" placeholder="Entreprise">
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <input  type="text" placeholder="Prénom" style="margin-bottom: 20px;">
        <input  type="text" placeholder="Adresse email"style="margin-bottom: 20px;">
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
                document.getElementById("cvvideos").innerHTML +=

                    '<div class="col-lg-4 col-md-4 col-6"><div style="background-color: white; width: 200px; padding: 0 0 0 0; margin-bottom: 10px; border-radius: 7px; text-align: center"><a href="index.php?page=cvvideo&idvideo='+arr[i].id+'""><video src="http://localhost/Corban/application/back/public/uploads/'+arr[i].video +'" width="200px" height="200px"></video>'+arr[i].type+'</b></a></div></div>'

                // '<div class="col-lg-3 col-md-4 col-6"><div style="background-color: white; width: 175px; padding: 3px 3px 2px 2px; margin-bottom: 10px; border-radius: 7px"><video controls src="http://localhost/Corban/application/back/public/uploads/'+arr[i].video +'" width="175px" height="200px"></video><b>'+arr[i].titre+'</b></br><a href="index.php?page=temoignage&idtemoignage='+arr[i].id+'" class="btn btn-outline-primary"><b>Regarder</b></a></div></div>'

            }
        }
    };
    xrh.send()

  // var xrh=new XMLHttpRequest();
  //   xrh.open('GET','http://127.0.0.1:8000/api/video/Entretient');
  //   xrh.onreadystatechange=function () {
  //       if (this.readyState === 4 && this.status === 200) {
  //         var arr=JSON.parse(xrh.response);
  //
  //           for(var i=0;i<arr.length;i++) {
  //               document.getElementById("cvvideos").innerHTML +=
  //               '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">' +
  //                   '<div style="background-color: white; width: 175px; padding: 3px 3px 2px 2px; margin-bottom: 10px; border-radius: 7px">' +
  //                   '<video controls src="http://localhost/Corban/application/back/public/uploads/'+arr[i].video +'" width="175px" height="200px"></video>' +
  //                   '<b>'+arr[i].type+'</b></br><a href="index.php?page=cvvideo='+arr[i].id+'" class="btn btn-outline-primary"><b>Regarder</b></a></div></div>'
  //         }
  //       }
  //     }
  //     xrh.send()
</script>

</body>
</html>
