<nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php?page=home"><img src="assets/images/Logo.png" style="width: 100%; height:70px;">  </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="site-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php?page=home" class="nav-link">Accuiel</a></li>
            <li class="nav-item"><a href="index.php?page=temoignages" class="nav-link">Témoignage</a></li>
            <li class="nav-item"><a href="index.php?page=ressources" class="nav-link">Ressources</a></li>
            <li class="nav-item"><a href="index.php?page=service" class="nav-link">Service</a></li>
            <li class="nav-item"><a href="index.php?page=offres" class="nav-link">Nos offres d'emploi</a></li>
            <li class="nav-item"><a href="index.php?page=apropos" class="nav-link">A propos</a></li>

            <li class="nav-item">
              <a href="index.php?page=connexion" data-toggle="modal" data-target="#modalConnexion" class="nav-link">Connexion</a>
            </li>

            <li class="nav-item"><a href="index.php?page=contact" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- MODAL -->
    <div class="modal fade" id="modalConnexion">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">Connecter en tant que : </div>
                <div class="modal-body text-center">
                    <button data-toggle="modal" data-target="#modalClient" class="btn btn-primary">Client</button>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modalCandidat">Candidat</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL CLIENT-->
    <div class="modal fade" id="modalClient">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">Connexion</div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="email">Adresse email</label>
                            <input type="email" class="form-control" id="email" placeholder="Votre adresse email...">
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" class="form-control" id="password" placeholder="Votre mot de passe...">
                        </div>
                    </form>
                    <button type="submit" class="btn btn-warning">Se connecter</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL CANDIDAT-->
    <div class="modal fade" id="modalCandidat">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">Connexion</div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="email">Adresse email</label>
                            <input type="email" class="form-control" id="email" placeholder="Votre adresse email...">
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" class="form-control" id="password" placeholder="Votre mot de passe...">
                        </div>
                    </form>
                    <button type="submit" class="btn btn-warning">Se connecter</button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-info">S'inscrire</button>
                </div>
            </div>
        </div>
    </div>
