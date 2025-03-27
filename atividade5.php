<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padrão de Asteriscos</title>
</head>
<body>
    <h1>Exibição de um Padrão de Asteriscos</h1>
    <form id="padraoForm">
        <label for="numero">Digite um número inteiro:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="button" onclick="exibirPadrao()">Exibir Padrão</button>
    </form>

    <h2>Resultados:</h2>
    <div id="resultadoFor"></div>
    <div id="resultadoWhile"></div>
    <div id="resultadoDoWhile"></div>

    <script>
        function exibirPadrao() {
            const numero = parseInt(document.getElementById('numero').value);
            let resultadoFor = "<h3>Usando For:</h3><pre>";
            let resultadoWhile = "<h3>Usando While:</h3><pre>";
            let resultadoDoWhile = "<h3>Usando Do-While:</h3><pre>";

            for (let i = 1; i <= numero; i++) {
                for (let j = 1; j <= i; j++) {
                    resultadoFor += "*";
                }
                resultadoFor += "\n";
            }
            resultadoFor += "</pre>";
            document.getElementById('resultadoFor').innerHTML = resultadoFor;

            let k = 1;
            while (k <= numero) {
                let l = 1;
                while (l <= k) {
                    resultadoWhile += "*";
                    l++;
                }
                resultadoWhile += "\n";
                k++;
            }
            resultadoWhile += "</pre>";
            document.getElementById('resultadoWhile').innerHTML = resultadoWhile;

            let m = 1;
            do {
                let n = 1;
                do {
                    resultadoDoWhile += "*";
                    n++;
                } while (n <= m);
                resultadoDoWhile += "\n";
                m++;
            } while (m <= numero);
            resultadoDoWhile += "</pre>";
            document.getElementById('resultadoDoWhile').innerHTML = resultadoDoWhile;
        }
    </script>
</body>
</html>