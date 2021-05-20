<?php
require_once("clasevendedor.php");

$objCliente=new Cliente("Alejanfdra",121221,"aljjj","fffgggg");
$arrayVerCliente=$objCliente->getVerDatosUsuario();
 
print_r('<pre>');
print_r($arrayVerCliente);
print_r('</pre>');



?>