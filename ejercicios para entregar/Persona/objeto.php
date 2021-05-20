<?php 

require_once("Persona.php");
require_once("Empleado.php");

$objPersona = new Persona("juan","24");

echo $objPersona->getDatosUsuario();

$objEmpleado=new Empleado(" carlos","25",300000);

$objEmpleado->setSueldo(500000);
    echo "Tiene el sueldo de: ". $objEmpleado->getSueldo();

?>