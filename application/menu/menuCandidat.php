<?php
$_SESSION['auth']['id'];
include("pages/connexion.php");

?>
<style>
    a{
        color: red;
    }
    td{
        width: 45px;
        padding: 25px;
    }
    .drop12 {
        position: relative;
        display: inline-block;

    }
    .dropcontent {
        display: none;
        position: absolute;


        background-color: #f1f8e9;
        min-width: 135px;

        z-index: 1;



    }

    .dropcontent a {
        color:#0d47a1;
        text-decoration: none;
        font-weight: bold;


    }

    .dropcontent a:hover {
        background-color: #f4960e;
        color: #0d47a1;
        font-weight: bold;


    }

    .drop12:hover .dropcontent {
        display: block;

    }

    .iconedeco:hover{
        width:100%;
        height: 50px;
        border:2px solid #f4960e;


    }


</style>
<nav class="navbar navbar-expand-lg navbar-dark site_navbar  site-navbar-light" id="site-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php?page=home"><img src="assets/images/Logo.png" style="width: 89px; height:70px;">  </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="site-nav">
            <ul class="navbar-nav ml-auto" style="font-family: 'Roboto', sans-serif;">
                <li class="nav-item active"><a href="index.php?page=home" class="nav-link">Accueil</a></li>
                <li class="nav-item"><a href="index.php?page=temoignages" class="nav-link">Témoignage</a></li>
                <li class="nav-item"><a href="index.php?page=ressources" class="nav-link">Ressources</a></li>
                <li class="nav-item"><a href="index.php?page=service" class="nav-link">Service</a></li>
                <li class="nav-item"><a href="index.php?page=offres" class="nav-link">Offres</a></li>
                <li class="nav-item"><a href="index.php?page=apropos" class="nav-link">A propos</a></li>
                <li class="nav-item"><a href="index.php?page=contact" class="nav-link">Contact</a></li>



            </ul>

          </ul>

<!--            <table class="men">-->
<!--                <tr>-->
<!--                    <td><a href="#">Menu1</a></td>-->
<!--                    <td><a href="#">Menu1</a></td>-->
<!--                    <td><a href="#">Menu1</a></td>-->
<!--                    <td><a href="#">Menu1</a></td>-->
<!--                    <td><a href="#">Menu1</a></td>-->
<!--                    <td><a href="#">Menu1</a></td>-->
<!--                    <td><a href="#">Menu1</a></td>-->
<!--                    <td><a href="#">Menu1</a></td>-->
<!--                </tr>-->
<!--            </table>-->
            <ul style="position: relative; list-style: none;">
                <div class="drop12" style="padding-top: 30%; ">
                    <a style="margin-left: 170%" href="#"  id="img"></a>
                    <div class="dropcontent" >
                        <li class="nav-item">
                            <a href="index.php?page=connexion" data-toggle="modal" data-target="#modalCVCandidat" class="nav-link" style="color: #0d47a1">Profils</a>
                        </li>
                        <li class="nav-item"><a href="" class="nav-link" style="color: #0d47a1">Info</a></li>
                        <li class="nav-item"><a href="logout.php" class="nav-link" style="color: #0d47a1">Deconnexion</a></li>
                    </div>
                </div>
            </ul>
        </div>

      </div>

    </nav>
<script>
    var xhrtt=new XMLHttpRequest();
    xhrtt.open('GET','http://127.0.0.1:8000/api/candidat/<?php echo $_SESSION['auth']['id']; ?>');
    xhrtt.onreadystatechange=function () {
        if (this.readyState === 4 && this.status === 200) {
            var arr=JSON.parse(xhrtt.response);
                document.getElementById("img").innerHTML += '<img width="50px" src="http://127.0.0.1:8000/uploads/' + arr.photo + '">'
        }
    };
    xhrtt.send()
</script>
