<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tipos primitivos em PHP</title>
    </head>
    <body>
        <h1>Teste de tipos primitivos</h1>
        <?php 
            // $num = 0b1A;
            // echo "O valor da variável é $num";

            // $v = 300;
            // var_dump($v);

            // $num = 3e2;
            // echo "O valor do número é $num";

            // $casado = true;
            // print "O valor para casado é $casado";

            // $vet = [6, 2.5, "Maria", 3, false];
            // var_dump($vet);

            class Pessoa {
                private string $nome;
            }

            $p = new Pessoa;
            var_dump($p);
        ?>
    </body>
</html>