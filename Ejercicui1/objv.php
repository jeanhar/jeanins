<?php
    require_once("Ejercicio.php");

    $vehiculo=new Vehiculo(34,"bm","94",2500);

    
    echo "<br>";
    echo $vehiculo->calcular_soatt();
    echo "<br>";
    echo "Placa";
    echo "<br>";
    echo $vehiculo->intplaca;

    echo "<br>";
    echo "Marca";
    echo "<br>";
    echo $vehiculo->strmarca;
    echo "<br>";
    echo "Modelo";
    echo "<br>";
    echo $vehiculo->strmodelo;






    ?>