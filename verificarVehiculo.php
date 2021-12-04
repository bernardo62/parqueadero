<?php

$conexion = mysqli_connect('localhost', 'root', '', 'parqueaderoAC');
?>


<!DOCTYPE html>
<html>

<head>
    <title>Verificar Vehiculo</title>
</head>

<body>

    <br>
    <?php

    $placa = $_POST['placa'];
  

    if (strlen($placa) < 1) {
        echo '<span style="font-size:2.5em; color: darkred">' . "Debe ingresar una placa" . '</span>';

        echo '<span style="font-size:2em">' . '<a href="verificar.php"> <br><br>Volver</a>' . '</span>';
        exit;
    }
    
    // else{
    //     echo "Digitó la plca: $placa <br>";
    // }

    // Verificar usuario

    $sql = "SELECT * from vehiculo where Placa = $placa";
    $result = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($result) < 1) {

        echo '<span style="font-size:4em; color: darkred">' . "Placa no existe" . '</span>';

        echo '<span style="font-size:2em">' . '<a href="nuevoUsuario.html"> <br><br> Ir a crear nuevo usuario</a>' . '</span>';

        echo '<span style="font-size:2em">' . '<a href="verificar.php"> <br><br>Volver</a>' . '</span>';
    } else {
        echo '<span style="font-size:2.5em; color: green">' . "La placa $placa ya existe en la base de datos. <br><br>" . '</span>';

        $mostrar = mysqli_fetch_array($result);

    ?>

        <table border="1">
            <tr>
                <td>ID</td>
                <td>Placa</td>
                <td>Marca</td>
                <td>Linea</td>
                <td>Modelo</td>
                <td>Tipo</td>
                <td>Color</td>
                <td>Activo</td>
            </tr>

            <tr>
                <td><?php echo $mostrar['ID'] ?></td>

                <td><?php echo $mostrar['Placa'] ?></td>

                <td><?php echo $mostrar['Marca'] ?></td>

                <td><?php echo $mostrar['Linea'] ?></td>

                <td><?php echo $mostrar['Modelo'] ?></td>

                <td><?php echo $mostrar['Tipo'] ?></td>

                <td><?php echo $mostrar['Color'] ?></td>

                <td><?php echo $mostrar['Activo'] ?></td>
            </tr>

        </table>

    <?php
    }
    echo '<span style="font-size:2em">' . '<a href="nuevoContrato.html"> <br> Ir a crear nuevo contrato</a>' . '</span>';
    ?>

</body>

</html>