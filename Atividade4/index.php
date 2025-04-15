<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="calcular.php" method="post">
<h1>Escolha seu Time de Futebol</h1>
    <form method="post">
        <label>
            <input type="radio" name="time" value="Palmeiras" required> Palmeiras
        </label><br>
        <label>
            <input type="radio" name="time" value="Corinthians" required> Corinthians
        </label><br>
        <label>
            <input type="radio" name="time" value="São Paulo" required> São Paulo
        </label><br>
        <label>
            <input type="radio" name="time" value="Santos" required> Santos
        </label><br>
        <input type="submit" name="MostrarTudo" value="Resultado">
    </form>
</body>
</html>