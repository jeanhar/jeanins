<?php 

    require_once("Despachador.php");

    $objDespachado = new Despachador();

    //Insertar un Despachado
    /* $insertarReg = $objDespachado->insertDespachador("35","camilocarlos","carlos@hjj","ttuwoo","31267890","mañana");
    echo $insertarReg; */

    $verDespachado = $objDespachado->getAllDespachador();
    print_r("<pre>");
    print_r($verDespachado);
    print_r("</pre>");


    ?>