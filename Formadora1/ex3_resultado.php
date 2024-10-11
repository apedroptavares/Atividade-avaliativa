<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
        <h1>Resultado da Densidade</h1>
        <?php
        if (isset($_POST['massa']) && isset($_POST['volume'])) {
            $massa = (float)$_POST['massa'];
            $volume = (float)$_POST['volume'];
            
            if ($volume > 0) {
                $densidade = $massa / $volume;
                echo "<p>A densidade é " . number_format($densidade, 2) . " kg/m³.</p>";
            } else {
                echo "<p>O volume deve ser maior que zero.</p>";
            }
        } else {
            echo "<p>Massa e/ou volume não enviados.</p>";
        }
        ?>
        <a href="ex3.php">Voltar</a>
        <a href="index.php">Voltar para a Tela Principal</a>
    </main>
</body>
</html>
