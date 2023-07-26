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
    <link rel="stylesheet" href="estilos.css">
    <title>CALCULAR HIPOTENUSA</title>
</head>
<body >
<!-- Realice un programa en PHP que permita calcular la hipotenusa del triangulo rectángulo de lados 3 cm y 4 cm -->
    <div class="contenedor">
        <h1>Calcular Hipotenusa</h1>
        <form class="formulario" action="" method="post">
            <input class="campo cateto1" type="number" readonly="readonly" name="lado1" id="lado1" placeholder="3cm">
            <input class="campo cateto2" type="number" readonly="readonly" name="lado2" id="lado2" placeholder="4cm">
            <input class="campo enviar" type="submit" value="Calcular" name="calcular">

            <?php include("pitagoras_datos.php");?>

            <p>La hipotenusa es:</p>
            <input class="campo hipotenusa" type="text" name="hipotenusa" value="<?php if(isset($_POST['calcular'])){
                echo $hipotenusa;}?>" readonly="readonly" placeholder="Resultado:">
        </form>
        <?php 
        showPitagoras();
        ?>
    </div>
</body>
</html>