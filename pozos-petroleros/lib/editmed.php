<?php
include('./conexion.php');

if(isset($_POST['id'])){

    $idhis = $_POST['id'];

    $query = "SELECT * FROM historial WHERE id = $idhis";
    $sql = mysqli_query($connection, $query);
    if(mysqli_num_rows($sql) == 1){
        $row = mysqli_fetch_array($sql);
        $medida = $row['medida'];
        $fecha = $row['fecha'];
        $hora = $row['hora'];
        $idpozo = $row['pozo_id'];
    }
    //     $originalDate = "2017-03-08";
    // $newDate = date("d/m/Y", strtotime($originalDate));

    $originalDate = $fecha;
    $newDate = date("Y-m-d", strtotime($originalDate));
    echo '
    <form id="form">
        <input value='.$medida.' class="campo" 
        name="medida" type="number"  placeholder="medida (psi):" required >
        
        <input value= ' .$newDate. ' class="campo" 
        name="fecha" type="date"  required>
        
        <input value='.$hora.' class="campo" 
        name="hora" type="time"  required>
        
        <select class="campo" 
        name="idpozo" required>
            <option>Seleccione un pozo:</option>
        ';
        
    $query2 = "SELECT * FROM pozo";
    $sql2 = mysqli_query($connection, $query2);
    while($file = mysqli_fetch_array($sql2)){
        $id3 = $file['id'];

        if($id3 == $idpozo){
            echo '
            <option selected value='.$file['id'].'>'.$file['nombre'].'</option>
            ';
        }else{
            echo '
            <option value='.$file['id'].'>'.$file['nombre'].'</option>
            ';
        }
    }

    echo '</select>
    <button class="btn" onclick="updateMed()">Guardar</button>
    </form>
    ';
    $_SESSION['id'] = $idhis;
}
?>