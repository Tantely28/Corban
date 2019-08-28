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

            </div>
        </div>
        <center>
            <h2 style="color: #222222;
                          text-align: center;
                          font-family: Raleway Heavy;
                          font-weight: bold;
                          padding-bottom: 10px;
                          font-size: 45px;">Témoignages du client</h2>
            <p>Ecoutez ce que nos clients pensent de Corban.<br>
                Quand vous êtes prêt, contactez-nous + ADRESSE<br>
                EMAIL & PHONE NUMBER<br></p>
            <hr>
                <div class="row" id="tem" style="margin-left: 2px;">

                </div>
            <div id="desc" style="float: right; width: 300px; text-align: left; margin-top: -470px">
            </div>
            <hr>
            <div class="row" id="temoin" style="text-align: center;">


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

         document.getElementById("tem").innerHTML +='<p><video controls src="http://localhost/projet/corban/Corban/application/back/public/uploads/'+arr.video +'" width="720px" height="450px"></video>'
         document.getElementById("desc").innerHTML +='<p>'+arr.description+'</p>'
        }
    };
    xrh.send()


    var xhrtt=new XMLHttpRequest();
    xhrtt.open('GET','http://127.0.0.1:8000/api/lecture/temoignage');
    xhrtt.onreadystatechange=function () {
        if (this.readyState === 4 && this.status === 200) {
            var arr=JSON.parse(xhrtt.response);

            for(var i=0;i<arr.length;i++) {
                document.getElementById("temoin").innerHTML +=
                    '<div class="col-lg-3 col-md-4 col-6"><div style="background-color: white; width: 200px; padding: 0 0 0 0; margin-bottom: 10px; border-radius: 7px; text-align: center"><a href="index.php?page=temoignage&idtemoignage='+arr[i].id+'""><video src="http://localhost/Corban/application/back/public/uploads/'+arr[i].video +'" width="200px" height="200px"></video>'+arr[i].client+'</b></a></div></div>'
            }
        }
    };
    xhrtt.send()
</script>
</body>
</html>