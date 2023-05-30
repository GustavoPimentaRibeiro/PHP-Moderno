<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../conteudos/modelo-css/style.css">
        <title>Desafio 09</title>
    </head>
    <body>
        <?php 
            $v1 = $_GET['v1'] ?? 1;
            $m1 = $_GET['m1'] ?? 1;
            $v2 = $_GET['v2'] ?? 1;
            $m2 = $_GET['m2'] ?? 1;
        ?>

        <main>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="v1">1° Valor</label>
                <input type="number" name="v1" id="idv1" value="<?= $v1 ?>">

                <label for="m1">1° Peso</label>
                <input type="number" name="m1" id="idm1" value="<?= $m1 ?>">

                <label for="v2">2° Valor</label>
                <input type="number" name="v2" id="idv2" value="<?= $v2 ?>">

                <label for="m2">2° Peso</label>
                <input type="number" name="m2" id="idm2" value="<?= $m2 ?>">

                <input type="submit" value="Calcular Médias">
            </form>
        </main>

        <section>
            <h2>Cálculo de Médias</h2>
            <?php 
                $media_simples = ($v1 + $v2) / 2;
                $media_ponderada = (($v1 * $m1) + ($v2 * $m2)) / ($m1 + $m2);

                echo "Analisando os valores $v1 e $v2:";
                echo "<ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a " . number_format($media_simples, 2, ",", ".") ."</li> <li>A <strong>Média Aritmética Ponderada</strong> com pesos $m1 e $m2 é igual a " . number_format($media_ponderada, 2, ",", ".") . "</li></ul>"
            ?>
        </section>
    </body>
</html>