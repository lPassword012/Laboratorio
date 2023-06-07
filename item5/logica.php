<?php
    if(isset($_POST['numero'])) {
        $numero = $_POST['numero'];

        if($numero > 100) {
            echo "<p>$numero es mayor a 100.</p>";
        } else if($numero == 100) {
            echo "<p>es igual a 100.</p>";
        } else {
            echo "<p>$numero es menor a 100.</p>";
        }
    }
?>