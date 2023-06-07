<?php
    if(isset($_POST['lado1']) && isset($_POST['lado2']) && isset($_POST['lado3'])) {
        $lado1 = $_POST['lado1'];
        $lado2 = $_POST['lado2'];
        $lado3 = $_POST['lado3'];

        if ($lado1 === $lado2 && $lado2 === $lado3) {
            echo "<p>Se forma un triángulo equilátero.</p>";
        } elseif ($lado1 === $lado2 || $lado1 === $lado3 || $lado2 === $lado3) {
            echo "<p>Se forma un triángulo isósceles.</p>";
        } else {
            echo "<p>Se forma un triángulo escaleno.</p>";
        }
    } else {
        echo "<p>No se recibieron los lados necesarios.</p>";
    }
?>