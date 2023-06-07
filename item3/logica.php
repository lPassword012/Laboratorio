<?php
    if(isset($_POST['numero'])) {
        $numero = $_POST['numero'];

        $opuesto = -$numero;

        echo "<p>El opuesto del número es: $opuesto</p>";
    } else {
        echo "<h3>No se recibió el número.</h3>";
    }
?>