<?php 

	$conexion=mysqli_connect('localhost','root','','parqueaderoAC');

 ?>


<!DOCTYPE html>
<html>

<head>
    <title>mostrar datos</title>
</head>

<body>

    <br>

    <table border="1">
        <tr>
            <td>IDuser</td>
            <td>Cedula</td>
            <td>Nombres</td>
            <td>Apellido</td>
            <td>Tel_fijo</td>
            <td>Celular</td>
            <td>Email</td>
            <td>Activo</td>
        </tr>

        <?php 
		$sql="SELECT * from usuario where activo=0";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

        <tr>
            <td><?php echo $mostrar['IDuser'] ?></td>

            <td><?php echo $mostrar['Cedula'] ?></td>

            <td><?php echo $mostrar['Nombres'] ?></td>

            <td><?php echo $mostrar['Apellido'] ?></td>

            <td><?php echo $mostrar['Tel_fijo'] ?></td>

            <td><?php echo $mostrar['Celular'] ?></td>

            <td><?php echo $mostrar['Email'] ?></td>

            <td><?php echo $mostrar['Activo'] ?></td>
        </tr>
        <?php 
	}
	 ?>
    </table>

</body>

</html>