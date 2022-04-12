<?php

$clube = 'Ajax';

file_put_contents('clubes-php.txt', $clube, FILE_APPEND);

/*Para criar um arquivo por aqui, executar a função 
fopen('nome-arquivo' , 'a') e para adicionar fwrite('nome-arquivo', 'nome-variavel-conteudo')*/

