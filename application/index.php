<?php
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
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Arimo|Raleway&display=swap" rel="stylesheet">  
</head>
<body>
    <?php
    include('menu/menu.php');
    include($content);
    
    include('contact/contact.php');
    include('footer/footer.php');
    ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
