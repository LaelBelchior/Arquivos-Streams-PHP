<?php

$arquivosClubes = new SplFileObject('clubes.csv');

while(!$arquivosClubes -> eof()){
    $linha = $arquivosClubes -> fgetcsv(';');

    echo utf8_encode($linha[0]) . PHP_EOL;
}

$date = new DateTime();
$date -> setTimestamp($arquivosClubes -> getCTime());

echo $date -> format('d/m/Y') . PHP_EOL;
