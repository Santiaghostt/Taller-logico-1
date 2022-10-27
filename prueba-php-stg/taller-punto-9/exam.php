<?php
    $nombre = $_POST['nombre'];
    $materia = $_POST['materia'];
    $cal1 = $_POST['num1'];
    $cal2 = $_POST['num2'];
    $cal3 = $_POST['num3'];

    $calc = $cal1 * 0.3;
    $calc2 = $cal2 * 0.3;
    $calc3 = $cal3 * 0.4;

    $suma = $calc + $calc2 + $calc3;

    if($suma >= '4.0'){
        echo "El aprendiz ".$nombre." aprueba la asignatura ".$materia." con un promedio total de ".$suma;
    }else{
        echo "El aprendiz ".$nombre." desaprueba la asignatura ".$materia." con un promedio total de ".$suma;
    }
?>