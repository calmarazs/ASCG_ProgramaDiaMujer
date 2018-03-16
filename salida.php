<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title> 
			Programa dia de la mujer
		</title>
	</head>
	<body>
		<?php
			$nombre = $_GET["txtnombre"];
    		$genero = $_GET["rbgenero"];
    		$mensaje = $_GET["txtmensaje"];
		if($genero == 'Femenino') 
		{
			$conexion = mysqli_connect("localhost:8889","root","root","Visita");
			$consulta = mysqli_query($conexion,"insert into Dato values (' ', '$nombre','$genero','$mensaje');") or die (mysqli_error());
			$consulta2 = mysqli_query($conexion,"select * from Dato;") or die (mysqli_error());
			if(mysqli_num_rows($consulta2)>0) 
			{
				while($fila = mysqli_fetch_array($consulta2)) 
				{
					echo "<font color='blue'>" ."Nombre: ".$fila['Nombre']."<br>". "</font>";
					echo "<font color='blue'>" ."Genero: ".$fila['Genero']."<br>". "</font>";
					echo "<font color='blue'>" ."Mensaje: ".$fila['Mensaje']."<br><br>". "</font>";
				}
			} 
			else 
			{
				echo "No hay visitas";
			}
			mysqli_close($conexion);
		}
		else 
		{
			//MASCULINO
			$conexion = mysqli_connect("localhost:8889","root","root","Visita");
			$consulta = mysqli_query($conexion,"insert into Dato values (' ', '$nombre','$genero','$mensaje');") or die (mysqli_error());
			$consulta2 = mysqli_query($conexion,"select * from Dato;") or die (mysqli_error());
			if (mysqli_num_rows($consulta2)>0) 
			{
				while($fila = mysqli_fetch_array($consulta2)) 
				{
					echo "Nombre: ".$fila['Nombre']."<br>" ;
					echo "Genero: ".$fila['Genero']."<br>";
					echo "Mensaje: ".$fila['Mensaje']."<br><br>";
				}
			} 
			else 
			{
				echo "No hay visitas";
			}
			mysqli_close($conexion);
		}

		?>
	</body>
</html>