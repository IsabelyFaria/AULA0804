<!DOCTYPE html>
<html lang="pt br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>

<fieldset>
        <legend>Exercicio 1</legend>
            
            <form method="post" action="calcular.php">
                Informe o valor em dinheiro: <br/>
                <input type="text" name="valor" size="25" /> <br/>
                <br/>

                <input type="submit" name="info" value="Enviar" />
            </form>
    </fieldset>


    <?php
$valor = (int)readline("Digite um valor em dinheiro: ");

$notas = [100, 50, 20, 10, 5, 2, 1];
$resultado = [];

    foreach ($notas as $nota) 
    {
        $quantidade = intdiv($valor, $nota);
        $valor %= $nota;
        $resultado[$nota] = $quantidade;
    }

        echo "Notas necessárias:\n";
        foreach ($resultado as $nota => $quantidade) 
        {
            if ($quantidade > 0) 
             {
                echo "R$$nota,00: $quantidade\n";
             }
        }

?>
</body>
</html>