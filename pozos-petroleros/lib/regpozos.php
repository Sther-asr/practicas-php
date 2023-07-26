<?php
include('./conexion.php');

$namepozo = $_POST['namepozo'];
if(isset($_POST['namepozo'])){
    $query = "INSERT INTO pozo (nombre)
    VALUES('$namepozo')";
    $sql = mysqli_query($connection, $query);
    
    if($sql){
        echo "Okay";
    }else {
        echo "fail";
    }

}

?>