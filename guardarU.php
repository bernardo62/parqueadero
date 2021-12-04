

<?php

	//conectamos Con el servidor
	$conectar=@MySQLi_connect('localhost','root','');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{

		$base=MySQLi_select_db($conectar, 'parqueaderoAC');
		if(!$base){
			echo"No Se Encontro La Base De Datos";			
		}
	}
	//Insertar los usuarios

	//$ID=$_POST['ID'];
    $Cedula=$_POST['Cedula'];
	$Nombres=$_POST['Nombres'];
	$Apellido=$_POST['Apellido'];
	$Tel_fijo=$_POST['Tel_fijo'];
	$Celular=$_POST['Celular'];
	$Email=$_POST['Email'];
	$Activo=$_POST['Activo'];


	//hacemos la sentencia de sql para tabla usuario
	$sql="INSERT INTO usuario VALUES    ('', 
                                        '$Cedula', 
                                        '$Nombres', 
                                        '$Apellido', 
                                        '$Tel_fijo', 
                                        '$Celular', 
                                        '$Email', 
                                        '$Activo')";
	
    //ejecutamos la sentencia de sql
	$ejecutar=MySQLi_query($conectar, $sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo"Hubo Algun Error";
	}else{
		echo "Datos de nuevo usuario guardado correctamente<br><a href='nuevoUsuario.html'>Volver al formulario</a>";
		echo "<br><br>Ir a Generar nuevo contrato<br><a href='NuevoContrato.html'>Generar nuevo contrato</a>";
	}


?>