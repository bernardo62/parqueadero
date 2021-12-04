<?php

$conexion = mysqli_connect('localhost', 'root', '', 'parqueaderoAC');
?>


<!DOCTYPE html>
<html>

<head>
    <title>Verificar Usuarios</title>
</head>

<body>

    <br>
    <?php

    $cc = $_POST['cc'];

    if (strlen($cc) < 1) {
        echo '<span style="font-size:2.5em; color: darkred">' . "Debe ingresar un documento entre comillas" . '</span>';

        echo '<span style="font-size:2em">' . '<a href="verificar.php"> <br><br>Volver</a>' . '</span>';exit;
    }

    // Verificar usuario

    $sql = "SELECT * from usuario where Cedula = $cc";
    $result = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($result) < 1) {

        echo '<span style="font-size:4em; color: darkred">' . "Usuario no existe" . '</span>';

        echo '<span style="font-size:2em">' . '<a href="nuevoUsuario.html"> <br><br> Ir a crear nuevo usuario</a>' . '</span>';

        echo '<span style="font-size:2em">' . '<a href="verificar.php"> <br><br>Volver</a>' . '</span>';
    } else {
        echo '<span style="font-size:2.5em; color: green">' . "La cédula $cc ya existe en la base de datos. <br><br>" . '</span>';

        $mostrar = mysqli_fetch_array($result);

    ?>

        <table border="1">
            <tr>
                <td>IDdeluser</td>
                <td>Cedula</td>
                <td>Nombres</td>
                <td>Apellido</td>
                <td>Tel_fijo</td>
                <td>Celular</td>
                <td>Email</td>
                <td>Activo</td>
            </tr>

            <tr>
                <td><?php echo $mostrar['ID'] ?></td>

                <td><?php echo $mostrar['Cedula'] ?></td>

                <td><?php echo $mostrar['Nombres'] ?></td>

                <td><?php echo $mostrar['Apellido'] ?></td>

                <td><?php echo $mostrar['Tel_fijo'] ?></td>

                <td><?php echo $mostrar['Celular'] ?></td>

                <td><?php echo $mostrar['Email'] ?></td>

                <td><?php echo $mostrar['Activo'] ?></td>
            </tr>

        </table>

    <?php
    }
    echo '<span style="font-size:2em">' . '<a href="verificar.php"> <br> Volver y verificar placa</a>' . '</span>';
  ?>

</body>

</html>