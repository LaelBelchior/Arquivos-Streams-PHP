<?php

$arquivo = fopen('lista-clubes.txt', 'r');

while (!feof($arquivo)) {
    $curso = fgets($arquivo);

    echo $curso . PHP_EOL;
}

fclose($arquivo);