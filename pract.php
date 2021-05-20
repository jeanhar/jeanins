

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>  escirta con html</h1>

<?php

  echo "buenas tarde";

  print ("buenas tarr");

  //variables
   $vradio=15000;
    $diametro=2400.9;
    $nombre="jean harvy";

    echo $vradio."<br>";
    echo$diametro;
    echo "Nombres".$nombre;


    define('coleccion',array(
         'gato',


    ));


    echo coleccion[0];
    
    
    $vdato=true;
    $vrun=false;

    if($vdato=true){

    echo "cuenta activada";
    
    }else{

        echo"cuenta desactiada";
    }

     for ($i=0; $i<20;  $i+=2){



        echo"los numeros del  1  al 20        ".$i."<br>";     



     }
      

     $a=0;

     while($a<=20){


        $a= $a+2;

        echo $a."<br>";

            if($a==8){

echo "dato final <br>";

            break;


            }


     }


     function saludo(){


        echo "<hr>";

        echo "Buenas tardes a las clases de php";

        echo "<hr>";

        
     }

     saludo();


     function frase_mayuscula($frase){

          $frase=strtoupper($frase);


          return $frase;

     }

    echo frase_mayuscula("aprendices adsi");



    function multipli($vrnun, $vrnun2){


        $resultado=$vrnun*$vrnun2;

        return $resultado;



    } 

    echo multipli(40,50);
    echo"<br>";
    echo multipli(10,20);
?>

</body>
</html>
