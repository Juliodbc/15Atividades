<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Celsius para Fahrenheit</title>
</head>
<body>
    <h1>Conversão de Celsius para Fahrenheit</h1>
    <form id="conversaoForm">
        <label for="numero">Digite um número inteiro:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="button" onclick="exibirTabela()">Exibir Tabela</button>
    </form>

    <h2>Resultados:</h2>
    <div id="resultadoFor"></div>
    <div id="resultadoWhile"></div>
    <div id="resultadoDoWhile"></div>

    <script>
        function exibirTabela() {
            const numero = parseInt(document.getElementById('numero').value);
            let resultadoFor = "<h3>Usando For:</h3><table border='1'><tr><th>Celsius</th><th>Fahrenheit</th></tr>";
            let resultadoWhile = "<h3>Usando While:</h3><table border='1'><tr><th>Celsius</th><th>Fahrenheit</th></tr>";
            let resultadoDoWhile = "<h3>Usando Do-While:</h3><table border='1'><tr><th>Celsius</th><th>Fahrenheit</th></tr>";

            // Função para converter Celsius para Fahrenheit
            function celsiusParaFahrenheit(celsius) {
                return (celsius * 9 / 5) + 32;
            }

            // Usando For
            for (let i = 0; i <= numero; i++) {
                resultadoFor += `<tr><td>${i}°C</td><td>${celsiusParaFahrenheit(i).toFixed(2)}°F</td></tr>`;
            }
            resultadoFor += "</table>";
            document.getElementById('resultadoFor').innerHTML = resultadoFor;

            // Usando While
            let j = 0;
            while (j <= numero) {
                resultadoWhile += `<tr><td>${j}°C</td><td>${celsiusParaFahrenheit(j).toFixed(2)}°F</td></tr>`;
                j++;
            }
            resultadoWhile += "</table>";
            document.getElementById('resultadoWhile').innerHTML = resultadoWhile;

            // Usando Do-While
            let k = 0;
            do {
                resultadoDoWhile += `<tr><td>${k}°C</td><td>${celsiusParaFahrenheit(k).toFixed(2)}°F</td></tr>`;
                k++;
            } while (k <= numero);
            resultadoDoWhile += "</table>";
            document.getElementById('resultadoDoWhile').innerHTML = resultadoDoWhile;
        }
    </script>
</body>
</html>