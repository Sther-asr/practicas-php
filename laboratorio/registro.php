<?php
include('./libs/conexion.php');
$query = "SELECT * FROM cargos";
$resultado = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Laboratorio | Registro</title>
    <style>
        input{margin-bottom: 1.5em; height: 40px;}
        .btn{background-color: #9cb38f;}
        .btn-lg{font-size: 1.1rem;}
    </style>
</head>
<body>
<div class="vh-100 d-flex container">
        <form id="form" style="width: 50%; max-width:100%; margin: auto;" class="text-center" action="index.php">
        <h2 class="mb-3 font-weight-normal">Registro</h2>
        <input type="text" class="form-control" name="nombre" placeholder="Nombre" required autofocus>
        <input type="text" class="form-control" name="username" placeholder="Usuario" required>
        <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
        <input type="email" class="form-control" name="email" placeholder="Email" required>
        <input type="text" class="form-control"name="tlf" placeholder="Teléfono" required>
        <select class="form-control" name="cargo">
            <option value="0">Seleccione un cargo:</option>
            <?php
            while($file = mysqli_fetch_array($resultado)){
            echo '<option value='.$file['id'].'>'.$file['nombre'].'</option>';}
            ?>
        </select>
        <div class="mt-3 mb-3">
            <button class="btn btn-lg btn-block" onclick="registroPersonal()">Registrarme</button>
        </div>
        </form>
    </div>
    <script src="./scripts/registro.js"></script>
</body>
</html>