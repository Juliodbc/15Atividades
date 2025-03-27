<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Números Primos</title>
</head>

<body>
    <h1>Verificação de Números Primos</h1>
    <form id="primoForm">
        <label for="numero">Digite um número inteiro:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="button" onclick="verificarPrimo()">Verificar Primo</button>
    </form>

    <h2>Resultados:</h2>
    <div id="resultadoPrimo"></div>
    <div id="listaPrimosFor"></div>
    <div id="listaPrimosWhile"></div>
    <div id="listaPrimosDoWhile"></div>

    <script>
        // Função para verificar se um número é primo
        function ehPrimo(num) {
            if (num <= 1) return false; // Números menores ou iguais a 1 não são primos
            if (num === 2) return true; // 2 é o único número par primo
            if (num % 2 === 0) return false; // Outros números pares não são primos

            // Verifica divisores ímpares até a raiz quadrada do número
            for (let i = 3; i <= Math.sqrt(num); i += 2) {
                if (num % i === 0) return false;
            }
            return true;
        }

        // Função principal
        function verificarPrimo() {
            const numero = parseInt(document.getElementById('numero').value);
            let resultadoPrimo = `<h3>O número ${numero} é primo? </h3>`;
            let listaPrimosFor = "<h3>Lista de Primos (For):</h3>";
            let listaPrimosWhile = "<h3>Lista de Primos (While):</h3>";
            let listaPrimosDoWhile = "<h3>Lista de Primos (Do-While):</h3>";

            // Verifica se o número é primo
            if (ehPrimo(numero)) {
                resultadoPrimo += "Sim, é primo.";
            } else {
                resultadoPrimo += "Não, não é primo.";
            }
            document.getElementById('resultadoPrimo').innerHTML = resultadoPrimo;


            for (let i = 2; i <= numero; i++) {
                if (ehPrimo(i)) {
                    listaPrimosFor += `${i} `;
                }
            }
            document.getElementById('listaPrimosFor').innerHTML = listaPrimosFor;

            let j = 2;
            while (j <= numero) {
                if (ehPrimo(j)) {
                    listaPrimosWhile += `${j} `;
                }
                j++;
            }
            document.getElementById('listaPrimosWhile').innerHTML = listaPrimosWhile;
            o
            let k = 2;
            do {
                if (ehPrimo(k)) {
                    listaPrimosDoWhile += `${k} `;
                }
                k++;
            } while (k <= numero);
            document.getElementById('listaPrimosDoWhile').innerHTML = listaPrimosDoWhile;
        }
    </script>
</body>

</html>