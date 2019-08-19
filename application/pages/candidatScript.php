<script type="text/javascript">

    //INSCRIPTION CANDIDAT
    var xhr ;
    document.querySelector('#formInscription').addEventListener('submit', postCandidat);
    document.querySelector('#loginCandidat').addEventListener('click', loginCandidat);

    function postCandidat(event){
        event.preventDefault();
        xhr = new XMLHttpRequest();
        if (!xhr) {
            alert('Abandon :( Impossible de créer une instance de XMLHTTP');
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
    function alertContents() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                alert(response.message); //Si tout va bien afficher le message du serveur
                window.location.href = "http://localhost";
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
                alert('Un problème est survenu avec la requête.', xhr);
            }
        }
    }
    function loginCandidat(event) {
        event.preventDefault();
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
                    var response = xhr.responseText;
                    alert(response); //Si tout va bien afficher le message du serveur
                } else {
                    alert('Un problème est survenu avec la requête.', xhr);
                }
            }        };
        xhr.open('POST', 'http://127.0.0.1:8000/api/login/candidat', true);
        xhr.send(data);
    }

</script>