<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../conteudos/modelo-css/style.css">
        <title>Desafio 12</title>
    </head>
    <body>
        <?php 
            $segundos_t = $_GET['segundos'] ?? 0;
        ?>

        <main>
            <h1>Calculadora de Tempo</h1>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="segundos">Qual é o total de segundos?</label>
                <input type="number" name="segundos" id="idsegundos" min="0" value="<?= $segundos_t ?>">

                <input type="submit" value="Calcular">
            </form>
        </main>

        <section>
            <?php 
                $semanas = (int)($segundos_t / 60 / 24 / 7 % 4);
                $dias = (int)($segundos_t / 60 / 60 / 24 % 7);
                $horas = (int)($segundos_t / 60 / 60  % 24);
                $minutos = (int)($segundos_t / 60 % 60);
                $segundos = (int)($segundos_t % 60);
            ?>
            <h2>Totalizando tudo</h2>
            <p>Analisando o valor que você digitou, <strong><?= number_format($segundos_t, 0, ',', '.') ?> segundos</strong> equivalem a um total de :</p>
            <ul>
                <li><?= $semanas ?> semanas</li>
                <li><?= $dias ?> dias</li>
                <li><?= $horas ?> horas</li>
                <li><?= $minutos ?> minutos</li>
                <li><?= $segundos ?> segundos</li>
            </ul>
        </section>
    </body>
</html>