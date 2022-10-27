<?php

$ganados = $_POST['win-match'];
$perdidos = $_POST['lost-match'];
$empatados = $_POST['draw-match'];

$puntajeG = $ganados*3;
$puntajeP = $perdidos*0;
$puntajeE = $empatados*1;

$resultados = $puntajeG+$puntajeP+$puntajeE;

echo "Partidos ganados: ".$ganados." partidos perdidos: ".$perdidos." empates: ".$empatados." puntaje final: ".$resultados;
?>