<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../conteudos/modelo-css/style.css">
        <title>Desafio 04</title>
    </head>
    <body>
        <main>
            <h1>Conversor de Moedas v.2</h1>
            <?php
                // Pegar a cotação do dolar atualizado através de uma API do Banco Central do Brasil
                $inicio = date("m-d-Y", strtotime("-7 days"));
                $fim = date("m-d-Y");
                $url_api = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

                // Convertendo json em um array
                $dados = json_decode(file_get_contents($url_api), true);

                // Pegando o valor do dólar do retorno da API
                $cotacao = $dados["value"][0]["cotacaoCompra"];

                $reais = $_GET["reais"] ?? "0";
                $dolares = $reais / $cotacao;
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
                echo "<p>Seus " . numfmt_format_currency($padrao, $reais, "BRL"). " equivalem a <strong>" . numfmt_format_currency($padrao, $dolares, "USD") . "</strong>.</p>";
            ?>
            <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
        </main>
    </body>
</html>