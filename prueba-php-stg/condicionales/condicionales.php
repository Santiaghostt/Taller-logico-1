<?php
    $num1 = $_POST['numero1'];
    $num2 = $_POST['numero2'];
    $num3 = $_POST['numero3'];

    /* operadores de comparacion
    == igualdad
    > mayor que
    >= mayor o igual que
    < menor que
    <= menor o igual que
    && operador y
    or operador o
    */
/*  if(){
        //codigo que se resuelve si la respuesta a la pregunta es positiva
    }else{
        //codigo que se resuelve si la respuesta a la pregunta es negativa
    };
*/
    if($num1>$num2){
        if($num1>$num3){
            echo $num1." es mayor que ".$num2." y ".$num3;
        } else {
            echo $num3." es mayor que ".$num1." y ".$num2;
        }
    } else {
        if($num2>$num3){
            echo $num2." es mayor que ".$num1." y ".$num3;
        } else {
            echo $num3." es mayor que ".$num1." y ".$num2;
        }
    }
?>