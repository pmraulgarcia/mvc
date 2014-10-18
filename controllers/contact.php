<?php


    $titulo = 'Bienvenidos a Cont&aacute;ctanos';
    $contenido ='Contenido de la variable #1';
    $opcional = 'Contenido de la variable #2';

    $variables = array ('titulo'=>$titulo,'contenido'=>$contenido,'opcional'=>$opcional);

    view('contact', $variables);


?>