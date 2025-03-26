<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada de 1 a N</title>
</head>
<body>
    <h1>Tabuada de 1 a N</h1>
    <form id="tabuadaForm">
        <label for="multiplicador">Digite o multiplicador:</label>
        <input type="number" id="multiplicador" name="multiplicador" required>
        <br>
        <label for="limite">Digite o limite da tabuada:</label>
        <input type="number" id="limite" name="limite" required>
        <br>
        <button type="button" onclick="gerarTabuada()">Gerar Tabuada</button>
    </form>

    <h2>Resultados:</h2>
    <div id="resultadoFor"></div>
    <div id="resultadoWhile"></div>
    <div id="resultadoDoWhile"></div>

    <script>
        function gerarTabuada() {
            const multiplicador = parseInt(document.getElementById('multiplicador').value);
            const limite = parseInt(document.getElementById('limite').value);
            let resultadoFor = "<h3>Usando For:</h3>";
            let resultadoWhile = "<h3>Usando While:</h3>";
            let resultadoDoWhile = "<h3>Usando Do-While:</h3>";

            // Usando For
            for (let i = 1; i <= limite; i++) {
                resultadoFor += `${multiplicador} x ${i} = ${multiplicador * i}<br>`;
            }
            document.getElementById('resultadoFor').innerHTML = resultadoFor;

            // Usando While
            let j = 1;
            while (j <= limite) {
                resultadoWhile += `${multiplicador} x ${j} = ${multiplicador * j}<br>`;
                j++;
            }
            document.getElementById('resultadoWhile').innerHTML = resultadoWhile;

            // Usando Do-While
            let k = 1;
            do {
                resultadoDoWhile += `${multiplicador} x ${k} = ${multiplicador * k}<br>`;
                k++;
            } while (k <= limite);
            document.getElementById('resultadoDoWhile').innerHTML = resultadoDoWhile;
        }
    </script>
</body>
</html>