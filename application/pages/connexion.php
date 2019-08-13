<!-- MODAL -->
<div class="modal fade" id="modalConnexion">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">Se connecter en tant que : 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
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
                <div class="modal-header">Connexion
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
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
                <div class="modal-header">Connexion
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
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
                    Pas de compte? Inscrivez-vous gratuitement &nbsp;<button class="btn btn-info" data-toggle="modal" data-dismiss="modal" data-target="#modalInscriptionCandidat">S'inscrire</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL INSCRIPTION CANDIDAT-->
    <div class="modal" id="modalInscriptionCandidat">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">INSCRIPTION CANDIDAT
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <table class="table">
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="email">Nom</label>
                                        <input type="text" class="form-control" id="nom" placeholder="Nom">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="prenom">Prénom</label>
                                        <input type="text" class="form-control" id="prenom" placeholder="Prénom">
                                    </div>
                                </td>        
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                    <label>Sexe</label></br>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sexe" id="homme" value="homme" checked>
                                            <label class="form-check-label" for="homme">
                                                Homme
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sexe" id="femme" value="femme">
                                            <label class="form-check-label" for="femme">
                                                Femme
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="dateNaiss">Date de naissance</label>
                                        <input type="date" class="form-control" id="dateNaiss" placeholder="Date de naissance">
                                    </div>
                                </td>
                            </tr>
  
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="tel">Téléphone</label>
                                        <input type="text" class="form-control" id="tel" placeholder="Numéro de téléphone">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="mail">Adresse email</label>
                                        <input type="mail" class="form-control" id="email" placeholder="Adresse email">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                        <label for="adresse">Adresse</label>
                                        <input type="text" class="form-control" id="adresse" placeholder="Adresse">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                        <label for="username">Nom d'utilisateur</label>
                                        <input type="text" class="form-control" id="username" placeholder="Nom d'utilisateur">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Mot de passe</label>
                                        <input type="password" class="form-control" id="password" placeholder="Mot de passe">
                                    </div>
                                </td>
                            </tr>
                        </table>         
                    </form>                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                </div>
            </div>
        </div>
    </div>
