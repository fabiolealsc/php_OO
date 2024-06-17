<?php

use Schmitz\Comercial\Infra\Persistence\CriadorConexao;
use Schmitz\Comercial\Infra\Repository\PdoRepositoryProduto;
use Schmitz\Comercial\Model\Produto;

require_once('autoload.php');


echo '<pre>';

//echo CriadorConexao::dropSequenceIds('produtos');
/*
$produto1 = new Produto(NULL, 'Tablet', 3000.00);
$produto2 = new Produto(NULL, 'Notebook', 4000.00);
$produto3 = new Produto(NULL, 'Mouse', 150.00);
$produto4 = new Produto(NULL, 'Teclado Mecânico', 450.00);
$produto5 = new Produto(NULL, 'Fone de ouvido', 500.00);
$produto6 = new Produto(NULL, 'Cadeira', 1200.00);
$produto7 = new Produto(NULL, 'Mouse Pad', 100.00);
$produto8 = new Produto(NULL, 'JoySticks', 200.00);
$produto9 = new Produto(NULL, 'Monitor', 5000.00);

*/ $repositorio = new PdoRepositoryProduto(CriadorConexao::criarConexao());/*

$repositorio->save($produto1);
$repositorio->save($produto2);
$repositorio->save($produto3);
$repositorio->save($produto4);
$repositorio->save($produto5);
$repositorio->save($produto6);
$repositorio->save($produto7);
$repositorio->save($produto8);
$repositorio->save($produto9);
*/
$repositorio->allProdutos();
echo '</pre>';


//$repositorio = new PdoRepositoryProduto(CriadorConexao::criarConexao());
//var_dump($repositorio);

//$repositorio->readProduto($produto1);

/*echo CriadorConexao::criarTabela(
    'produtos',
    [
        'ID INTEGER PRIMARY KEY AUTOINCREMENT',
        'nomeProduto VARCHAR(255)',
        'precoProduto DECIMAL(10, 2)'
    ]
);

//echo CriadorConexao::deleteTabela('produtos');

/*use Schmitz\Comercial\Model\Endereco;
use Schmitz\Comercial\Model\Cliente;
use Schmitz\Comercial\Model\Funcionario;

$endereco1 = new Endereco(
    "RS",
    "Santa Cruz do Sul",
    "Rua Frederico Tietze",
    "48",
    "Santa Vitoria",
    "96840660"
);

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
    'DFF',
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
$pessoa1->setSenha('12345');

$pessoa1->login("Luiz", '12345');
echo '<pre>';
//echo $pessoa1->salario;
echo $pessoa2->__toString();
echo $pessoa3->__toString();
echo $pessoa4->__toString();
echo $pessoa5->__toString();
echo $pessoa6->__toString();
$endereco1->uf = 'Niko';
echo $endereco1->uf;
echo '</pre>';*/