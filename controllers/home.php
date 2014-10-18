<?php

    $titulo = 'Bienvenidos al Home';
    $contenido ='Contenido de la variable';

    $variables = array ('titulo'=>$titulo,'contenido'=>$contenido);

    view('home', $variables);


?>