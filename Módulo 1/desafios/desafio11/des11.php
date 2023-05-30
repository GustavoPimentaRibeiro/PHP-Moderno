<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../conteudos/modelo-css/style.css">
        <title>Desafio 11</title>
    </head>
    <body>
        <?php 
            $preco_produto = $_GET['preco_produto'] ?? 0;
            $reajuste = $_GET['reajuste'] ?? 0;
        ?>

        <main>
            <h1>Reajustador de Preços</h1>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="preco_produto">Preço do Produto (R$)</label>
                <input type="number" name="preco_produto" id="idpreco_produto" step="0.01" value="<?= $preco_produto ?>">

                <label for="reajuste">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
                <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" value="<?= $reajuste ?>" oninput="mudaValor()">

                <input type="submit" value="Analisar">
            </form>
        </main>

        <section>
            <h2>Resultado do Reajuste</h2>
            <?php 
                $aumento = $preco_produto * (1 + ($reajuste / 100));
                echo "<p>O produto que custava R$" . number_format($preco_produto, 2, ',', '.') . " com <strong>$reajuste% de aumento</strong> vai passar a custar <strong>R$" . number_format($aumento, 2, ',', '.') . "</strong> a partir de agora.</p>";
            ?>
        </section>

        <script>
            // Declarações automáticas
            mudaValor();

            function mudaValor() {
                p.innerText = reajuste.value;
            }
        </script>
    </body>
</html>