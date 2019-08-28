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
                            <label for="usernameClient">Nom d'utilisateur</label>
                            <input type="email" class="form-control" name="usernameClient" id="usernameClient" placeholder="Votre nom...">
                        </div>
                        <div class="form-group">
                            <label for="passwordClient">Mot de passe</label>
                            <input type="password" class="form-control" id="passwordClient"  name="passwordClient" placeholder="Votre mot de passe...">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="idSession"  name="idSession" value="<?php if (isset($_POST['idSession'])) echo $_POST['idSession'] ?>">
                        </div>
                    </form>
                    <button type="button" class="btn btn-warning" id="connexionClient">
                        <span id="spnrConnexClient"></span>
                        <span id="lblConnexClient">Se connecter</span>
                    </button>
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
                            <label for="emailCandidat">Adresse email</label>
                            <input type="email" class="form-control" id="emailCandidat" placeholder="Votre adresse email...">
                        </div>
                        <div class="form-group">
                            <label for="passwordCandidat">Mot de passe</label>
                            <input type="password" class="form-control" id="passwordCandidat" placeholder="Votre mot de passe...">
                        </div>
                    </form>
                    <button type="button" class="btn btn-warning" id="connexionCandidat">
                        <span id="spnrConnexCandidat"></span>
                        <span id="lblConnexCandidat">Se connecter</span>
                    </button>
                </div>
                <div class="modal-footer">
                    Pas de compte? Inscrivez-vous gratuitement &nbsp;<button class="btn btn-info" data-toggle="modal" data-dismiss="modal" data-target="#modalInscriptionCandidat">S'inscrire</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL INSCRIPTION CANDIDAT-->
    <div class="modal" id="modalInscriptionCandidat">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">INSCRIPTION CANDIDAT
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  method="post" id="formInscription" name="formCandidat">
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom complet" required>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label>Sexe</label></br>
                                <div class="form-check">
                                    <input class="form-check-input" class="custom-control-input" type="radio" name="sex" id="homme" value="homme" checked>
                                    <label class="form-check-label" for="homme">
                                        Homme
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" id="femme" value="femme">
                                    <label class="form-check-label" for="femme">
                                        Femme
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="dateNaissance">Date de naissance</label>
                                <input type="date" class="form-control" id="dateNaissance" name="dateNaissance" placeholder="Date de naissance" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Situation</label></br>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="situation" id="celibataire" value="celibataire" checked>
                                    <label class="form-check-label" for="celibataire">
                                        Célibataire
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="situation" id="marie" value="marie">
                                    <label class="form-check-label" for="marie">
                                        Marié
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="telephone">Téléphone</label>
                                <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Numéro de téléphone" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="emailInscription">Adresse email</label>
                                <input type="email" class="form-control" name="email" id="emailInscription" placeholder="Adresse email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="adresse">Adresse</label>
                            <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="ville">Ville</label>
                                <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="pays">Pays</label>
                                <input type="text" class="form-control" name="pays" id="pays" placeholder="Pays" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="pseudo">Pseudonime</label>
                                <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Pseudonime" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="passwordInscription">Mot de passe</label>
                                <input type="password" class="form-control" id="passwordInscription" name="password" placeholder="Mot de passe" required>
                            </div>
                        </div>                                                                            
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="btnInscription">
                        <span id="spinnerBtnInscription"></span>
                        <span id="labelBtnInscription">S'inscrire</span>
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- MODAL CV CANDIDAT-->
    <div class="modal" id="modalCVCandidat">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">INFORMATION CANDIDAT
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  method="post" id="formCvCandidat" name="formCandidat">
                        <!-- AUTRE INFORMATION -->
                        <div class="form-group">
                            <label for="exampleFormControlFile1">CV (Word ou pdf)</label>
                            <input type="file" class="form-control-file" id="cvCandidat" accept=".doc, .docx,.pdf">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Photo d'identité</label>
                            <input type="file" class="form-control-file" id="photoCandidat" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="formation">FORAMTIONS ET DIPLOMES</label>
                            <textarea class="form-control" id="formationCandidat" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="formation">EXPERIENCES PROFESSIONELLES</label>
                            <textarea class="form-control" id="experienceCandidat" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="formation">COMPETENCE</label>
                            <textarea class="form-control" id="competenceCandidat" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="formation">CONNAISSANCES LINGUISTIQUES</label>
                            <textarea class="form-control" id="langueCandidat" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="formation">LOISIR</label>
                            <textarea class="form-control" id="loisirCandidat" rows="3"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="btnCVCandidat">
                        <span id="spinnerBtnCVCandidat"></span>
                        <span id="labelBtnCVCandidat">Enregistrer</span>
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php
require('clientScript.php');
require('candidatScript.php');
?>
