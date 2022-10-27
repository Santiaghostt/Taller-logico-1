<?php
$volantes = $_POST['vl'];
$posters = $_POST['pst'];
$tarjeta = $_POST['card'];

$formulavl = $volantes*2000;
$formulapst = $posters*5000;
$formulacard = $tarjeta*500;

$pagototal = $formulavl+$formulapst+$formulacard;

echo "El valor total es de: ".$pagototal;
?>  