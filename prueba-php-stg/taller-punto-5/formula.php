<?php

$h1 = $_POST['H1'];
$h2 = $_POST['H2'];

$formula = $h1-$h2;
$formula2 = $h2-$h1;


if($h1>$h2){
    echo " El hermano mayor tiene ".$h1." años y es mayor por ".$formula." años ";
} else {
    echo " El hermano mayor tiene ".$h2." años y es mayor por ".$formula2." años ";
}

?>