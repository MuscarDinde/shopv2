<?php
session_start();
require './admin/lib/php/admin_liste_include.php';
?>
<!doctype html>
<html>
<head>
    <title>patisserie</title>
    <link rel="stylesheet" type="text/css" href="./admin/lib/css/style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<header class="image_header"><br>

</header>
<section id="colGauche">
    <?php
    if(file_exists('./lib/php/menu.php')) {
        include ('./lib/php/menu.php');
    }
    ?>

</section>
<section id="contenu">
    <div id="main">
        <?php
        if(!isset($_SESSION['page'])){ //on vient d'arriver sur le site
            $_SESSION['page']="accueil.php";
        }
        if(isset($_GET['page'])) {
            $_SESSION ['page'] = $_GET['page'];
        }
        $path = './page/'.$_SESSION['page'];
        if(file_exists($path)){
            include $path;
        } else {
            include ('./page/page404.php');
        }
        ?>
    </div>
</section>
<footer>

</footer>
</body>
</html>