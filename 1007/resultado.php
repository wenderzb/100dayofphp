<h1>Resultado</h1>
<?php

    $value1 = $_GET['value1'];
    $value2 = $_GET['value2'];
    $value3 = $_GET['value3'];
    $value4 = $_GET['value4'];

    $total = (($value1 * $value2) - ($value3 * $value4));

    echo "<p>DIFERENCA = $total</p>"

?>