<?php
session_start();
$username = $_SESSION['username'];
$idcargo = $_SESSION['idcargo'];

// <?php echo $idcargo;?>
<!-- ?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Laboratorio</title>
    <style>
        body{background-color: #f6e7e4;}
        nav{background-color: #9cb38f;}
        /* .container{border: 1px solid green;} */
        #container{ margin-top: 2em; margin-bottom: 2em;}
        .btn{border: none; background-color: #9cb38f; color: white;}
        .btn2{border: none; background-color: #8b8785;}
        .btn:hover{background-color: #b39da4;}
        .red{background-color: #7D0801; text-align: right;}
    </style>
</head>
<body onload="onloadContenido(2)" id="body">

    <nav class="navbar">
        <div class="container">
            <a class="btn2 btn btn-info btn-outline-light" href="orden.php">
                Registrar exámenes</a>
            
        </div>
    </nav>
    <div class="container" id="container">
        
    </div>
    <script src="./scripts/pagina.js"></script>
</body>
</html>