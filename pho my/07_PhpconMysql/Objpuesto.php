<?php 

    require_once("Puesto.php");

    $objPuesto = new  Puesto();
//Eliminar un registro de la tabla puesto
   // $delPuesto = $objPuesto->deletePuesto("3");




     $actualizarPuesto = $objPuesto->updatePuesto(2, 20, "5");

    ?>