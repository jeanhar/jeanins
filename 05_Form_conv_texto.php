<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario && Operadores </title>
</head>
<body>
	<section>
		<article>
			Formulario de Captura <br/>
			<form action="" method="GET" accept-charset="utf-8">

				<h1>Trabajar con funciones de PHP</h1>

				Digite el texto:
				<input type="text" name="texto1"/><br />
				
				<label for="operacion"></label>
					    <select name="operacion" id="operacion">
					      <option value = "1">Mayusculas</option>
					      <option value = "2">Minusculas</option>
					      <option value = "3">Tipo parrafo</option>
					    
					    </select>
					  </p>
				
				<input type="submit" name="btnprocesar" value="Procesar" />

			</form>	
		</article>	
	</section>


</body>
</html>

<?php
	if (Isset($_GET["btnprocesar"])) {
	
		$texto = $_GET["texto1"];
		$opcion = $_GET["operacion"];

		//$opcion2=$_GET["texto1"];
        //echo (strtolower($texto));
		//echo $texto."<br>";
		echo $opcion."<br>";

		

		if ($_GET["operacion"]==1) {
	
            echo "Pasar a Mayusculas"."<br>";

			echo (strtoupper($texto));
	
			
		}else if($_GET["operacion"]==2){

			echo "Pasar a Minusculas"."<br>";

			echo (strtolower($texto));

		}else if($_GET["operacion"]==3){

           echo "Pasar a Mayusculas la primera letra"."<br>";
		   echo (ucwords($texto));

		}else{

			echo "No hay mas opciones";
		}


	}
	





?>