<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Média de Notas</title>
</head>
<body>
    <h1>Cálculo da Média de Notas</h1>
    <form id="mediaForm">
        <label for="quantidade">Digite a quantidade de notas:</label>
        <input type="number" id="quantidade" name="quantidade" required>
        <button type="button" onclick="solicitarNotas()">Inserir Notas</button>
    </form>

    <div id="entradaNotas" style="display: none;">
        <h2>Insira as notas:</h2>
        <div id="camposNotas"></div>
        <button type="button" onclick="calcularMedia()">Calcular Média</button>
    </div>

    <h2>Resultados:</h2>
    <div id="resultadoFor"></div>
    <div id="resultadoWhile"></div>
    <div id="resultadoDoWhile"></div>

    <script>
        let notas = []; // Array para armazenar as notas inseridas

        // Função para exibir os campos de entrada das notas
        function solicitarNotas() {
            const quantidade = parseInt(document.getElementById('quantidade').value);
            const camposNotas = document.getElementById('camposNotas');
            camposNotas.innerHTML = ''; // Limpa os campos anteriores

            // Cria os campos de entrada para as notas
            for (let i = 0; i < quantidade; i++) {
                camposNotas.innerHTML += `<label for="nota${i}">Nota ${i + 1}:</label>
                                         <input type="number" id="nota${i}" step="0.1" required><br>`;
            }

            // Exibe a seção de entrada de notas
            document.getElementById('entradaNotas').style.display = 'block';
        }

        // Função para calcular a média
        function calcularMedia() {
            const quantidade = parseInt(document.getElementById('quantidade').value);
            notas = []; // Limpa o array de notas

            // Obtém as notas inseridas pelo usuário
            for (let i = 0; i < quantidade; i++) {
                const nota = parseFloat(document.getElementById(`nota${i}`).value);
                notas.push(nota);
            }

            // Calcula a soma e a média usando for
            let somaFor = 0;
            for (let i = 0; i < notas.length; i++) {
                somaFor += notas[i];
            }
            const mediaFor = somaFor / notas.length;
            document.getElementById('resultadoFor').innerHTML = `<h3>Média (For): ${mediaFor.toFixed(2)}</h3>`;

            // Calcula a soma e a média usando while
            let somaWhile = 0;
            let j = 0;
            while (j < notas.length) {
                somaWhile += notas[j];
                j++;
            }
            const mediaWhile = somaWhile / notas.length;
            document.getElementById('resultadoWhile').innerHTML = `<h3>Média (While): ${mediaWhile.toFixed(2)}</h3>`;

            // Calcula a soma e a média usando do-while
            let somaDoWhile = 0;
            let k = 0;
            do {
                somaDoWhile += notas[k];
                k++;
            } while (k < notas.length);
            const mediaDoWhile = somaDoWhile / notas.length;
            document.getElementById('resultadoDoWhile').innerHTML = `<h3>Média (Do-While): ${mediaDoWhile.toFixed(2)}</h3>`;
        }
    </script>
</body>
</html>