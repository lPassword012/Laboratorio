<?php
    if(isset($_POST['numero'])) {
        $numero = $_POST['numero'];

        if($numero > 0) {
            echo "<p>$numero es positivo.</p>";
        } elseif($numero < 0) {
            echo "<p>$numero es negativo.</p>";
        } else {
            echo "<p>$numero es nulo.</p>";
        }
    }
?>