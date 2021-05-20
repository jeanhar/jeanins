<?php 
    require_once("ClaseVendedor.php");
    require_once("ClaseBillete.php");

    $objCliente = new Cliente("Alejandra Mora", 3003212929, "alejandra@sistemas.com", "Cll 12a 43-1");
    $arrayVerCliente = $objCliente->getVerDatosUsuario();
    print_r('<pre>');
    print_r($arrayVerCliente);
    print_r('</pre>');
    echo "<br>";
    echo $objCliente->getCelular();
    echo "<br>";
    $objCliente->setCambiarCelular(3114552136);
    echo $objCliente->getCelular();


    echo "<br>";
    $objBillete = new Billete(3467);
    $arrayVerBillete = $objBillete->getVerBillete();
    print_r('<pre>');
    print_r($arrayVerBillete);
    print_r('</pre>');

?>