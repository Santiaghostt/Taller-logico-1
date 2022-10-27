<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota final</title>
</head>
<body>
<section class="contenido">
        <h2>Ingrese los siguientes datos</h2>
        <form class="formulario"  action="exam.php" method="post">
            <label for="numero">Nombre del aprendiz:</label><input name="nombre" type="text">
            <label for="numero2">Asignatura:</label><input name="materia" type="text">
            <label for="numero2">Calificacion 1:</label><input name="num1" type="num">
            <label for="numero2">Calificacion 2:</label><input name="num2" type="num">
            <label for="numero2">Calificacion 3:</label><input name="num3" type="num">
            <input type="submit" name="enviar" value="enviar">
</section>
</body>
</html>