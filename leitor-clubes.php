<?php

$arquivo = fopen('lista-clubes.txt', 'r');

$tamanhoArquivo =  filesize('lista-clubes.txt');

echo $tamanhoArquivo . PHP_EOL;

$clubes = fread($arquivo, $tamanhoArquivo);

echo $clubes;

fclose($arquivo);