<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <h1>Login</h1>
        <form action="ex2_resultado.php" method="post">
            <label for="login">Login:</label>
            <input type="text" id="login" name="login" required>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
            <button type="submit">Enviar</button>
        </form>
        <a href="index.php">Tela Principal</a>
    </main>
</body>
</html>
