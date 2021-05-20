<?php 

    require_once("rutas.php");

    $objRutas = new Rutas();

    $insert = $objRutas->insertRuta("18", "cali -bogota", 62000.50);
    echo $insert;
?>