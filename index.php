<?php

require_once 'src/Pessoa.php';
require_once 'src/Endereco.php';
require_once 'src/Funcionario.php';
require_once 'src/Cliente.php';

$pessoa1 = new Funcionario(
    'Luiz',
    60,
    new Endereco(
        "RS",
        "Santa Cruz do Sul",
        "Rua Frederico Tietze",
        "48",
        "Santa Vitoria",
        "96840660"
    ),
    'Desenvolvedor',
    2100.00
);
$pessoa2 = new Funcionario(
    'Pedro',
    90,
    new Endereco(
        "RS",
        "Santa Cruz do Sul",
        "Rua Pereira Atriz",
        "310",
        "Sao João",
        "96840600"
    ),
    '',
    0
);
$pessoa3 = new Cliente(
    'Thais',
    20,
    new Endereco(
        "RS",
        "Santa Cruz do Sul",
        "Rua Armindo Pedroso",
        "64",
        "Avenida",
        "96840660"
    ),
    '02/09/1994',
    0
);
$pessoa4 = new Funcionario(
    'Lucas',
    53,
    new Endereco(
        "RS",
        "Santa Cruz do Sul",
        "Rua Legendario Peixoto",
        "492",
        "Centro",
        "96840660"
    ),
    '',
    0
);
$pessoa5 = new Funcionario(
    'Matheus',
    20,
    new Endereco(
        "RS",
        "Santa Cruz do Sul",
        "Rua Matriz Perfeita",
        "666",
        "Pedra Polida",
        "96840660"
    ),
    '',
    0
);
$pessoa6 = new Funcionario(
    'Henrique',
    23,
    new Endereco(
        "RS",
        "Santa Cruz do Sul",
        "Rua Lindouro Metraz",
        "532",
        "Lucario Mendes",
        "96840660"
    ),
    '',
    0
);

echo '<pre>';
var_dump($pessoa1);
var_dump($pessoa2);
var_dump($pessoa3);
var_dump($pessoa4);
var_dump($pessoa5);
var_dump($pessoa6);
var_dump(Pessoa::getPeopleCount());
echo '</pre>';