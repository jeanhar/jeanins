<?php 

require_once("Libro.php");
require_once("Revista.php");

$objLibro = new Libro(113, "cien años de soledad", "Garcia marquez");

    echo $objLibro->getDatosUsuario();
    echo "<br>";

    $objRevista = new Revista(112, "revisat para jovenes", "jairo marquez","2020",34);
    $objRevista->setEdicion("2019");
    echo "Edicion: ". $objRevista->getEdicion();


?>