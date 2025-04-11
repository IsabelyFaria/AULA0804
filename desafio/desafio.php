# F.U.P. onde:
# O usuário deve digitar o "número da sorte";
# O sistema gera um número aleatório;
# O usuário continuará digitando até acertar;
# O sistema informa se o número é maior ou menor a cada tentativa;
# Ao acertar, o programa mostra:
# O número sorteado;
# Quantas tentativas foram feitas.


<doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
</head>
<body>
    <h1>Desafio</h1>
    <form action="calcular.php" method="post">
        <label for="numero">Digite um número entre 1 e 100:</label>
        <input type="number" name="numero" id="numero" required>
        <input type="hidden" name="sorte" value="<?php echo isset($al) ? $al : ''; ?>">
        <input type="hidden" name="tentativas" value="<?php echo isset($tentativas) ? $tentativas : 0; ?>">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
 