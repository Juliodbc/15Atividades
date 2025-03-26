<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <h1>Calculadora de Tabuada</h1>
    <form id="tabuadaForm">
        <label for="numero">Digite um número inteiro:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="button" onclick="calcularTabuada()">Calcular Tabuada</button>
    </form>

    <h2>Resultados:</h2>
    <div id="resultadoFor"></div>
    <div id="resultadoWhile"></div>
    <div id="resultadoDoWhile"></div>

    <script>
        function calcularTabuada() {
            const numero = parseInt(document.getElementById('numero').value);
            let resultadoFor = "<h3>Usando For:</h3>";
            let resultadoWhile = "<h3>Usando While:</h3>";
            let resultadoDoWhile = "<h3>Usando Do-While:</h3>";

            // Usando For
            for (let i = 1; i <= 10; i++) {
                resultadoFor += `${numero} x ${i} = ${numero * i}<br>`;
            }
            document.getElementById('resultadoFor').innerHTML = resultadoFor;

            // Usando While
            let j = 1;
            while (j <= 10) {
                resultadoWhile += `${numero} x ${j} = ${numero * j}<br>`;
                j++;
            }
            document.getElementById('resultadoWhile').innerHTML = resultadoWhile;

            // Usando Do-While
            let k = 1;
            do {
                resultadoDoWhile += `${numero} x ${k} = ${numero * k}<br>`;
                k++;
            } while (k <= 10);
            document.getElementById('resultadoDoWhile').innerHTML = resultadoDoWhile;
        }
    </script>
</body>
</html>