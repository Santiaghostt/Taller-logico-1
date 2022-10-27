<?php
    $valor = $_POST['valor'];
    $prom = $valor / 100*20;
    $resta = $valor-$prom;

    if($valor >= '20000'){
        echo "Total a pagar: ".$resta."<br>"."Con el descuento aplicado";
    }else{
        echo "Total a pagar: ".$valor."<br>"."No se aplica descuento";
    }
?>