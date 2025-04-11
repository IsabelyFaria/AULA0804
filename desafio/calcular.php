<?php
if (!isset($_POST['sorte'])) {

    $al = rand(1, 100);
    $tentativas = 0;
} else {

    $al = $_POST['sorte'];
    $tentativas = $_POST['tentativas'] + 1;
    $numero = $_POST['numero'];

    if ($numero == $al) {
        echo "Parabéns! Você acertou o número $al em $tentativas tentativas.";
        exit;
    } elseif ($numero < $al) {
        echo "O número é maior que $numero.<br>";
    } else {
        echo "O número é menor que $numero.<br>";
    }
}
?>