<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jubilacion</title>
</head>
<body>
    <h2>Ingreseo los siguientes datos</h2>
    <form action="genero.php" method="post">
        <label for="numero">Edad:</label>
        <input name="edad" type="text">
        <label for="genero">Sexo:</label>
        <select name="genero">
            <option name="hombre" value="hombre">Hombre</option>
            <option name="mujer" value="mujer">Mujer</option>
        </select>
        <input type="submit" name="enviar" value="enviar">
    </form>
</body>
</html>