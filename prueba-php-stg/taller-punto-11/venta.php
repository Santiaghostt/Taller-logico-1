<?php
    $producto = $_POST['nombre'];
    $valor = $_POST['costo'];
    $prom = $valor / 100*15;
    $total = $valor+$prom;

    echo "El articulo ".$producto." deberia venderse por ".$total." para obtener una ganacia del 15%";
?>