<?php 

    require_once("Tiquete.php");

    $objTiquete = new Tiquete();

    //Insertar un Tiquete
    /* $insertarReg = $objTiquete->insertTiquete("4","2020-10-18","2","2","2");
    echo $insertarReg; */

    $verTiquete = $objTiquete->getAllTiquete();
    print_r("<pre>");
    print_r($verTiquete);
    print_r("</pre>");


    ?>