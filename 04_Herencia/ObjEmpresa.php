<?php 
    require_once("ClaseEmpleado.php");
    require_once("ClaseCliente.php");

    $objEmpleado = new Empleado(1001788656, "Maria Arango", 59);

    echo $objEmpleado->getDatosPersonales();
    echo "<br>";
    //Asignar el puesto de trabajo a Maria de Cajera
    $objEmpleado->setPuesto("Cajera");
    echo "Tiene el puesto de: ". $objEmpleado->getPuesto();

    $objCliente = new Cliente(88999999, "Juan", 78);
    echo $objCliente->getDatosPersonales();
    echo "<br>";
    $objCliente2 = new Cliente(1059456393, "Nathan Galindez", 23);
    echo $objCliente2->getDatosPersonales();
    $objCliente2->setCredito(20500000);
    echo "Valor de crédito asignado: ". $objCliente2->getCredito();



?>