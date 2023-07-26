<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Laboratorio | Registro de Exámenes</title>
    <style>
        body{background-color: #f6e7e4;}
        nav{background-color: #9cb38f;}
        /* .container{border: 1px solid green;} */
        #container{ margin-top: 2em; margin-bottom: 2em;}
        .btn{border: none; background-color: #9cb38f; color: white;}
        .btn2{border: none; background-color: #8b8785;}
        .btn:hover{background-color: #b39da4;}
        .red{background-color: #7d07019d; text-align: right;}
    </style>
</head>
<body id="body">
<nav class="navbar">
        <div class="container">
            <a class="btn2 btn btn-info btn-outline-light" href="pagina.php">Regresar</a>
        </div>
    </nav>
    <div class="container" id="container">
        <label class="mb-2">Ingrese número de orden: </label>
        <input type="text" class="form-control" id="numorden" placeholder="N° de orden" required autofocus>
        <div class="mt-3 mb-3">
            <button class="btn btn-block" onclick="formExamenes()">Buscar</button>
        </div>
    </div>
    <div id="div2" class="container">
        
        <form id="form" style="width: 30%; max-width:100%; margin: auto;" class="text-center">
            
            <input type="text" class="form-control" disabled id="paciente">
            <input type="text" class="form-control" disabled id="personal">
            <input type="text" class="form-control" disabled id="examen">
            <select class="form-control" name="resultado" id="select" disabled>
                <option>Seleccione resultado del examen:</option>
                <option value="1">Aprobado</option>
                <option value="2">Reprobado</option>
            </select>
            <div class="mt-3 mb-3">
                <button id="btn-reg" class="btn btn-block" onclick="regExamenes()" disabled>Registrar examen</button>
            </div>
        </form>
        <button id="pdf" class="btn btn-block red" onclick="pdfSend()" disabled>Enviar resultados por correo (PDF)</button>
        <p id="messaje"></p>
    </div>

<script src="./scripts/orden.js"></script>
</body>
</html>