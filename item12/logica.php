<?php
    if(isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3'])) {
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];

        $notas = array($nota1, $nota2, $nota3);

        $promedio = 0;
        $contadorNotasValidas = 0;
        $sumaNotasValidas = 0;
        $notaMayor = max($notas);
        $notaMenor = min($notas);

        foreach($notas as $nota) {
            if($nota >= 0 && $nota < 10) {
                $sumaNotasValidas += $nota;
                $contadorNotasValidas++;
            } else {
                echo "<p>Una de las notas no corresponde.</p>";
                exit();
            }
        }

        if($contadorNotasValidas > 0) {
            $promedio = $sumaNotasValidas / $contadorNotasValidas;
            echo "<p>Promedio de las notas válidas: $promedio</p>";
        } else {
            echo "<p>No se encontraron notas válidas.</p>";
        }

        echo "<p>Nota Mayor: $notaMayor</p>";
        echo "<p>Nota Menor: $notaMenor</p>";
    } else {
        echo "<p>No se recibieron las notas necesarias.</p>";
    }
?>