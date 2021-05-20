<?php
    require_once("Trabajador.php");

    $objtra=new Trabajador("juan","cajero",2000000);

    echo "<br>";
    echo $objtra->imprimirMensaje();
    echo "<br>";
    echo $objtra->getDatosUsuario();
    echo "<br>";

    echo $objtra->setCambioNombre("Carlos Antonio Velez");
    echo $objtra->getNombre();


    ?>