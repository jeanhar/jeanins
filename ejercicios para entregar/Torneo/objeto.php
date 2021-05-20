<?php

require_once("Partidos.php");
require_once("Torneo.php");

$objPar = new Partidos("juan", 22,"",4,12);

echo "<br>";
echo $objPar->imprimirMensaje();
echo "<br>";
echo $objPar->getDatosUsuario();
echo "<br>";






?>