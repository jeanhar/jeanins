<?php
    require_once("Estudiante.php");

    $objes=new Estudiante("juan","cruz",191871,"matematicas",4,5);

    echo "<br>";
    echo $objes->Definitiva();
    echo "<br>";
    echo $objes->getDatosUsuario();
    echo "<br>";


    ?>