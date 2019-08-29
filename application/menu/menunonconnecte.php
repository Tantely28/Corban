
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<style>
  .btn-9{
    background: #f4960e;
    color: #222222;
    font-weight: bold;
    border: 2px solid #222222;
    padding: 5px 20px; 
    text-align: center;
  }
  .btn-9:hover{
    background:#000;
    color: #f4960e;
    font-weight: bold;
    border: 2px solid #f4960e;
    padding: 5px 20px; 
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


          </ul>

        </div>
      </div>
    <a href="index.php?page=connexion" data-toggle="modal" data-target="#modalConnexion" class="btn-9">Se connecter</a>
    </nav>

    <?php include("pages/connexion.php"); ?>
</body>
</html>
