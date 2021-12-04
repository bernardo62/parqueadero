
<?php

//conectamos Con el servidor
$conectar = @MySQLi_connect('localhost', 'root', '');
//verificamos la conexion
if (!$conectar) {
    echo "No Se Pudo Conectar Con El Servidor";
} else {

    $base = MySQLi_select_db($conectar, 'parqueadero');
    if (!$base) {
        echo "No Se Encontro La Base De Datos";
    }
}
//Insertar los usuarios

//$ID=$_POST['ID'];
$Cedula = $_POST['Cedula'];
$Placa = $_POST['Placa'];
$Celda = $_POST['Celda'];



//hacemos la sentencia de sql para tabla usuario
$sql = "INSERT INTO guardarContrato VALUES  ('', 
                                        '$Cedula', 
                                        '$Placa', 
                                        '$Celda')";

//ejecutamos la sentencia de sql
$ejecutar = MySQLi_query($conectar, $sql);
//verificamos la ejecucion
if (!$ejecutar) {
    echo "Hubo Algun Error";
} else {
    echo "Datos de nuevo contrato guardado correctamente<br><a href='nuevoContrato.html'>Volver al formulario</a>";
    echo "<br><br>Ir a Generar nuevo contrato<br><a href='NuevoContrato.html'>Generar nuevo contrato</a>";
}


?>