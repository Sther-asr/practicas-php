<?php
    if(isset($_POST['calcular'])){
        // Variables
        $lado1 = 3;
        $lado2  = 4;
        //Procedimiento
        $calculo_lado1 = pow($lado1,2);
        $calculo_lado2 =  pow($lado2,2);
        //Suma final
        $calculo =  $calculo_lado1 + $calculo_lado2; 
        // Calculo raíz cuadrada
        $hipotenusa = sqrt($calculo);
        
    }
    function showPitagoras(){
        if(isset($_POST['calcular'])){
        global $lado1, $lado2, $calculo_lado1, $calculo_lado2, $calculo, $hipotenusa;
        echo "<div class='procedimiento'>";
        echo "<p><span>". $lado1 . "<sup>2</sup></span> = <span>" . $calculo_lado1 . "</span></p><br/>";
        echo "<p><span>". $lado2 . "<sup>2</sup></span> = <span>" . $calculo_lado2 . "</span></p><br/>";
        echo "<p>La suma de los catetos es = <span>" . $calculo . "</span></p><br/>";
        echo "<p>Resultado total = <span>" . $hipotenusa . "</span></p>";
        echo "</div>";
        }
    }
?>