<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <h1>Resultado da Autenticação</h1>
        <?php
        $loginCorreto = "24106815";
        $senhaCorreta = "12345678";
        
        if (isset($_POST['login']) && isset($_POST['senha'])) {
            $login = $_POST['login'];
            $senha = $_POST['senha'];

            if ($login === $loginCorreto && $senha === $senhaCorreta) {
                echo "<p>Autenticado foi feita com Sucesso!</p>";
            } else {
                echo "<p>Falha na autenticação.</p>";
            }
        } else {
            echo "<p>Login ou senha não foram enviados.</p>";
        }
        ?>
        <a href="ex2.php">Voltar</a>
        <a href="index.php">Tela Principal</a>
    </main>
</body>
</html>
