<?php
$nombre = $_POST["nombre"];
$textarea = $_POST["textarea"];

$fname = "../notas/".$nombre .".txt";

if(isset($_POST["nombre"]) && !empty($_POST["nombre"])){
    if(file_exists($fname)){
        $file = fopen($fname, 'a');
        fwrite($file, $textarea);
        echo "Fichero editado exitosamente";
    }
}
?>