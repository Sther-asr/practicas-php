<?php
$nombre = $_POST["nombre"];
$fname = "../notas/".$nombre .".txt";
if(isset($_POST["nombre"]) && !empty($_POST["nombre"])){
    if(file_exists($fname)){
        unlink($fname);
        echo "Nota eliminada con éxito";
    }else{
        echo "No existe este fichero";
    }
}
?>