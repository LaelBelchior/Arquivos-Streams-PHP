<?php

$novoClube = trim(fgets(STDIN));

file_put_contents('clubes-php.txt', "\n$novoClube", FILE_APPEND);

