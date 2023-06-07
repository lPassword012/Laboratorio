<?php
    if(isset($_POST['a']) && isset($_POST['b'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];

        $resultado = ($a - $b) * ($a + $b);

        echo "<p>El resultado es: $resultado</p>";
    } else {
        echo "<h3>No se recibieron los valores necesarios.</h3>";
    }
?>