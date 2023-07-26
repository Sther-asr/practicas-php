<?php
include('./conexion.php');
echo '<form id="form">
        <input class="campo" name="medida" type="number"  placeholder="medida (psi):" required>
        <input class="campo" name="fecha" type="date"  required>
        <input class="campo" name="hora" type="time"  required>
        <select class="campo" name="idpozo" required>
            <option value="0">Seleccione un pozo:</option>
';
$resultado = mysqli_query($connection, 'SELECT * FROM pozo');
while($file = mysqli_fetch_array($resultado)){
    echo '
    <option value='.$file['id'].'>'.$file['nombre'].'</option>
    ';
}
echo '</select>
<button class="btn" onclick="regMedidas()">Registrar</button>
</form>
<button class="btn" onclick="onloadContent()">Regresar</button>
';
?>