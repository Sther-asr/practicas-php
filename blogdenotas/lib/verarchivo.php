<?php
$nombre = $_POST["nombre"];
$fname = "../notas/".$nombre .".txt";
if(isset($_POST["nombre"]) && !empty($_POST["nombre"])){
    if(file_exists($fname)){
        $file = fopen($fname, 'a+');
        $contenido = fread($file, filesize($fname));
        echo $contenido;
    }else{
        echo "No existe este fichero";
    }
}
?>