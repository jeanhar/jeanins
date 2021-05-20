<?php

require_once("Lavadora.php");

    $objLavadora=new Lavadora("Gl",5);

    echo "<br>";
    echo $objLavadora->imprimirMensaje();
    echo "<br>";
    echo $objLavadora->getDatosUsuario();
    echo "<br>";













?>