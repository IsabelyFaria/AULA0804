<?php
$valor = $_POST['valor'];
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