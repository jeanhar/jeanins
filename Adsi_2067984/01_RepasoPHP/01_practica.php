<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Una linea escrita con HTML</h1>

    <?php

        echo "Buenas tardes aprendices !!";

        print ("<h2>Escrito con el interprete PHP </h2>");

        // variables
        $vrradio = 15000;
        $diametro = 240000.9;
        $nombre = "Carlos Davila";
        $estado = Null;

        echo $vrradio."<br>";
        echo $diametro."<br>";
        echo "Nombres: ". $nombre . "<br>";

        define('Coleccion', array(
            'gato',
            'koala',
            'chita',
            'tigre'
        ));

        echo Coleccion[0]."<br>";
        //variables booleanas
        $vrdato = true;
        $vrnum = false;

        //true
        if ($vrdato) {
            echo "Cuenta activada";
        }else{
            echo"Cuenta desactivada";
        }
        echo "<br>";
        //for o while liste los numeros de 2 en 2 hasta 20
        $a = 0;
        while ($a < 20) {
            $a = $a+2;
            echo $a."<br>";
            //if a ==8 que salga del ciclo
                if ($a==8) {
                    echo "Dato final <br>";
                   break;
                }
            
        }

        for ($i=0; $i <= 10 ; $i++) { 
            echo "9 X $i = ". 9*$i ."<br>";
        }
        
        //funciones
        //2. funcion saludo

        function saludo(){
            echo "<hr>";
            echo "Buenas tardes aprendices, bienvenidos a las clases de PHP";
            echo "<hr>";
        }

        saludo();
        saludo();
        saludo();
        saludo();
        saludo();

        //crear una funcion para convertir un texto a mayusculas
        function frase_mayuscula($frase){
            $frase = strtoupper($frase);
            return $frase;
        }

        echo frase_mayuscula("aprendices adsi");

        //3. funciones que permita recibir 2 numeros y hacer multiplicacion
        echo "<br>";
        function multipl($vrnum1, $vrnum2){
            $resultado = $vrnum1 * $vrnum2;
            return $resultado;
        }

        echo multipl(40,50);
        echo "<br>";
        echo multipl(10, 50);
        echo "<br>";
        echo multipl(40, 50);
        echo "<br>";
        echo multipl(49990, 500);
        
    ?>
</body>
</html>