<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<style>

</style> 
<body>

</body>
</html>
<nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php?page=home"><img src="assets/images/Logo.png" style="width: 100%; height:70px;">  </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="site-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php?page=home" class="nav-link">Accueil</a></li>
            <li class="nav-item"><a href="index.php?page=temoignages" class="nav-link">Témoignage</a></li>
            <li class="nav-item"><a href="index.php?page=ressources" class="nav-link">Ressources</a></li>
            <li class="nav-item"><a href="index.php?page=service" class="nav-link">Service</a></li>
            <li class="nav-item"><a href="index.php?page=offres" class="nav-link">Nos offres d'emplois</a></li>
            <li class="nav-item"><a href="index.php?page=apropos" class="nav-link">A propos</a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link">Deconnexion candidat</a></li>
            <li class="nav-item"><a href="index.php?page=contact" class="nav-link">Contact</a></li>
              <li class="nav-item">
                  <a href="index.php?page=connexion" data-toggle="modal" data-target="#modalCVCandidat" class="nav-link">Compléter information</a>
              </li>
          </ul>
        </div>
      </div>
    </nav>

    <?php include("pages/connexion.php"); ?>