<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
          <img src="assets/images/temoignage/14.jpg" class="d-block w-100" alt="">
          <div class="carousel-caption d-none d-md-block" 
             style="bottom: 270px;
                    text-align: center;">
            <div>
              <h4 style="color: #ffffff; 
                     font-weight: bold;
                     font-family:Raleway Heavy;
                     font-size: 40px">
                Ils parlent de leur expérience avec Corban
              </h4>
            </div>
          </div>
      </div>
    </div>  
</div>

<div class="container-fluid" style="background-color: #f7f7f7;padding: 80px 20px;">
  <div class="container">
    <div class="row" style="color: #222222;text-align: center;">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2 style="font-family: Raleway Heavy;font-weight: bold;">
          Témoignage
        </h2>
        <p style="font-family:arimo">
          Ecoutez ce que nos clients pensent de Corban.<br>
          Quand vous êtes prêt, contactez-nous + ADRESSE<br>
          EMAIL & PHONE NUMBER
        </p>
      </div>
    </div>
  </div>
</div>

<section class="container-fluid" style="background-color: #ffff;padding: 80px 20px;">
        <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 style="color: #222222;
                          text-align: center;
                          font-family: Raleway Heavy;
                          font-weight: bold;
                          padding-bottom: 70px;
                          font-size: 45px;">Tous les Témoignage</h2>
              </div>            
            </div>    
            <div class="row" id="temoin" style="text-align: center;">
              
              
            </div>
        </div>
    </section>

<script>
  var xrh=new XMLHttpRequest();
    xrh.open('GET','http://127.0.0.1:8000/api/lecture/temoignage');
    xrh.onreadystatechange=function () {
        if (this.readyState === 4 && this.status === 200) {
          var arr=JSON.parse(xrh.response);

            for(var i=0;i<arr.length;i++) {
                document.getElementById("temoin").innerHTML +=
                '<div class="col-lg-3 col-md-4 col-6"><div style="background-color: white; width: 175px; padding: 3px 3px 2px 2px; margin-bottom: 10px; border-radius: 7px"><video controls src="http://localhost/projet/corban/Corban/application/back/public/uploads/'+arr[i].video +'" width="175px" height="200px"></video><b>'+arr[i].titre+'</b></br><a href="index.php?page=temoignage&idtemoignage='+arr[i].id+'" class="btn btn-outline-primary"><b>Regarder</b></a></div></div>'
          }      
        }
      }
      xrh.send()
</script>
</body>
</html>



	