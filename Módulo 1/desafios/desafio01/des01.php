<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../conteudos/modelo-css/style.css">
        <title>Desafio 01</title>
    </head>
    <body>
        <main>
            <h1>Resultado Final</h1>
            <?php 
                $numero = $_GET["numero"] ?? "0";
                $antecessor = $numero - 1;
                $sucessor = $numero + 1;
                echo "<p>O número escolhido foi <strong>$numero</strong></p>";
                echo "<p>O seu <em>antecessor</em> é $antecessor</p>";
                echo "<p>O seu <em>sucessor</em> é $sucessor</p>";
            ?>
            <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
        </main>
    </body>
</html>