<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../conteudos/modelo-css/style.css">
        <title>Desafio 13</title>
    </head>
    <body>
        <?php 
            $valor = $_GET['valor'] ?? 0;
        ?>

        <main>
            <h1>Caixa Eletrônico</h1>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="valor">Qual valor você deseja sacar? (R$)*</label>
                <input type="number" name="valor" id="idvalor" min="0" step="5" value="<?= $valor ?>">

                <p>*Notas disponíveis: R$100, R$50, R$10 e R$5</p>

                <input type="submit" value="Calcular">
            </form>
        </main>

        <section>
            <?php 
                $cem = (int)($valor / 100);
                $cinquenta = (int)($valor % 100 / 50);
                $dez = (int)($valor % 100 % 50 / 10);
                $cinco = (int)($valor % 100 % 50 % 10 / 5);
            ?>
            <h2>Saque de R$<?= number_format($valor, 2, ',', '.') ?> realizado</h2>
            <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
            <ul>
                <li><img src="../../conteudos/d013/imagens/100-reais.jpg" alt="nota de 100 reais"> x<?= $cem ?></li>
                <li><img src="../../conteudos/d013/imagens/50-reais.jpg" alt="nota de 50 reais"> x<?= $cinquenta ?></li>
                <li><img src="../../conteudos/d013/imagens/10-reais.jpg" alt="nota de 10 reais"> x<?= $dez ?></li>
                <li><img src="../../conteudos/d013/imagens/5-reais.jpg" alt="nota de 5 reais"> x<?= $cinco ?></li>
            </ul>
        </section>
    </body>
</html>