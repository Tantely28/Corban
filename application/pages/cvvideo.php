<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<style>
  
</style>
<body>
  <div class="container-fluid" style="padding-top: 100px;padding-bottom: 50px;
                                      background: linear-gradient(#00b7ff,#ffffff)">
    <div class="container">
        <div class="row" id="tem" style="margin-left: 2px;">

        </div>
        <div id="desc" style="float: right; width: 300px; text-align: left; margin-top: -470px">

        </div>

        <hr>

        <div class="row" id="cvvideo" style="text-align: center;">
        </div>  
    </div>
  </div>
  
    <script>
    var xrh=new XMLHttpRequest();
    xrh.open('GET',"http://127.0.0.1:8000/api/video/CV/un/<?php echo $_GET['idvideo'] ?>");
    xrh.onreadystatechange=function () {
        if (this.readyState === 4 && this.status === 200) {
            var arr=JSON.parse(xrh.response);

            document.getElementById("tem").innerHTML +='<p><video controls src="http://localhost/Corban/application/back/public/uploads/'+arr.video +'" width="720px" height="450px"></video></p>'
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
</body>
</html>

  

