<?php 

    require_once("Pasajero.php");

    $objPasajero = new Pasajero();

    //Insertar un pasajero
     $insertarReg = $objPasajero->insertPasajero("88","Juan camilo","cami@hjj","3012342221");
    echo $insertarReg; 

    //Mostrar todos los pasajeros


   /*  $verPasajeros = $objPasajero->getAllPasajeros();
    print_r("<pre>");
    print_r($verPasajeros);
    print_r("</pre>"); */

    
    //actualizar un pasajero
    //$actualizarPasajero = $objPasajero->updatePasajero("4", "Hernan Andrade", "hernanandrade@gmail.com", "30156789");

    //Eliminar un registro de la tabla pasajero
   // $delPasajero = $objPasajero->deletePasjero("40");


    //Buscar un pasajero por cedula

  /*  $verIdPasajero = $objPasajero->getIdPasajero("40");
    print_r("<pre>");
    print_r($verIdPasajero);
    print_r("</pre>"); */


?>