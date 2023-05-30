<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../conteudos/modelo-css/style.css">
        <title>Desafio 05</title>
    </head>
    <body>
        <main>
            <h1>Analisador de Número Real</h1>
            <?php
                $numero = $_GET["numero"] ?? "0.000";
                $fracionaria =  $numero - (int)$numero;
                echo "<p>Analisando o número <strong>" . number_format($numero, 3, ",", ".") . "</strong> informado pelo usuário:</p>";
                echo "<li>A parte inteira do número é <strong>" . number_format($numero, 0, ",", "."). "</strong></li>";
                echo "<li>A parte fracionária do número é <strong>" .number_format($fracionaria, 3, ",", ".") . "</strong></li><br>";
            ?>
            <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
        </main>
    </body>
</html>