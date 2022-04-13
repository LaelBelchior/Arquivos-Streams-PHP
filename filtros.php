<?php

$arquivosClubes = fopen('lista-clubes.txt', 'r');

stream_filter_append($arquivosClubes, 'string.toupper');

echo fread($arquivosClubes, filesize('lista-clubes.txt'));