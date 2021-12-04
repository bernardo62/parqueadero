<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fontello.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
    <link rel="icon" href="imagenes/aaaccc.jpg">
    <title>Formulario de Verificación</title>
</head>

<body>
    <div class="contenedor">
        <h3 class="user">VERIFICACIÓN</h3>

        <!-- Verificar usuario -->
        <form action="verificarUsuario.php" method="POST" class="formI formu">
            <br>
            <div>
                Tu cédula: <input type="text" name="cc" value="&quot;&quot;">
            </div>

            <br>

            <input type="submit" name="btnverificar" value="verificar" class="enviar">
        </form>


        <!--  Verificar vehiculo -->
        <form action="verificarVehiculo.php" method="POST" class="formD formu">
            <div>
                Placa vehículo: <input type="text" name="placa" value="&quot;&quot;">
            </div>

            <br>
            <input type="submit" name="btnverificar" value="verificar" class="enviar">
        </form>


    </div>
    <!-- Form datos del usuaro que sí existe -->

    <?php
    //require 'verificarUsuario.php'
    //include 'verificarUsuario.php'


    ?>
</body>

</html>