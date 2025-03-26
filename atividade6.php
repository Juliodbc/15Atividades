<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem Regressiva</title>
</head>
<body>
    <h1>Contagem Regressiva</h1>
    <form id="contagemForm">
        <label for="numero">Digite um número inteiro:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="button" onclick="iniciarContagem()">Iniciar Contagem</button>
    </form>

    <h2>Resultados:</h2>
    <div id="resultadoFor"></div>
    <div id="resultadoWhile"></div>
    <div id="resultadoDoWhile"></div>

    <script>
        function iniciarContagem() {
            const numero = parseInt(document.getElementById('numero').value);
            let resultadoFor = "<h3>Usando For:</h3>";
            let resultadoWhile = "<h3>Usando While:</h3>";
            let resultadoDoWhile = "<h3>Usando Do-While:</h3>";

            // Usando For
            for (let i = numero; i >= 0; i--) {
                resultadoFor += `${i} `;
            }
            document.getElementById('resultadoFor').innerHTML = resultadoFor;

            // Usando While
            let j = numero;
            while (j >= 0) {
                resultadoWhile += `${j} `;
                j--;
            }
            document.getElementById('resultadoWhile').innerHTML = resultadoWhile;

            // Usando Do-While
            let k = numero;
            do {
                resultadoDoWhile += `${k} `;
                k--;
            } while (k >= 0);
            document.getElementById('resultadoDoWhile').innerHTML = resultadoDoWhile;
        }
    </script>
</body>
</html>