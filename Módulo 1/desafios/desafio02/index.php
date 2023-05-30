<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../conteudos/modelo-css/style.css">
        <title>Desafio 02</title>
    </head>
    <body>
        <main>
            <h1>Trabalhando com números aleatórios</h1>
            <?php
                $aleatorio = mt_rand(0, 100);
                echo "<p>Gerando um número aleatório entre 0 e 100...</p>";
                echo "<p>O valor gerado foi <strong>$aleatorio</strong></p>";
            ?>
            <button onclick="javascript:window.location.reload()">&#x1F504; Gerar outro</button>
        </main>
    </body>
</html>