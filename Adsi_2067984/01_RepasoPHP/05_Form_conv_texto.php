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

		echo $texto."<br>";
		echo $opcion;
	}



?>