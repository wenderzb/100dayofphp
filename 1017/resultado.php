<h1>Resultado</h1>
<?php

    $tempo = $_GET['tempo'];
    $kmh = $_GET['kmh'];
    $kml = 12; 
    $total = ($tempo * $kmh) / $kml;
    echo number_format($total,3)."<br>";

?>