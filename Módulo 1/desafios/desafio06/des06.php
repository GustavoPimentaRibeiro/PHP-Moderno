<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../conteudos/modelo-css/style.css">
        <title>Desafio 06</title>
    </head>
    <body>
        <?php 
            $divisor = $_GET['divisor'] ?? 1;
            $dividendo = $_GET['dividendo'] ?? 1;
        ?>

        <main>
            <h1>Anatomia de uma Divisão</h1>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="dividendo">Dividendo</label>
                <input type="number" name="dividendo" id="iddividendo" value="<?= $dividendo ?>">

                <label for="divisor">Divisor</label>
                <input type="number" name="divisor" id="iddivisor" min="1" value="<?= $divisor ?>">

                <input type="submit" value="Analisar">
            </form>
        </main>

        <section>
            <h2>Estrutura da Divisão</h2>
            <?php 
                $quociente = intdiv($dividendo, $divisor);
                $resto = $dividendo % $divisor;

                echo "<table class='divisao'>";
                echo "<tr><td>$dividendo</td>";
                echo "<td>$divisor</td></tr>";
                echo "<tr><td>$quociente</td>";
                echo "<td>$resto</td></tr>";
                echo "</table>";
            ?>
        </section>
    </body>
</html>