<?php
    $cap = $_POST['capital'];

    $prom1 = $cap/ 100*2;
    $prom2 = $cap/ 100*4.5;
    $prom3 = $cap/ 100*7;

    $sum1 = $cap + $prom1;
    $sum2 = $cap + $prom2;
    $sum3 = $cap + $prom3;

    if($cap <= '500'){
        echo "Interes mensual"."<br>".$cap + $prom1." = ".$sum1;
    }else{
        if($cap > '500' && $cap < '1500'){
            echo "Interes mensual"."<br>"."$prom2 + $cap"." = ".$sum2;
        }else{
            echo "Interes mensual"."<br>"."$cap + $prom3"." = ".$sum3;
        }
    }
?>