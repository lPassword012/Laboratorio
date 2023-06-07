<?php
    if(isset($_POST['duracion'])) {
        $duracion = $_POST['duracion'];
        $costo = 0;

        if ($duracion <= 3) {
            $costo = $duracion * 9.50;
        } else {
            $costo = (3 * 9.50) + (($duracion - 3) * 1.10);
        }

        echo "<p>El costo de la llamada es: $costo</p>";
    } else {
        echo "<p>No se recibió la duración de la llamada.</p>";
    }
?>