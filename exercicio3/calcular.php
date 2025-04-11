<?php

$base = rand(0, 100);
$tentativas = 0;
$numerosGerados = [];

do {
    $numero = rand(0, 100);
    $numerosGerados[] = $numero;
    $tentativas++;
} while ($numero !== $base);

echo "Número base: $base<br>";
echo "Quantidade de números gerados: $tentativas<br>";
echo "Números gerados: " . implode(", ", $numerosGerados);

?>