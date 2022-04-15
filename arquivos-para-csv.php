<?php

$meusClubes = file('lista-clubes.txt');
$outrosClubes = file('clubes-php.txt');

$clubesCSV = fopen('clubes.csv', 'w');

foreach($meusClubes as $clube){
    $linha = [trim($clube), 'Sim'];

    fputcsv($clubesCSV, $linha, ';');
}

foreach($outrosClubes as $outro){
    $linha = [trim($outro), 'Não'];

    fputcsv($clubesCSV, $linha, ';');
}

fclose($clubesCSV);