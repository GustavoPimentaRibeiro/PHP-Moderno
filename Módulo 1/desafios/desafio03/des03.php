<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../conteudos/modelo-css/style.css">
        <title>Desafio 03</title>
    </head>
    <body>
        <main>
            <h1>Conversor de Moedas v.1</h1>
            <?php 
                $reais = $_GET["reais"] ?? "0";
                $dolares = $reais / 5.00;
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
                echo "<p>Seus " . numfmt_format_currency($padrao, $reais, "BRL"). " equivalem a <strong>" . numfmt_format_currency($padrao, $dolares, "USD") . "</strong>.</p>";
            ?>
            <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
        </main>
    </body>
</html>