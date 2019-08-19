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
                    var test = JSON.parse(xhr.responseText);
                    document.getElementById('test').value += test.nom;
                }
            };
            xhr.send();
        }
    }
</script>