<?php
    //01Clases y objetos
    //include continua la ejecución 
    require_once("Clase_Aritmetica.php");

    //Objeto $operacion1 - Instancia de objeto
    //2. Ejercicio. Operacion(900, 500, "/");

    $operacion1 = new Operacion(900, 500);
    $operacion2 = new Operacion(850303000, 929292990);

    echo $operacion2->suma();
    echo "<br>";
    echo $operacion2->numero1;
    echo "<br><br>";
    echo "Total multiplicar: " . $operacion1->Multiplicar();
    
    echo "<br><br>";




?>
