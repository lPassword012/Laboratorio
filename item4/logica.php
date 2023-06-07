<?php
    if(isset($_POST['numero1']) && isset($_POST['numero2'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        $producto = $numero1 * $numero2;

        echo "<p>El producto de los números es: $producto</p>";
    } else {
        echo "<h3>No se recibieron los números necesarios.</h3>";
    }
?>