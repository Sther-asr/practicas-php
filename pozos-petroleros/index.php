<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Css -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .btn{
            background-color: #ee6c4d;
            color: white;
        }
        .btn-outline-light{border: none;}
        #seccion{ background: #e0fbfc; height: calc(100vh - 52px);}
        .seccion-1{
            margin: 1em 0;
            display: flex;
            flex-direction: column;
        }
        .sec-btn{margin: 1em 1em; }
        .btn-info:hover{
            background-color: #98c1d9; color: white;
        }
        #selector, #results{ margin: 0 4em; text-align: center; margin-top: 2em;}
        #results{margin: 0 4em; display: flex; flex-direction: column; align-items: stretch; }
        #div-canva{width: 70%;align-self: center;}
        table{
            margin: 2em 0;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
            text-align: center;
        }
        tr{
            height: 50px;
        }
        #table{ width: 100%;}
        form{
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 5em;
            margin-bottom: 1em;
        }
        .campo{
            height: 30px;
            border-radius: 5px;
            outline: none;
            border: 1px solid #9f9f9f;
            margin: 0 1em;
            margin-bottom: 1em;
            width: 30%;
        }
    </style>
</head>
<body onload="onloadContent()">
    <nav class="navbar">
        <div class="container">
            <button class="btn btn-info btn-outline-light" type="button" onclick="formMedidas()"
            >Registrar medidas</button>
            <button class="btn btn-info btn-outline-light" type="button" onclick="formPozos()"
            >Registrar pozos</button>
        </div>
    </nav>
    <div id="seccion" class="container" >
        
    </div>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.1/dist/chart.min.js"></script>
    <script src="./script.js"></script>
</body>
</html>