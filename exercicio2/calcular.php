<?php

$numeroUsuario = (int)readline("Digite um número: ");
$contador = 0;

while ($numeroUsuario > 0) {
    $numeroAleatorio = rand(1, 10);
    $numeroUsuario -= $numeroAleatorio;
    $contador++;
}

echo "O processo foi executado $contador vezes até o valor ser igual ou menor que zero.\n";


?>