<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de Senha</title>
</head>
<body>
    <h1>Validação de Senha</h1>
    <form id="senhaForm">
        <label for="senha">Digite uma senha (mínimo de 8 caracteres, incluindo números e letras):</label>
        <input type="password" id="senha" name="senha" required>
        <button type="button" onclick="validarSenha()">Validar Senha</button>
    </form>

    <h2>Resultados:</h2>
    <div id="resultadoFor"></div>
    <div id="resultadoWhile"></div>
    <div id="resultadoDoWhile"></div>

    <script>
        function validarSenha() {
            const senha = document.getElementById('senha').value;
            let resultadoFor = "<h3>Usando For:</h3>";
            let resultadoWhile = "<h3>Usando While:</h3>";
            let resultadoDoWhile = "<h3>Usando Do-While:</h3>";

            // Função para verificar se a senha é válida
            function senhaValida(senha) {
                if (senha.length < 8) return false; // Verifica o comprimento mínimo
                let temNumero = false;
                let temLetra = false;

                // Verifica se a senha contém números e letras
                for (let i = 0; i < senha.length; i++) {
                    if (!isNaN(senha[i])) {
                        temNumero = true;
                    } else if (senha[i].toLowerCase() !== senha[i].toUpperCase()) {
                        temLetra = true;
                    }
                }
                return temNumero && temLetra;
            }

            // Usando For
            if (senhaValida(senha)) {
                resultadoFor += "Senha válida!";
            } else {
                resultadoFor += "Senha inválida. A senha deve ter no mínimo 8 caracteres, incluindo números e letras.";
            }
            document.getElementById('resultadoFor').innerHTML = resultadoFor;

            // Usando While
            let validaWhile = senhaValida(senha);
            if (validaWhile) {
                resultadoWhile += "Senha válida!";
            } else {
                resultadoWhile += "Senha inválida. A senha deve ter no mínimo 8 caracteres, incluindo números e letras.";
            }
            document.getElementById('resultadoWhile').innerHTML = resultadoWhile;

            // Usando Do-While
            let validaDoWhile = senhaValida(senha);
            do {
                if (validaDoWhile) {
                    resultadoDoWhile += "Senha válida!";
                } else {
                    resultadoDoWhile += "Senha inválida. A senha deve ter no mínimo 8 caracteres, incluindo números e letras.";
                }
            } while (false); // O do-while é executado apenas uma vez
            document.getElementById('resultadoDoWhile').innerHTML = resultadoDoWhile;
        }
    </script>
</body>
</html>