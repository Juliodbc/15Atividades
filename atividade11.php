<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Números em um Vetor</title>
</head>

<body>
    <h1>Preenchimento de um Vetor e Cálculo da Soma</h1>
    <form id="vetorForm">
        <label for="quantidade">Digite a quantidade de números:</label>
        <input type="number" id="quantidade" name="quantidade" required>
        <button type="button" onclick="solicitarNumeros()">Inserir Números</button>
    </form>

    <div id="entradaNumeros" style="display: none;">
        <h2>Insira os números:</h2>
        <div id="camposNumeros"></div>
        <button type="button" onclick="calcularSoma()">Calcular Soma</button>
    </div>

    <h2>Resultados:</h2>
    <div id="resultadoFor"></div>
    <div id="resultadoWhile"></div>
    <div id="resultadoDoWhile"></div>

    <script>
        let numeros = [];

        function solicitarNumeros() {
            const quantidade = parseInt(document.getElementById('quantidade').value);
            const camposNumeros = document.getElementById('camposNumeros');
            camposNumeros.innerHTML = '';
            for (let i = 0; i < quantidade; i++) {
                camposNumeros.innerHTML += `<label for="numero${i}">Número ${i + 1}:</label>
                                             <input type="number" id="numero${i}" required><br>`;
            }

            document.getElementById('entradaNumeros').style.display = 'block';
        }

        function calcularSoma() {
            const quantidade = parseInt(document.getElementById('quantidade').value);
            numeros = [];
            for (let i = 0; i < quantidade; i++) {
                const numero = parseFloat(document.getElementById(`numero${i}`).value);
                numeros.push(numero);
            }

            let somaFor = 0;
            for (let i = 0; i < numeros.length; i++) {
                somaFor += numeros[i];
            }
            document.getElementById('resultadoFor').innerHTML = `<h3>Soma (For): ${somaFor}</h3>`;

            let somaWhile = 0;
            let j = 0;
            while (j < numeros.length) {
                somaWhile += numeros[j];
                j++;
            }
            document.getElementById('resultadoWhile').innerHTML = `<h3>Soma (While): ${somaWhile}</h3>`;

            let somaDoWhile = 0;
            let k = 0;
            do {
                somaDoWhile += numeros[k];
                k++;
            } while (k < numeros.length);
            document.getElementById('resultadoDoWhile').innerHTML = `<h3>Soma (Do-While): ${somaDoWhile}</h3>`;
        }
    </script>
</body>

</html>