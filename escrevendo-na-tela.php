<?php

$clubes = fopen('zip://arquivos.zip#clubes-php.txt', 'r');
stream_copy_to_stream($clubes, STDOUT);