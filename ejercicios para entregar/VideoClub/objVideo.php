<?php
    require_once("Video.php");

    $objvid=new Video("11/10/2020","señor de los anillos","2009","14/10/2020",4);

    echo "<br>";
    echo $objvid->valordeAlquiler();
    echo "<br>";
    echo $objvid->getDatosUsuario();
    echo "<br>";







    ?>