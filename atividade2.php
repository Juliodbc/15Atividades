<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Pares entre Dois Números</title>
</head>

<body>
    <h1>Exibição de Números Pares entre Dois Números</h1>
    <form id="numerosParesForm">
        <label for="numero1">Digite o primeiro número inteiro:</label>
        <input type="number" id="numero1" name="numero1" required>
        <br>
        <label for="numero2">Digite o segundo número inteiro:</label>
        <input type="number" id="numero2" name="numero2" required>
        <br>
        <button type="button" onclick="exibirNumerosPares()">Exibir Números Pares</button>
    </form>

    <h2>Resultados:</h2>
    <div id="resultadoFor"></div>
    <div id="resultadoWhile"></div>
    <div id="resultadoDoWhile"></div>

    <script>
        function exibirNumerosPares() {
            // Obtém os valores dos números digitados pelo usuário
            const numero1 = parseInt(document.getElementById('numero1').value);
            const numero2 = parseInt(document.getElementById('numero2').value);

            // Verifica qual número é menor e qual é maior
            const inicio = Math.min(numero1, numero2);
            const fim = Math.max(numero1, numero2);

            // Variáveis para armazenar os resultados
            let resultadoFor = "<h3>Usando For:</h3>";
            let resultadoWhile = "<h3>Usando While:</h3>";
            let resultadoDoWhile = "<h3>Usando Do-While:</h3>";

            for (let i = inicio; i <= fim; i++) {
                if (i % 2 === 0) {
                    resultadoFor += `${i} `;
                }
            }
            document.getElementById('resultadoFor').innerHTML = resultadoFor;

            let j = inicio;
            while (j <= fim) {
                if (j % 2 === 0) {
                    resultadoWhile += `${j} `;
                }
                j++;
            }
            document.getElementById('resultadoWhile').innerHTML = resultadoWhile;


            let k = inicio;
            do {
                if (k % 2 === 0) {
                    resultadoDoWhile += `${k} `;
                }
                k++;
            } while (k <= fim);
            document.getElementById('resultadoDoWhile').innerHTML = resultadoDoWhile;
        }
    </script>
</body>

</html>