<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedio final</title>
</head>
<body>
    <h2>Ingrese los siguientes datos para averiguar el promedio de la asignatura</h2>
    <form action="resultados.php" method="post">
    <label for="nombre">Nombre del estudiante </label><input type="text" name="name">
    <label for="asignatura">Asignatura </label><input type="text" name="asignature">
    <label for="nota1">Nota # 1 </label><input type="text" value="" name="nota1">
    <label for="nota2">Nota # 2 </label><input type="text" value="" name="nota2">
    <label for="nota3">Nota # 3 </label><input type="text" value="" name="nota3">
    <input type="submit" name="enviar" value="enviar">
    </form> 
</body>
</html>


        