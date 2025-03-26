<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo do Fatorial</title>
</head>
<body>
    <h1>Cálculo do Fatorial</h1>
    <form id="fatorialForm">
        <label for="numero">Digite um número inteiro:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="button" onclick="calcularFatorial()">Calcular Fatorial</button>
    </form>

    <h2>Resultados:</h2>
    <div id="resultadoFor"></div>
    <div id="resultadoWhile"></div>
    <div id="resultadoDoWhile"></div>

    <script>
        function calcularFatorial() {
            const numero = parseInt(document.getElementById('numero').value);
            let resultadoFor = "<h3>Usando For:</h3>";
            let resultadoWhile = "<h3>Usando While:</h3>";
            let resultadoDoWhile = "<h3>Usando Do-While:</h3>";

            // Função para calcular o fatorial
            function calcularFatorialNumero(n) {
                if (n < 0) return "Fatorial não definido para números negativos.";
                if (n === 0 || n === 1) return 1;

                let fatorial = 1;
                for (let i = 2; i <= n; i++) {
                    fatorial *= i;
                }
                return fatorial;
            }

            // Usando For
            const fatorialFor = calcularFatorialNumero(numero);
            resultadoFor += `O fatorial de ${numero} é ${fatorialFor}.`;
            document.getElementById('resultadoFor').innerHTML = resultadoFor;

            // Usando While
            let fatorialWhile = 1;
            if (numero < 0) {
                fatorialWhile = "Fatorial não definido para números negativos.";
            } else if (numero === 0 || numero === 1) {
                fatorialWhile = 1;
            } else {
                let i = 2;
                while (i <= numero) {
                    fatorialWhile *= i;
                    i++;
                }
            }
            resultadoWhile += `O fatorial de ${numero} é ${fatorialWhile}.`;
            document.getElementById('resultadoWhile').innerHTML = resultadoWhile;

            // Usando Do-While
            let fatorialDoWhile = 1;
            if (numero < 0) {
                fatorialDoWhile = "Fatorial não definido para números negativos.";
            } else if (numero === 0 || numero === 1) {
                fatorialDoWhile = 1;
            } else {
                let j = 2;
                do {
                    fatorialDoWhile *= j;
                    j++;
                } while (j <= numero);
            }
            resultadoDoWhile += `O fatorial de ${numero} é ${fatorialDoWhile}.`;
            document.getElementById('resultadoDoWhile').innerHTML = resultadoDoWhile;
        }
    </script>
</body>
</html>