<?php
$empleado = array();

if(isset($_POST['guardar']) && !empty($_POST['name1']) && !empty($_POST['surname1']) && !empty($_POST['id1'])
    && !empty($_POST['depto1']) && !empty($_POST['place1']) && !empty($_POST['salary1']) && !empty($_POST['name2']) && !empty($_POST['surname2']) && !empty($_POST['id2']) && !empty($_POST['depto2']) && !empty($_POST['place2']) && !empty($_POST['salary2']) && !empty($_POST['name3']) && !empty($_POST['surname3']) && !empty($_POST['id3'])
    && !empty($_POST['depto3']) && !empty($_POST['place3']) && !empty($_POST['salary3'])){
        
        $name1 = trim($_POST['name1']); $surname1 = trim($_POST['surname1']); $id1 = trim($_POST['id1']);
        $depto1 = trim($_POST['depto1']); $place1 = trim($_POST['place1']); $salary1 = trim($_POST['salary1']);

        $name2 = trim($_POST['name2']); $surname2 = trim($_POST['surname2']); $id2 = trim($_POST['id2']);
        $depto2 = trim($_POST['depto2']); $place2 = trim($_POST['place2']); $salary2 = trim($_POST['salary2']);

        $name3 = trim($_POST['name3']); $surname3 = trim($_POST['surname3']); $id3 = trim($_POST['id3']);
        $depto3 = trim($_POST['depto3']); $place3 = trim($_POST['place3']); $salary3 = trim($_POST['salary3']);
        
        echo "<div class='procedimiento'>";
            echo "<div class='procedimiento1'>";
            echo "<p><span>Nombre:</span>" . $name1 . "</p><br/>";
            echo "<p><span>Apellido:</span>" . $surname1 . "</p><br/>";
            echo "<p><span>Cédula:</span>" . $id1 . "</p><br/>";
            echo "<p><span>Depto.:</span>" . $depto1 . "</p><br/>";
            echo "<p><span>Ubicación:</span>" . $place1 . "</p><br/>";
            echo "<p><span>Salario:</span>" . $salary1 . "</p><br/>";
            echo "</div>";

            echo "<div class='procedimiento2'>";
            echo "<p><span>Nombre:</span>" . $name2 . "</p><br/>";
            echo "<p><span>Apellido:</span>" . $surname2 . "</p><br/>";
            echo "<p><span>Cédula:</span>" . $id2 . "</p><br/>";
            echo "<p><span>Depto.:</span>" . $depto2 . "</p><br/>";
            echo "<p><span>Ubicación:</span>" . $place2 . "</p><br/>";
            echo "<p><span>Salario:</span>" . $salary2 . "</p><br/>";
            echo "</div>";

            echo "<div class='procedimiento3'>";
            echo "<p><span>Nombre:</span>" . $name3 . "</p><br/>";
            echo "<p><span>Apellido:</span>" . $surname3 . "</p><br/>";
            echo "<p><span>Cédula:</span>" . $id3 . "</p><br/>";
            echo "<p><span>Depto.:</span>" . $depto3 . "</p><br/>";
            echo "<p><span>Ubicación:</span>" . $place3 . "</p><br/>";
            echo "<p><span>Salario:</span>" . $salary3 . "</p><br/>";
            echo "</div>";
        echo "</div>";
}
?>