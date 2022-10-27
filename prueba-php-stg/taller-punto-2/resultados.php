<?php
$nombre = $_POST ['name'];
$asignatura = $_POST ['asignature'];
$nota1 = $_POST ['nota1'];
$nota2 = $_POST ['nota2'];
$nota3 = $_POST ['nota3'];

$promedio = ($nota1+$nota2+$nota3)/3; 

echo "El promedio del estudiante, ".$nombre." en la asignatura: ".$asignatura." es de: ".$promedio;
?>