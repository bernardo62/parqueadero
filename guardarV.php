

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
	
// Insertar los vehículos

//$ID = $_POST['ID'];
$Placa = $_POST['Placa'];
$Marca = $_POST['Marca'];
$Linea = $_POST['Linea'];
$Modelo = $_POST['Modelo'];
$Tipo = $_POST['Tipo'];
$Color = $_POST['Color'];
$Activo = $_POST['Activo'];


//hacemos la sentencia de sql para tabla usuario
$sql = "INSERT INTO vehiculo VALUES    ('', 
                                        '$Placa', 
                                        '$Marca', 
                                        '$Linea', 
                                        '$Modelo', 
                                        '$Tipo', 
                                        '$Color', 
                                        '$Activo')";

//ejecutamos la sentencia de sql
$ejecutar = MySQLi_query($conectar, $sql);
//verificamos la ejecucion
if (!$ejecutar) {
	echo "Hubo Algun Error";
} else {
	echo "Datos de nuevo vehículo guardado correctamente<br><a href='nuevoUsuario.html'>Volver al formulario</a>";
	echo "<br><br>Ir a Generar nuevo contrato<br><a href='NuevoContrato.html'>Generar nuevo contrato</a>";
}


?>