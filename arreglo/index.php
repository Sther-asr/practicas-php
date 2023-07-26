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

        <form class="formulario" action="" method="post">

            <h1>ARREGLOS ASOCIATIVOS</h1>
            <h3 class="worker">Empleado 1: </h3>
            <div class="data">
                <input class="campo" type="text" name="name1" placeholder = "Nombre:" required>
                <input class="campo" type="text" name="surname1" placeholder = "Apellido:" required>
                <input class="campo" type="number" name="id1" placeholder = "Cédula:" required>
                <input class="campo" type="text" name="depto1" placeholder = "Departamento:" required>
                <input class="campo" type="text" name="place1" placeholder = "Ubicación:" required>
                <input class="campo" type="number" name="salary1" placeholder = "Sueldo:" required>
            </div>
            <h3 class="worker">Empleado 2: </h3>
            <div class="data">
                <input class="campo" type="text" name="name2" placeholder = "Nombre:" required>
                <input class="campo" type="text" name="surname2" placeholder = "Apellido:" required>
                <input class="campo" type="number" name="id2" placeholder = "Cédula:" required>
                <input class="campo" type="text" name="depto2" placeholder = "Departamento:" required>
                <input class="campo" type="text" name="place2" placeholder = "Ubicación:" required>
                <input class="campo" type="number" name="salary2" placeholder = "Sueldo:" required>
            </div>
            <h3 class="worker">Empleado 3: </h3>
            <div class="data">
                <input class="campo" type="text" name="name3" placeholder = "Nombre:" required>
                <input class="campo" type="text" name="surname3" placeholder = "Apellido:" required>
                <input class="campo" type="number" name="id3" placeholder = "Cédula:" required>
                <input class="campo" type="text" name="depto3" placeholder = "Departamento:" required>
                <input class="campo" type="text" name="place3" placeholder = "Ubicación:" required>
                <input class="campo" type="number" name="salary3" placeholder = "Sueldo:" required>
            </div>

            <input class="campo enviar" type="submit" name="guardar" value="Guardar">

            <?php include("arreglo_datos.php");?>
        </form>

    </div>

</body>
</html>