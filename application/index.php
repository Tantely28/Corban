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
</head>
<body>
    <?php
    include('menu/menu.php');
    include($content);
    ?>
</body>
</html>
