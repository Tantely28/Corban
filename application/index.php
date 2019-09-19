<?php
session_start();
require('Auth.php');

if(isset($_GET['user']) && isset($_GET['id'])  && isset($_GET['type'])){
    $_SESSION['auth'] = array(
        'user' => $_GET['user'],
        'id' => $_GET['id'],
        'type' => $_GET['type']
    );
    header("Location:index.php");
}


$pages=scandir('pages');
if(isset($_GET['page'])) {
    $page = htmlentities($_GET['page']);
    if(in_array($page.".php",$pages)){
        $content='pages/'.$page.'.php';
    }else{
        header("Location:index.php");
    }
}else if(!isset($_GET['page'])){
    $content='pages/home.php';
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Corban</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Arimo:400,700|Lora:400,700|Raleway:400,700|Roboto:400,700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="assets/css/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/css/animate.css">
    
    <link rel="stylesheet" href="assets/css/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/css/jquery.timepicker.css">
    <link rel="stylesheet" href="assets/css/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/css/style.css">  

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

   
    <link rel="stylesheet" type="text/css" href="assets/stylecontact/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/stylecontact/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="assets/stylecontact/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/stylecontact/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/stylecontact/css/contact.css">


   
</head>
<body data-spy="scroll" data-target="#site-navbar" data-offset="200">
    <?php
    if(Auth::isLogged()){
        if ($_SESSION['auth']['type']=='candidat') {
            include('menu/menuCandidat.php');
        }
        elseif ($_SESSION['auth']['type']=='client'){
            include('menu/menuClient.php');
        }

    }else{
        include('menu/menunonconnecte.php');
    }

    include($content);
    
    include('footer/footer.php');
    ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="assets/js/js/jquery.min.js"></script>
<script src="assets/js/js/jquery.js"></script>
    <script src="assets/js/js/popper.min.js"></script>
    <script src="assets/js/js/bootstrap.min.js"></script>
    <script src="assets/js/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/js/owl.carousel.min.js"></script>
    <script src="assets/js/js/jquery.magnific-popup.min.js"></script>

    <script src="assets/js/js/bootstrap-datepicker.js"></script>
    <script src="assets/js/js/jquery.timepicker.min.js"></script>
    
    <script src="assets/js/js/jquery.animateNumber.min.js"></script>
    

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="assets/js/js/google-map.js"></script>

    <script src="assets/js/js/main.js"></script>

    <!--    Conterup -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    
    <!--===============================================================================================-->
    <script src="assets/stylecontact/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="assets/stylecontact/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="assets/stylecontact/vendor/bootstrap/js/popper.js"></script>
    <script src="assets/stylecontact/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="assets/stylecontact/vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function(){
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });


            $(".js-select2").each(function(){
                $(this).on('select2:close', function (e){
                    if($(this).val() == "Please chooses") {
                        $('.js-show-service').slideUp();
                    }
                    else {
                        $('.js-show-service').slideUp();
                        $('.js-show-service').slideDown();
                    }
                });
            });
        })
    </script>
<!--===============================================================================================-->
    <script src="assets/stylecontact/vendor/daterangepicker/moment.min.js"></script>
    <script src="assets/stylecontact/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="assets/stylecontact/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="assets/stylecontact/vendor/noui/nouislider.min.js"></script>
    <script>
        var filterBar = document.getElementById('filter-bar');

        noUiSlider.create(filterBar, {
            start: [ 1500, 3900 ],
            connect: true,
            range: {
                'min': 1500,
                'max': 7500
            }
        });

        var skipValues = [
        document.getElementById('value-lower'),
        document.getElementById('value-upper')
        ];

        filterBar.noUiSlider.on('update', function( values, handle ) {
            skipValues[handle].innerHTML = Math.round(values[handle]);
            $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
            $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
        });
    </script>
<!--===============================================================================================-->
    <script src="assets/stylecontact/js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
