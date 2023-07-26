<?php
session_start();

$connection = mysqli_connect(
    'localhost',
    'root',
    '',
    'pozos_petroleros'
);
if(!$connection){
    echo "Error de conexión";
}
?>