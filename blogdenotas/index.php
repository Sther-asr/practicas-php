<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Blog de Notas</title>
</head>
<body>
    <div class="container">
        <div id="bgn__prin-btn">
            <h2>Escoja como desea guardar sus notas:</h2>
            <button class="pb-btn" id="pb-archivo" onclick="sendOption(0)">Como archivo</button>
            <button class="pb-btn" id="pb-directorio" onclick="sendOption(1)">Dentro de un directorio</button>
        </div>
        <div id="bgn__sec-btn">
        </div>
        <div id="bgn__gestion">
        </div>
        <p id="mensajes"></p>
    </div>
    <script src="./script.js"></script>
</body>
</html>