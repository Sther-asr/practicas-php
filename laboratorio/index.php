<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Laboratorio | Login</title>
    <style>
        input{height: 40px;}
        .btn{ background-color: #9cb38f;}
        form{
            padding: 8em 4em;
            background-color: #d5dfc4;
            border-radius: 25px;
        }
    </style>
</head>
<body>
    <div class="vh-100 d-flex container">
        <form style="width: 50%; max-width:100%; margin: auto;" class="text-center"
        action="libs/loguear.php" method="POST"
        >
        <h3 class="mb-3 font-weight-normal">Ingresar</h3>
        <input type="text" name="username" class="form-control" placeholder="Usuario" required autofocus>
        <input type="password" name="password" placeholder="Contraseña" class="form-control">
        <div class="mt-3 mb-3">
            <button class="btn btn-lg btn-block">
                Entrar
            </button>
        </div>
        <a href="./registro.php">¿No tienes cuenta? Regístrate aquí.</a>
        </form>
    </div>
</body>
</html>