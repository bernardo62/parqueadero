

<?php

	//conectamos Con el servidor
	$conectar=@MySQLi_connect('localhost','root','');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{

		$base=MySQLi_select_db($conectar, 'parqueadero');
		if(!$base){
			echo"No Se Encontro La Base De Datos";			
		}
	}
	
// Insertar las celdas

//$ID = $_POST['ID'];
$NumCelda = $_POST['NumCelda'];
$Tipo = $_POST['Tipo'];
$Disponible = $_POST['Disponible'];


//hacemos la sentencia de sql para tabla usuario
$sql = "INSERT INTO celda VALUES    ('', 
									'$NumCelda', 
									'$Tipo', 
									'$Disponible')";

$ejecutar=MySQLi_query($conectar, $sql);
//verificamos la ejecucion
if(!$ejecutar){
		echo"Hubo Algun Error";
} else{
	echo "Datos de nueva celda guardada correctamente<br><a href='nuevoUsuario.html'>Volver al formulario</a>";
	}
?>