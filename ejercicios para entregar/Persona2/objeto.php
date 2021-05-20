<?php
require_once("Persona.php");
require_once("Empleado.php");

$objPersona = new Persona("juan", "23");

echo $objPersona->getDatosUsuario();

    echo "<br>";

    $objEmpleado = new Empleado("juan", "23",50000); 
    echo "<br>";
    echo" Datos del Empleado". $objEmpleado->getDatosUsuario();

    echo Empleado::$estado;
?>