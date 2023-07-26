<?php
$nombre = $_POST["nombre"];
$directorio = $_POST["directorio"];
$textarea = $_POST["textarea"];

$fdir = "../notas/$directorio";
$dirname = "../notas/$directorio/$nombre.txt";

if(isset($_POST["directorio"]) && !empty($_POST["directorio"])
&& isset($_POST["nombre"]) && !empty($_POST["nombre"])){

    if(is_dir($fdir)){
        if(file_exists($dirname)){
            $file = fopen($dirname, 'a');
            fwrite($file, $textarea);
            echo "Fichero editado exitosamente";
        }
    }
}
?>