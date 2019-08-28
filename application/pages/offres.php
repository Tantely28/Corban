<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nos offres d'emploi</title>
	<link href="https://fonts.googleapis.com/css?family=Arimo:400,700|Lora:400,700|Raleway:400,700|Roboto:400,700&display=swap" rel="stylesheet"> 
<style>
	.btn-5{
		border-radius: none;
		padding: 10px 80px;
		color: #545454;
		font-family:'Arimo', sans-serif;
		font-weight: bold;
		background: linear-gradient(#ffde59,#ffbd59,#ff914d);
		border:none;
	}
	.btn-5:hover{
		border-radius: none;
		padding: 10px 80px;
		color: #ffde59;
		font-family:'Arimo', sans-serif;
		font-weight: bold;
		background: #545454;
		border:2px solid #ffde59;"
	}
	.btn-6{
		border-radius:50px;
		padding: 8px 40px;
		color: #ffffff;
		font-family:'Raleway', sans-serif;
		font-weight: bold;
		background: linear-gradient(#00b7ff,#3d5a98,#00b7ff);
		border:none;
	}
	.btn-6:hover{
		border-radius:50px;
		padding: 8px 40px;
		color: #3d5a98;
		font-family:'Raleway', sans-serif;
		font-weight: bold;
		background: #ffffff;
		border:2px solid #3d5a98;
	}
</style>
</head>
<body>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  	<div class="carousel-inner">
    	<div class="carousel-item active">
      		<img src="assets/images/offre/14.jpg" class="d-block w-100" alt="">
      		<div class="carousel-caption d-none d-md-block" style="bottom: 270px;text-align: center;">
      			<div>
      				<h4 style="color: #545454; 
      						   font-weight: bold;
      						   font-family: 'Raleway', sans-serif;
      						   margin-left: 150px;
      						   font-size: 60px">Toutes nos offres d'emploi
      				</h4>
      			</div>
        	</div>
    	</div>
    </div>	
</div>
<div class="container-fluid" style="background-color: #f7f7f7;padding: 80px 20px;">
	<div class="container">
		<div class="row" style="color: #ffffff;"id="main" >
			
		</div>	
		<div class="row" style="margin-top: 50px;">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
				<a href="#"><button type="button" class="btn-5" >VOIR PLUS</button></a>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid" style="background-color:#ffffff;padding: 80px 20px;" id="#">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="color: #222222;">
				<h2 style="font-weight: bold;
						  font-family: 'Raleway', sans-serif;
						  text-align: center;
						  padding-bottom: 25px;
						  font-size: 28px;">
					Lead qualifier (H/F)
				</h2>
				<div style="font-family: 'Arimo', sans-serif;text-align: justify;">
					<p>
						CORBAN cherche d'urgence un LEAD QUALIFIER (H/F) pour une
						entreprise d'envergure internationale opérant dans le domaine logistique.
					</p>
					<p>MISSION:<br>
						-étudier, qualifier les différents leads qui se présentent<br>
						-élaborer offres commerciales.
					</p>
					<p>PROFIL:<br>
						-Bonne connaissance du commerce internationale (idéalement avec des
						pratiques) attestée par un diplôme reconnu.<br>
						-Ayant idéalement des vécus en entreprise de logistique internationale
						(terrestre,maritime, etc.).<br>
						-Bonne capacité d'adaptation.<br>
						-Dispose d'un bon niveau en marketing, analyse de marché et de la
						concurrence [un diplôme en Marketing peut être un plus).
					</p>
				</div>
				
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top: 150px">
				<p style="color: #000;
						  font-weight: bold;
						  font-family:'Raleway', sans-serif;
						  text-align: center;
						  font-size: 20px;">Postuler avant le 15 Mai 2019
				</p>
				<div style="text-align: center;">
					<a href="index.php?page=postuler">
						<button type="button" class="btn-6">POSTULER</button>
					</a>
					<a href="index.php?page=cooptation">
						<button type="button" class="btn-6 ">COOPTER</button>	
					</a>
						
				</div>
			</div>
		</div>
	</div>
</div>


<script>
    var xrh=new XMLHttpRequest();
    xrh.open('GET','http://127.0.0.1:8000/api/read/offre');
    xrh.onreadystatechange=function () {
        if (this.readyState === 4 && this.status === 200) {

            var arr=JSON.parse(xrh.response);

            for(var i=0;i<arr.length;i++) {
                document.getElementById("main").innerHTML +='<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><div style="background-color:#3b4a61;"><p style="padding-top: 60px;font-size: 15px;">Corban Performance Consulting</p><h2 style="font-family:Lora;font-weight:bold;text-align:center;font-size:40px;padding-top: 20px;">'+arr[i].poste+'</h2><a href="#" style="padding-top: 85px;color:#fff;text-decoration: none;font-weight: bold;float: right;">Détails</a></div></div>'


                // '                            <img src="http://127.0.0.1:8000/uploads/'+arr[i].image +'" alt="post">' +



            }
        }
    };
    xrh.send();

</script>
</body>
</html>
	