<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência de Fibonacci</title>
</head>

<body>
    <h1>Sequência de Fibonacci</h1>
    <form id="fibonacciForm">
        <label for="numero">Digite um número inteiro:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="button" onclick="exibirFibonacci()">Exibir Fibonacci</button>
    </form>

    <h2>Resultados:</h2>
    <div id="resultadoFor"></div>
    <div id="resultadoWhile"></div>
    <div id="resultadoDoWhile"></div>

    <script>
        function exibirFibonacci() {
            const numero = parseInt(document.getElementById('numero').value);
            let resultadoFor = "<h3>Usando For:</h3>";
            let resultadoWhile = "<h3>Usando While:</h3>";
            let resultadoDoWhile = "<h3>Usando Do-While:</h3>";

            function gerarFibonacci(limite) {
                let fibonacci = [0, 1];
                while (fibonacci[fibonacci.length - 1] + fibonacci[fibonacci.length - 2] <= limite) {
                    fibonacci.push(fibonacci[fibonacci.length - 1] + fibonacci[fibonacci.length - 2]);
                }
                return fibonacci;
            }
            const fibonacci = gerarFibonacci(numero);

            for (let i = 0; i < fibonacci.length; i++) {
                resultadoFor += `${fibonacci[i]} `;
            }
            document.getElementById('resultadoFor').innerHTML = resultadoFor;

            let j = 0;
            while (j < fibonacci.length) {
                resultadoWhile += `${fibonacci[j]} `;
                j++;
            }
            document.getElementById('resultadoWhile').innerHTML = resultadoWhile;

            let k = 0;
            do {
                resultadoDoWhile += `${fibonacci[k]} `;
                k++;
            } while (k < fibonacci.length);
            document.getElementById('resultadoDoWhile').innerHTML = resultadoDoWhile;
        }
    </script>
</body>

</html>