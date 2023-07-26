<?php
$directorio = $_POST["directorio"];
$nombre = $_POST["nombre"];
$textarea = $_POST["textarea"];

$fdir = "../notas/$directorio";
$fname = "../notas/$directorio/$nombre.txt";

if(isset($_POST["directorio"]) && !empty($_POST["directorio"])){
    if(is_dir($fdir)){

        if(isset($_POST["nombre"]) && !empty($_POST["nombre"])){
            $file = fopen($fname, 'a+');
            fwrite($file, $textarea);
            echo "Fichero agregado y creado exitosamente";
        }

    }else{
        echo "Directorio no existente";
    }
    
}
?>