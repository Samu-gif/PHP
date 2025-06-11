<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <div class="fora">
        <form method="post" name="cliente" action="mostrar.php">
            <h2>Cadastro</h2>
            <div class="dentro">
                <label>Nome da Empresa</label>
                <input type="text" name="nome" maxlength="150" placeholder="Empresa" required>

                <label>Nome do Responsável</label>
                <input type="text" name="responsável" maxlength="15" placeholder="Nome" required>

                <label>CNPJ</label>
                <input type="text" name="cnpj" maxlength="15" placeholder="Nome" required>

                <label>Inscrição Estadual</label>
                <input type="text" name="estadual" maxlength="15" placeholder="Nome" required>

                <label>Rua</label>
                <input type="text" name="rua" maxlength="15" placeholder="Nome" required>

                <label>Número</label>
                <input type="text" name="numero" maxlength="15" placeholder="Nome" required>

                <label>Complemento</label>
                <input type="text" name="complemento" maxlength="15" placeholder="Nome" required>

                <label>Bairro</label>
                <input type="text" name="bairro" maxlength="15" placeholder="Nome" required>

                <label>Estado</label>
                <input type="text" name="estado" maxlength="15" placeholder="Nome" required>

                <label>Observações(OBS)</label>
                <input type="text" name="obs" maxlength="15" placeholder="Nome" required>

                <br>
                <input class="enviar" type="submit" name="enviar" value="Enviar">
            </div>
        </form>
    </div>
</body>
</html>