<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="calcular.php" method="post">
<h1>Escolha seu Gênero</h1>
    <form method="post">
        <label>
            <input type="radio" name="genero" value="homem" required> Homem
        </label>
        <label>
            <input type="radio" name="genero" value="mulher" required> Mulher
        </label>
        <input type="submit" name="MostrarTudo" value="Resultado">
    </form>
</body>
</html>