<?php
session_start();

$con = mysqli_connect(
    'localhost',
    'root',
    '',
    'laboratorio'
);
if(!$con){
    echo "Error de conexión";
}
?>
