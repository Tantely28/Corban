<script type="text/javascript">

    //INSCRIPTION CANDIDAT
    var xhr ;
    document.querySelector('#formInscription').addEventListener('submit', postCandidat);
    document.querySelector('#connexionCandidat').addEventListener('click', loginCandidat);
    document.querySelector('#btnCVCandidat').addEventListener('click', postCVCandidat);

    function postCandidat(event){
        event.preventDefault();
        chargement('btnInscription', 'spinnerBtnInscription', 'labelBtnInscription', 'Inscription ... ', true);
        xhr = new XMLHttpRequest();
        if (!xhr) {
            alert('Abandon :( Impossible de créer une instance de XMLHTTP');
            chargement('btnInscription', 'spinnerBtnInscription', 'labelBtnInscription', "S'inscrire", false);
            return false;
        }
        const nom = document.querySelector('#nom');
        const dateNaissance = document.querySelector('#dateNaissance');
        const telephone = document.querySelector('#telephone');
        const email = document.querySelector('#emailInscription');
        const adresse = document.querySelector('#adresse');
        const ville = document.querySelector('#ville');
        const pays = document.querySelector('#pays');
        const pseudo = document.querySelector('#pseudo');
        const password = document.querySelector('#passwordInscription');
        const sex = document.forms['formCandidat'].elements['sex'];
        const situation = document.forms['formCandidat'].elements['situation'];

        const data = new FormData();
        data.append('nom', nom.value);
        data.append('dateNaissance', dateNaissance.value);
        data.append('telephone', telephone.value);
        data.append('email', email.value);
        data.append('adresse', adresse.value);
        data.append('ville', ville.value);
        data.append('pays', pays.value);
        data.append('pseudo', pseudo.value);
        data.append('password', password.value);
        data.append('sex', sex.value);
        data.append('situation', situation.value);

        xhr.onreadystatechange = alertContents;
        xhr.open('POST', 'http://127.0.0.1:8000/api/create/candidat', true);
        xhr.send(data);

    }
    function chargement(idBtn, idSpinner, idLabel, label, disable) {
        document.getElementById(idBtn).disabled=disable;
        if (disable===false) document.getElementById(idSpinner).setAttribute('class', "");
        else document.getElementById(idSpinner).setAttribute('class', "spinner-border spinner-border-sm");
        document.getElementById(idLabel).innerHTML = label;
    }
    function alertContents() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                alert(response.message); //Si tout va bien afficher le message du serveur
                window.location.href = "http://localhost/projet/corban/Corban/application/";
                nom.value = "";
                dateNaissance.value = "";
                telephone.value = "";
                email.value = "";
                adresse.value = "";
                ville.value = "";
                pays.value = "";
                pseudo.value ="";
                password.value ="";
            } else {
                chargement('btnInscription', 'spinnerBtnInscription', 'labelBtnInscription', "S'inscrire", false);
                alert(":( Erreur: Un problème est survenu avec la requête. \n\n Veuillez contacter l'administrateur du serveur.", xhr);
            }
        }
    }
    function loginCandidat() {

        chargement('connexionCandidat', 'spnrConnexCandidat', 'lblConnexCandidat', 'Connexion ... ', true);
        xhr = new XMLHttpRequest();
        if (!xhr) {
            alert('Abandon :( Impossible de créer une instance de XMLHTTP');
            return false;
        }
        const emailCandidat = document.querySelector('#emailCandidat');
        const passwordCandidat = document.querySelector('#passwordCandidat');
        const data = new FormData();
        data.append('pseudo', emailCandidat.value);
        data.append('password', passwordCandidat.value);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.message == null){
                        // Si tout se passe bien
                        window.location.href = "http://localhost/projet/corban/Corban/application/index.php?page=home&user="+response.user+"&id="+response.id+"&type=candidat";

                    } else {
                        alert(response.message);
                    }
                    chargement('connexionCandidat', 'spnrConnexCandidat', 'lblConnexCandidat', 'Se Connecter ', false);
                } else {
                    alert(":( Erreur: Un problème est survenu avec la requête. \n\n Veuillez contacter l'administrateur du serveur.", xhr);
                    chargement('connexionCandidat', 'spnrConnexCandidat', 'lblConnexCandidat', 'Se Connecter ', false);
                }
            }        };
        xhr.open('POST', 'http://127.0.0.1:8000/api/login/candidat', true);
        xhr.send(data);

    }

    function postCVCandidat(event){
        event.preventDefault();
        chargement('btnCVCandidat', 'spinnerBtnCVCandidat', 'labelBtnCVCandidat', 'Enregistrement ... ', true);
        xhr = new XMLHttpRequest();
        if (!xhr) {
            alert('Abandon :( Impossible de créer une instance de XMLHTTP');
            chargement('btnCVCandidat', 'spinnerBtnCVCandidat', 'labelBtnCVCandidat', 'Enregistrer', false);
            return false;
        }
        const data = new FormData();
        const $idCandidat = document.querySelector('#idCandidat').value;
        data.append('photo', document.querySelector('#photoCandidat').files[0]);
        data.append('formation', document.querySelector('#formationCandidat').value);
        data.append('experience', document.querySelector('#experienceCandidat').value);
        data.append('competence', document.querySelector('#competenceCandidat').value);
        data.append('langue', document.querySelector('#langueCandidat').value);
        data.append('loisir', document.querySelector('#loisirCandidat').value);
        data.append('cv', document.querySelector('#cvCandidat').files[0]);

        xhr.onreadystatechange = function(){
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    alert(response.message); //Si tout va bien afficher le message du serveur

                    window.location.href = "http://localhost";
                } else {

                    alert(":( Erreur: Un problème est survenu avec la requête. \n\n Veuillez contacter l'administrateur du serveur.", xhr);
                }
                chargement('btnCVCandidat', 'spinnerBtnCVCandidat', 'labelBtnCVCandidat', 'Enregistrer', false);
            }
        };
        xhr.open('POST', "http://127.0.0.1:8000/api/create/cvCandidat/<?php if (isset($_SESSION['auth']['id'])) {echo $_SESSION['auth']['id'];}?>", true);
        xhr.send(data);

    }

</script>