<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>


<section class="container-fluid" style="background-color: #ffff;padding: 80px 20px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 style="color: #222222;
                          text-align: center;
                          font-family: Raleway Heavy;
                          font-weight: bold;
                          padding-bottom: 70px;
                          font-size: 45px;">Un témoignage du client</h2>
            </div>
        </div>
        <center>
        <div class="row" id="tem" style="text-align: center;">


        </div>
        </center>
    </div>
</section>

<script>
    var xrh=new XMLHttpRequest();
    xrh.open('GET',"http://127.0.0.1:8000/api/lecture/un/temoignage/<?php echo $_GET['idtemoignage'] ?>");
    xrh.onreadystatechange=function () {
        if (this.readyState === 4 && this.status === 200) {
            var arr=JSON.parse(xrh.response);

         document.getElementById("tem").innerHTML +='<p><video controls src="http://localhost/projet/corban/Corban/application/back/public/uploads/'+arr.video +'" width="1000px" height="450px"></video><br>'+arr.description+'<br><br><a href="#" class="btn btn-warning">Retour</a></p>'
        }
    };
    xrh.send()
</script>
</body>
</html>