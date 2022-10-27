<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total de puntos del torneo por equipo</title>
</head>
<body>
    <h2>Ingrese los siguientes datos para averiguar el puntaje total por equipo</h2>
    <form action="resultados3.php" method="post">
    <label for="p-ganados">Partidos ganados</label><input type="text" name="win-match">
    <label for="p-perdidos">Partidos perdidos</label><input type="text" name="lost-match">
    <label for="p-empatados">Partidos empatados</label><input type="text" name="draw-match">
    <input type="submit" name="enviar" value="enviar">
    </form> 
</body>
</html>


        