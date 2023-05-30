<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../conteudos/modelo-css/style.css">
        <title>Desafio 07</title>
    </head>
    <body>
        <?php 
            $salario = $_GET['salario'] ?? 1380;
        ?>

        <main>
            <h1>Informe seu salário</h1>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="salario">Salário (R$)</label>
                <input type="number" name="salario" id="idsalario" step="0.01" value="<?= $salario ?>">

                <input type="submit" value="Calcular">
            </form>
            <p>Considerando o salário mínimo de <strong>R$1.380,00</strong></p>
        </main>

        <section>
            <h2>Resultado Final</h2>
            <?php 
                // Formatar no padrão brasileiro
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                $minimo = 1_380.60;
                $qtdd_salarios = intdiv($salario, $minimo);
                $resto_salario = $salario - $qtdd_salarios * $minimo;

                echo "Quem recebe um salário de " . numfmt_format_currency($padrao, $salario, "BRL") . " ganha <strong>$qtdd_salarios salários mínimos</strong> + " . numfmt_format_currency($padrao, $resto_salario, "BRL") . ".";
            ?>
        </section>
    </body>
</html>