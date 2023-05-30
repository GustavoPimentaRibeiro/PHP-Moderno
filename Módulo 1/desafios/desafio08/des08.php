<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../conteudos/modelo-css/style.css">
        <title>Desafio 08</title>
    </head>
    <body>
        <?php 
            $numero = $_GET['numero'] ?? 1;
        ?>

        <main>
            <h1>Informe um número</h1>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="numero">Número</label>
                <input type="number" name="numero" id="idnumero" value="<?= $numero ?>">

                <input type="submit" value="Calcular Raízes">
            </form>
        </main>

        <section>
            <h2>Resultado Final</h2>
            <?php 
                $raiz_quadrada = $numero ** (1/2);
                $raiz_cubica = $numero ** (1/3);
                echo "Analisando o <strong>número $numero</strong>, temos:";
                echo "<ul><li>A sua raiz quadrada é <strong>" . number_format($raiz_quadrada, 3, ",", ".") . "</strong></li> <li>A sua raiz cúbica é <strong>" . number_format($raiz_cubica, 3, ",", ".") . "</strong></li></ul>"
            ?>
        </section>
    </body>
</html>