<?php
    $n1 = 20;
    $n2 = 50;
    $n3 = 70;

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
    if($n1==$n2){
        //codigo que se resuelve si la respuesta a la pregunta es positiva
        echo "ambos valores son iguales";
    }else{
        if ($n1>$n2) {
            echo $n1."es mayor que".$n2;
        } else {
            echo $n2."es mayor que".$n1;
        } if ($n3>$n2) {
            echo $n3."es mayor que".$n2;
        } else {
            echo $n2."es mayor que".$n3;
        } if ($n1>$n3) {
            echo $n1."es mayor que".$n3;
        } else {
            echo $n3."es mayor que".$n1;
        }
        
    }

?>