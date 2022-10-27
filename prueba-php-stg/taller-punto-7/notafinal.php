<?php
    $cal = $_POST['nota'];

    if($cal >= 7){
        echo "APROBADO";
    }else{
        echo "DESAPROBADO";
    }
?>