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
            var username = $("#usernameClient").val();
            var password = $("#passwordClient").val();

            const params = new URLSearchParams({
                user: username,
                password: password
            });

            var xhr = new XHRObject();
            var url = `http://127.0.0.1:8000/api/login/client?${params.toString()}`;

            xhr.open("POST", url , true);
            xhr.onreadystatechange= function () {
                if (xhr.readyState == 4 && xhr.status == 200){
                    //window.location = 'http://localhost/Corban/application/index.php
                    var response = JSON.parse(xhr.responseText);
                    if (response.message == null){
                        document.cookie = "Id" + response.id;
                        document.getElementById("idSession").value = response.id;
                        window.location.href = "http://localhost/Corban/application/index.php"
                    } else {
                        alert(response.message);
                    }
                }
            };
            xhr.send();
        }
    }
</script>