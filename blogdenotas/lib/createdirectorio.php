<?php
$nombre = $_POST["nombre"];
$directorio = $_POST["directorio"];
$textarea = $_POST["textarea"];

$fdir = "../notas/$directorio";
$fname = "../notas/$directorio/$nombre.txt";

if(isset($_POST["directorio"]) && !empty($_POST["directorio"])){
    if(!is_dir($fdir)){
        mkdir($fdir);
        echo "Se ha creado el directorio exitosamente";
        
        if(isset($_POST["nombre"]) && !empty($_POST["nombre"])){
            $file = fopen($fname, 'a+');
            fwrite($file, $textarea);
            echo "Fichero creado exitosamente";
        }
    }else{
        echo "Directorio existente";
    }
}
?>