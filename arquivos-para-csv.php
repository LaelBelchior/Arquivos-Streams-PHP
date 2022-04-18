<?php

$meusClubes = file('lista-clubes.txt');
$outrosClubes = file('clubes-php.txt');

$clubesCSV = fopen('clubes.csv', 'w');

foreach($meusClubes as $clube){
    $linha = [trim(utf8_decode($clube)), 'Sim'];

    fputcsv($clubesCSV, $linha, ';');
}

foreach($outrosClubes as $outro){
    $linha = [trim(utf8_decode($outro)), 'Não'];

    fputcsv($clubesCSV, $linha, ';');
}

fclose($clubesCSV);