<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<style>
    .iconedeco {
  width:100%; 
  height: 50px; 
  border:2px solid #f4960e;
  background: #fff; 
  cursor: pointer;
}

.drop12 {
  position: relative;
  display: inline-block;
}

.dropcontent {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropcontent a {
  color:#f4960e;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  font-weight: bold;
}

.dropcontent a:hover {
    background-color: #f4960e;
    color: #fff;
    font-weight: bold;
}

.drop12:hover .dropcontent {
  display: block;
}

.iconedeco:hover{
        width:100%; 
        height: 50px; 
        border:2px solid #f4960e;
        background: #222222;
    }
</style>    
<body>
<nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
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
                <li class="nav-item"><a href="index.php?page=offres" class="nav-link">Offres d'emplois</a></li>
                <li class="nav-item"><a href="index.php?page=apropos" class="nav-link">A propos</a></li>
                <li class="nav-item"><a href="index.php?page=contact" class="nav-link">Contact</a></li>
                <li>
                    <ul style="position: relative; list-style: none;">
                        <div class="drop12">
                            <a href="#" class="nav-link">
                                <img class="iconedeco" src="assets/images/compte.png">
                            </a>
                            <div class="dropcontent">
                              <li ><a href="logout.php">Deconnexion</a></li>
                              <li ><a href="#">Liste1</a></li>
                              <li ><a href="#">Liste2</a></li>
                              <li ><a href="#">Liste2</a></li>
                            </div>
                        </div>
                    </ul>      
                </li>  
          </ul>
        </div>
      </div>  
    </nav>
    <?php include("pages/connexion.php"); ?>
</body>
</html>
