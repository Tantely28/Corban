<!DOCTYPE html>
<html>
<head>
	<title>Détail Récrutement</title>
</head>
<style>
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
	.detoffre h2{
		font-weight: bold;
		font-family: 'Raleway', sans-serif;
		text-align: center;
		padding-bottom: 25px;
		font-size: 28px;
		padding-top: 25px;
	}
	.detoffre p{
		font-family: 'Arimo', sans-serif;
		text-align: justify;
	}
</style>	
<body>
	<section class="container-fluid" style="background:linear-gradient(#00b7ff,#ffffff)">
		<div class="container">
			<div class="row"  style="padding-top: 100px;">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 detoffre" id="det">
					
				</div>
                <?php
                if (isset($_SESSION['auth'])) {
                    if($_SESSION['auth']['type']=='candidat') {
                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style = "padding-top: 100px; padding-bottom: 25px;" >
				<p style = "color: #000;
						  font-weight: bold;
						  font-family:\'Raleway\', sans-serif;
						  text-align: center;
						  font-size: 30px;" > Postuler avant <em id = "date" ></em>
				</p >
				<div style = "text-align: center;" >
					<a href = "index.php?page=postuler" >
						<button type = "button" class="btn-6" > POSTULER</button >
					</a >
					<a href = "index.php?page=cooptation" >
						<button type = "button" class="btn-6 " > COOPTER</button >	
					</a >
						
				</div >
			</div >
			</div >';
                    }
                    }
			?>
		</div>
	</section>
<script>
    var xrh=new XMLHttpRequest();
    xrh.open('GET','http://127.0.0.1:8000/api/read/of/<?php echo $_GET['id'];  ?>');
    xrh.onreadystatechange=function () {
        if (this.readyState === 4 && this.status === 200) {

            var arr=JSON.parse(xrh.response);

          
                document.getElementById("det").innerHTML +='<h2>'+arr.poste+'</h2><p><strong>Type de contrat :</strong>&nbsp;'+arr.contrat+'</p><p><strong>Activités :</strong> &nbsp;'+arr.activite+'</p><p><strong>Mission:</strong><br>'+arr.mission+'</p><p><strong>Profil:</strong><br>'+arr.profile+'</p><p><strong>Référence :</strong>&nbsp;'+arr.reference+'</p>'
                document.getElementById("date").innerHTML +=arr.dateLimite


                // '                            <img src="http://127.0.0.1:8000/uploads/'+arr[i].image +'" alt="post">' +



           
        }
    };
    xrh.send();

</script>
</body>
</html>