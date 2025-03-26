<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem de Palavras</title>
</head>
<body>
    <h1>Contagem de Palavras em uma Frase</h1>
    <form id="contagemForm">
        <label for="frase">Digite uma frase:</label>
        <input type="text" id="frase" name="frase" required>
        <button type="button" onclick="contarPalavras()">Contar Palavras</button>
    </form>

    <h2>Resultados:</h2>
    <div id="resultadoFor"></div>
    <div id="resultadoWhile"></div>
    <div id="resultadoDoWhile"></div>

    <script>
        function contarPalavras() {
            const frase = document.getElementById('frase').value.trim(); // Remove espaços extras no início e no fim
            let resultadoFor = "<h3>Usando For:</h3>";
            let resultadoWhile = "<h3>Usando While:</h3>";
            let resultadoDoWhile = "<h3>Usando Do-While:</h3>";

            // Função para contar palavras
            function contarPalavrasFrase(texto) {
                if (texto === "") return 0; // Se a frase estiver vazia, retorna 0
                let contador = 0;
                let emPalavra = false;

                // Percorre cada caractere da frase
                for (let i = 0; i < texto.length; i++) {
                    if (texto[i] !== " ") {
                        if (!emPalavra) {
                            contador++;
                            emPalavra = true;
                        }
                    } else {
                        emPalavra = false;
                    }
                }
                return contador;
            }

            // Usando For
            const palavrasFor = contarPalavrasFrase(frase);
            resultadoFor += `A frase contém ${palavrasFor} palavra(s).`;
            document.getElementById('resultadoFor').innerHTML = resultadoFor;

            // Usando While
            let palavrasWhile = 0;
            let emPalavraWhile = false;
            let j = 0;
            while (j < frase.length) {
                if (frase[j] !== " ") {
                    if (!emPalavraWhile) {
                        palavrasWhile++;
                        emPalavraWhile = true;
                    }
                } else {
                    emPalavraWhile = false;
                }
                j++;
            }
            resultadoWhile += `A frase contém ${palavrasWhile} palavra(s).`;
            document.getElementById('resultadoWhile').innerHTML = resultadoWhile;

            // Usando Do-While
            let palavrasDoWhile = 0;
            let emPalavraDoWhile = false;
            let k = 0;
            do {
                if (frase[k] !== " ") {
                    if (!emPalavraDoWhile) {
                        palavrasDoWhile++;
                        emPalavraDoWhile = true;
                    }
                } else {
                    emPalavraDoWhile = false;
                }
                k++;
            } while (k < frase.length);
            resultadoDoWhile += `A frase contém ${palavrasDoWhile} palavra(s).`;
            document.getElementById('resultadoDoWhile').innerHTML = resultadoDoWhile;
        }
    </script>
</body>
</html>