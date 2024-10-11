<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Exercício 1</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <h1>Resultado do Fatorial</h1>
        <?php
        if (isset($_POST['numero'])) {
            $numero = (int)$_POST['numero'];
            if ($numero > 0) {
                function fatorial($n) {
                    if ($n == 0) {
                        return 1;
                    }
                    return $n * fatorial($n - 1);
                }
                $resultado = fatorial($numero);
                echo "<p>O fatorial de $numero é $resultado.</p>";
            } else {
                echo "<p>Por favor, insira um número inteiro maior que zero.</p>";
            }
        } else {
            echo "<p>Nenhum número enviado.</p>";
        }
        ?>
        <a href="ex1.php">Voltar</a>
        <a href="index.php">Tela Principal</a>
    </main>
</body>
</html>
