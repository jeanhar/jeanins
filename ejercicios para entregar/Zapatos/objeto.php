<?php
    require_once("Zapatos.php");
    require_once("Deportivos.php");
    $objde=new Deportivos("34","nike",2,"color rojo",50000,6);

    echo "<br>";
    echo $objde->imprimirMensaje();
    echo "<br>";
    echo $objde->getDatosUsuario();
    echo "<br>";

    

    ?>