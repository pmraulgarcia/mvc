<?php
    require ('helpers.php');
    require('template/header.php');
    require('template/menu.php');
    require ('clases/Usuario.php');
    require ('bd/bd.php');

    if (empty ($_GET['url']))
        $_GET['url'] = 'home';

   controller ($_GET['url']);

    require('template/footer.php');
?>