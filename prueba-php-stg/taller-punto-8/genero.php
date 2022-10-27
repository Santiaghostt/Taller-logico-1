<?php
    $gen = $_POST['genero'];
    $edad = $_POST['edad'];

    if(($gen == 'mujer')&& ($edad>54)){
        echo "PUEDE JUBILARSE";
    }else{
        if($gen == 'hombre'&&$edad>=63){
            echo "PUEDE JUBILARSE";
        }else{
            echo "NO PUEDE JUBILARSE";
        }
    }
?>