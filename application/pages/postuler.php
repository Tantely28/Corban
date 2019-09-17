<!DOCTYPE html>
<html>
<head>
	<title>Postuler</title>
</head>
<style>
	.btn-8{
  text-align: center;
  font-weight: bold;
  padding: 10px 40px;
  font-size: 30px
  color: #545454;
  background: #ffffff;
  border-radius: 50px;
  border: none;
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
<section class="container-fluid" style="background:linear-gradient(#ffde59,#ffbd59); 
										padding-top:80px;
										padding-bottom: 30px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 style="font-family:'Raleway', sans-serif;
						   color: #ffffff;
						   text-align: center;
						   font-size: 45px;
						   font-weight: bold;
						   padding-bottom: 45px;
						   padding-top: 60px">Postuler
				</h2>
			</div>
		</div>
        <form action="">
		<div class="row" style="font-family: 'Arimo', sans-serif;color: #222222;">
            <div class="col-md-12" style="text-align: left;">
                <input  type="text" class="input-f" value="<?php echo $_GET['id']; ?>" id="ids" style="visibility: hidden"> <br>
            </div>
			<div class="col-md-6" style="text-align: left;">
                <label><b>CV :</b></label><br>
				<input  type="file" value="CV" id="cv" required><br>
			</div>
			<div class="col-md-6" style="text-align: left;">
                <label><b>LM :</b></label><br>
				<input  type="file" value="LM" id="lm" required><br>
			</div>
		</div>
		<div class="row" style="text-align: center;padding-top: 5px;">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          			<button class="btn-8" type="button" onclick="candidature()">ENVOYER</button>
			</div>
		</div>

        </form>
	</div>
</section>
<script>
        var request=new XMLHttpRequest();


        function candidature() {

            const ids = document.querySelector('#ids');
            const cv = document.querySelector('#cv');
            const lm = document.querySelector('#lm');

            const data = new FormData();
            data.append('ids', ids.value);
            data.append('cv', cv.files[0]);
            data.append('lm', lm.files[0]);
            request.open('POST',"http://127.0.0.1:8000/api/candidature/candidat/<?php echo $_SESSION['auth']['id']; ?>");
            request.send(data);

            alert("Envoyées")
        }
</script>
</body>
</html>
