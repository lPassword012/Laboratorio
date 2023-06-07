<?php
    // Verificamos si se enviaron los valores a través del formulario
    if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
        // Obtenemos los valores ingresados por el usuario
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        // Realizamos la operación A + B - C + 100
        $resultado = (($a + $b) - ($c + 100));

        // Mostramos el resultado en pantalla
        echo "<p>El resultado es: $resultado</p>";
    } else {
        echo "<h3>No se recibieron los valores necesarios.</h3>";
    }
?>