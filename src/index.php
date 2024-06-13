<?php

require_once 'Pessoa.php';

$pessoa1 = new Pessoa('Luiz', 60);
$pessoa2 = new Pessoa('Pedro', 90);
$pessoa3 = new Pessoa('Thais', 20);
$pessoa4 = new Pessoa('Lucas', 53);
$pessoa5 = new Pessoa('Matheus', 20);
$pessoa6 = new Pessoa('Henrique', 23);

echo '<pre>';
    var_dump($pessoa1);
    var_dump($pessoa2);
    var_dump(Pessoa::getPeopleCount());
echo '</pre>';