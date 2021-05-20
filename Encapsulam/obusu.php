<?php
    require_once("usu.php");

    $objUsuario1 = new Usuario("Julian Velez", "julian@gmail.com", 21);


    echo"la clave es       " ."     ";
    echo $objUsuario1->getEmail();
    echo "<br>";

    echo $objUsuario1->getNombre();
    echo "<br>";
    echo $objUsuario1->getEmail();
    echo "<br>";
    echo $objUsuario1->getDatosUsuario();
    echo "<br>";

    echo $objUsuario1->setCambioNombre("Carlos Antonio Velez");
    echo $objUsuario1->getNombre();
    echo "<br>";
    echo Usuario::$strEstado;

    echo "2. Ejercicio construyan un programa que permita recibir los atributos de 
    placa, marca, modelo, cilindranje, static 1500cc (- 2000 c.c), revisar la tabla
    del SOAT actual y hacer los calculos para 5 ultimos años";
?>