<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../conteudos/modelo-css/style.css">
        <title>Desafio 10</title>
    </head>
    <body>
        <?php 
            $ano_nascimento = $_GET['ano_nascimento'] ?? 0;
            $idade_ano = $_GET['idade_ano'] ?? 0;
        ?>

        <main>
            <h1>Calculando a sua idade</h1>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="ano_nascimento">Em que ano você nasceu?</label>
                <input type="number" name="ano_nascimento" id="idano_nascimento" min="1900" max="<?= date('Y') ?>" value="<?= $ano_nascimento ?>">

                <label for="idade_ano">Quer saber sua idade em que ano? (atualmente estamos em <strong><?= date("Y") ?></strong>)</label>
                <input type="number" name="idade_ano" id="ididade_ano" min="1900" value="<?= $idade_ano ?>">

                <input type="submit" value="Analisar">
            </form>
        </main>

        <section>
            <h2>Resultado</h2>
            <?php 
                $idade = $idade_ano - $ano_nascimento;
                echo "<p>Quem nasceu em $ano_nascimento vai ter <strong>$idade anos</strong> em $idade_ano!</p>";
            ?>
        </section>
    </body>
</html>