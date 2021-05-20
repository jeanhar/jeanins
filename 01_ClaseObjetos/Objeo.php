<?php
 require_once("clase_Aritmetica.php");

$operacion1=new Operacion(3334,4565);
$operacion2 = new Operacion(850303000, 929292990);

echo"la suma es ";
echo $operacion2->suma();
echo "<br>";
echo $operacion2->numero1;

echo "<br>";
$totalsuma=$operacion1->suma();
echo"Total suma:".$totalsuma;





?>