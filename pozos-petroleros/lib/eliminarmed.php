<?php
include('./conexion.php');

if(isset($_POST['id'])){
    $id = $_POST['id'];

    $query = "DELETE FROM historial WHERE id = $id";
    $sql = mysqli_query($connection, $query);
    
    if($sql){
        echo "Okay";
    }else {
        echo "fail";
    }

}

?>