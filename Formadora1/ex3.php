<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Densidade</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <h1>Densidade</h1>
        <form action="ex3_resultado.php" method="post">
            <label for="massa">Massa (kg):</label>
            <input type="number" id="massa" name="massa" step="0.01" required>
            <label for="volume">Volume (m³):</label>
            <input type="number" id="volume" name="volume" step="0.01" required>
            <button type="submit">Enviar</button>
        </form>
        <a href="index.php">Tela Principal</a>
    </main>
</body>
</html>
