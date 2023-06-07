<?php
    if(isset($_POST['numero1']) && isset($_POST['numero2'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        if ($numero1 < $numero2) {
            echo "<p>El menor número es: $numero1</p>";
        } elseif ($numero2 < $numero1) {
            echo "<p>El menor número es: $numero2</p>";
        } else {
            echo "<p>Los números son iguales</p>";
        }
    } else {
        echo "<p>No se recibieron los números necesarios.</p>";
    }
?>