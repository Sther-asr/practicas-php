<?php

include('./conexion.php');

if(isset($_POST['id'])){

    $idpozo = $_POST['id'];
    $query = "SELECT * FROM pozo WHERE id = $idpozo";
    $sql = mysqli_query($connection, $query);
    if(mysqli_num_rows($sql) == 1){
        $row = mysqli_fetch_array($sql);
        $id = $row['id'];
        $nombre = $row['nombre'];
    }
    echo '
    <form>
        <label>Nombre:</label>
        <input class="campo" type="text" id="namepozo" value = "'. $nombre .'">
        <button id="btn-pozo" class="btn" onclick="updatePozo()">Guardar</button>
    </form>
    ';
    $_SESSION['id'] = $id;
}
?>