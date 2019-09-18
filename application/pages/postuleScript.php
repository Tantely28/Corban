<script type="text/javascript">
    document.querySelector('#envoyPostule').addEventListener('click', candidature);
    var request ;

    function chargement(idBtn, idSpinner, idLabel, label, disable) {
        document.getElementById(idBtn).disabled=disable;
        if (disable===false) document.getElementById(idSpinner).setAttribute('class', "");
        else document.getElementById(idSpinner).setAttribute('class', "spinner-border spinner-border-sm");
        document.getElementById(idLabel).innerHTML = label;
    }


    function candidature() {
        chargement('envoyPostule', 'spnrEnvoyPostule', 'lblEnvoyPostule', 'ENVOYER  ',  true);
        request=new XMLHttpRequest();
        if (!request) {
            alert('Abandon :( Impossible de créer une instance de XMLHTTP');
            return false;
        }
        const ids = document.querySelector('#ids');
        const cv = document.querySelector('#cv');
        const lm = document.querySelector('#lm');

        const data = new FormData();
        data.append('ids', ids.value);
        data.append('cv', cv.files[0]);
        data.append('lm', lm.files[0]);
        request.onreadystatechange = function () {
            if (request.readyState === XMLHttpRequest.DONE) {
                if (request.status === 200) {
                    var response = JSON.parse(request.responseText);
                    if (response.message == null) {
                        window.location.href = "http://localhost/Corban/application/index.php?page=home&user="+response.user+"&id="+response.id+"&type=candidat";
                    } else {
                        alert(response.message);
                    }
                    chargement('envoyPostule', 'spnrEnvoyPostule', 'lblEnvoyPostule', 'ENVOYER  ', false);

                }else {
                    alert(":(Probleme. \n\n Veuillez contacter l'administrateur du serveur.", request);
                    chargement('envoyPostule', 'spnrEnvoyPostule', 'lblEnvoyPostule', 'ENVOYER  ', false);
                }

            }
        };
        request.open('POST',"http://127.0.0.1:8000/api/candidature/candidat/<?php echo $_SESSION['auth']['id']; ?>");
        request.send(data);


    }
</script>