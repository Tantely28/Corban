<script>
    function XHRObject() {
        var xhr;
        if (window.XMLHttpRequest){
            // all current browser
            xhr = new XMLHttpRequest()
        } else {
            xhr = new ActiveXObject("MICROSOFT.XMLHTTP");
        }

        xhr.onerror = function () {};
        xhr.onstart = function () {};
        xhr.onsuccess = function () {};
        return xhr;
    }

    window.onload = function () {
        document.getElementById('connexionClient').onclick = function () {
            chargement('connexionClient', 'spnrConnexClient', 'lblConnexClient', "Connexion ...", true);

            var username = $("#usernameClient").val();

            const params = new URLSearchParams({
                user: username,
            });

            var xhr = new XHRObject();
            var url = `http://127.0.0.1:8000/api/client/user?${params.toString()}`;

            xhr.open("POST", url , true);
            xhr.onreadystatechange= function () {
                if (xhr.readyState === 4 && xhr.status === 200){
                    var response = JSON.parse(xhr.responseText);
                    if (response.message == null){
                        window.location.href = "http://localhost/Corban/application/index.php?page=home&user="+response.user+"&id="+response.id+"&type=client";
                        chargement('connexionClient', 'spnrConnexClient', 'lblConnexClient', "Se Connecter", false);

                    } else {
                        alert(response.message);
                        if (response.message==='Utilisateur vérifié'){

                            document.getElementById('modalResp').click();
                        }
                        chargement('connexionClient', 'spnrConnexClient', 'lblConnexClient', "Se Connecter", false);
                    }
                }
            };
            xhr.send();
        }
    }
</script>