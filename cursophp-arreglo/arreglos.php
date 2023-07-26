<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>ARREGLOS ASOCIATIVOS</title>
</head>
<body>
    <!-- Realice un programa en PHP que permita la entrada de nombre, apellido y cedula de 3 empleados al igual que sus respectivos sueldos, departamento y lugar de trabajo. utilice arreglos asociativos.-->
    <div class="contenedor">
        <form class="formulario" action="#" method="post">

            <input class="campo enviar iniciar" type="submit" name="iniciar" value=" Realizar registros">
            <h1>ARREGLOS ASOCIATIVOS</h1>
            <?php include("arreglo_datos.php");?>
            <fieldset class="fieldset" <?php if(!isset($_POST['iniciar'])){ ?> disabled <?php } ?>>

                <div class="personal data">
                    <input class="campo" type="text" name="name" placeholder = "Nombre:" required>
                    <input class="campo" type="text" name="surname" placeholder = "Apellido:" required>
                    <input class="campo" type="number" name="id" placeholder = "Cédula:" required>
                </div>
                <div class="business data">
                    <input class="campo" type="text" name="depto" placeholder = "Departamento:" required>
                    <input class="campo" type="text" name="place" placeholder = "Ubicación:" required>
                    <input class="campo" type="number" name="salary" placeholder = "Sueldo:" required>
                </div>
                <input class="campo enviar disable" type="submit" name="guardar" value=" Guardar">

            </fieldset>

        </form>
    </div>
</body>
</html>