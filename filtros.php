<?php

require 'meuFiltro.php';

$arquivosClubes = fopen('lista-clubes.txt', 'r');

stream_filter_register('alura.manchester', MeuFiltro::class);
stream_filter_append($arquivosClubes, 'alura.manchester');

echo fread($arquivosClubes, filesize('lista-clubes.txt'));