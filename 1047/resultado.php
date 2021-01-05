<h1>Resultado</h1>
<?php

    $horaInicial = $_GET['hora-inicial'];
    $minutoInicial = $_GET['minuto-inicial'];
    $horaFinal = $_GET['hora-final'];
    $minutoFinal = $_GET['minuto-final'];

    $horas = ($horaInicial - $horaFinal);
    $minutos = ($minutoInicial - $minutoFinal);
    $horasTotal = $horas <= 0 ? 24 - ($horas * -1) : $horas;
    $minutosTotal = $minutos <= 0 ? $minutos * -1 : 60 - $minutos;

    echo "<p>O JOGO DUROU $horasTotal HORA(S) E $minutosTotal MINUTO(S)</p>"

?>