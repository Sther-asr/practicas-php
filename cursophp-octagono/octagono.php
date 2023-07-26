<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <title>CALCULAR OCTÁGONO REGULAR</title>
</head>
<body>
    
    <!-- Realice un programa en PHP que permita realzar el calculo del área de un octágono regular con valores dinámicos. -->
    <div class="contenedor">
        <h1>CALCULAR OCTÁGONO REGULAR</h1>

        <form class="formulario" action="" method="post">
            <h3>Calculamos perímetro:</h3>

            <div class="calculo">

                <div class="resultado">
                    <label for="lado">Ingrese longitud de un lado: </label>
                    <input class="campo lado" type="number" name="lado">
                </div>

                <!-- BOTÓN CALCULAR -->
                <input class="campo enviar" type="submit" name="calcular1" value="Calcular">
                <!-- INCLUDE -->
                <?php include("octagono_datos.php");?>

                <div class="resultado">
                    <label for="perimetro1">El perimetro es: </label>
                    <input class="campo perimetro1" type="number" name="perimetro1" readonly placeholder = "Resultado:" 
                    value="<?php
                    if(isset($_POST['calcular1']) && !empty($_POST['lado'])){
                        echo $perimetro;
                    }?>">
                </div>
                
            </div>

        </form>
        <form class="formulario2" action="" method="post">
            <h2>Calculamos el área del Óctagono: </h2>
            
            <div class="calculo">

                <div class="resultado">
                    <label for="apotema">Ingrese la apotema: </label>
                    <!-- Evalua si el botón "Calcular" de la operación "Parámetro" se presiona-->
                    <!-- En caso de VERDADERO, se activa -->
                    <input class="campo apotema" type="number" name="apotema" 
                    <?php if(!isset($_POST['calcular1'])){?> readonly <?php } ?>>
                </div>
                
                <div class="resultado">
                    <label for="perimetro2">Perimetro: </label>
                    <input class="campo perimetro2" type="number" name="perimetro2" readonly
                    value="<?php 
                    if(isset($_POST['calcular1']) && !empty($_POST['lado'])){echo $perimetro;}?>">
                </div>

                <!-- BOTÓN CALCULAR -->
                <!-- Evalua si el botón "Calcular" de la operación "Parámetro" se presiona-->
                <!-- En caso de VERDADERO, se activa -->
                <input class="campo enviar disable" type="submit" value="Calcular" name="calcular2" 
                onclick= <?php if(!isset($_POST['calcular1']) && !empty($_POST['lado'])){?> disabled <?php } ?>>
                <!-- BOTÓN CALCULAR -->

                <!-- INCLUDE -->
                <?php include("octagono_datos.php");?>
                <!-- INCLUDE -->
                
                <div class="resultado">
                    <h3>El área es: </h3>
                    <input class="campo area" type="number" name="area" readonly placeholder="Resultado: "
                    value="<?php if(isset($_POST['calcular2']) && !empty($_POST['apotema'])){echo $area;}?>">
                </div>
            </div>

        </form>
    </div>
</body>
</html>