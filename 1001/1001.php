<h1>1001</h1>
<form action="" method="get">
            Valor 1: <input type="number" name="value" />
            Valor 2: <input type="number" name="val" />
            <button type="submit" > Enviar </button>
        </form>

<?php

    $value = $_GET['value'];
    $val = $_GET['val'];

    $total = $value + $val;

    echo "<p>$total</p>"

?>