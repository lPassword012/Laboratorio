<?php
    if(isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['numero3'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $numero3 = $_POST['numero3'];

        if($numero1 >= 0 && $numero2 >= 0 && $numero3 >= 0) {
            $suma = $numero1 + $numero2 + $numero3;
            $resta = $numero1 - $numero2 - $numero3;
            $producto = $numero1 * $numero2 * $numero3;

            if($numero2 != 0 && $numero3 != 0) {
                $cociente = $numero1 / $numero2 / $numero3;
            } else {
                $cociente = "Indefinido";
            }

            echo "<p>Suma: $suma</p>";
            echo "<p>Resta: $resta</p>";
            echo "<p>Producto: $producto</p>";
            echo "<p>Cociente: $cociente</p>";
        } else {
            echo "<p>Al menos uno de los números no es positivo.</p>";
        }
    } else {
        echo "<p>No se recibieron los números necesarios.</p>";
    }
?>