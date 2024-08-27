<?php

use Schmitz\Comercial\Dominio\Model\Cliente;
use Schmitz\Comercial\Dominio\Model\Endereco;
use Schmitz\Comercial\Dominio\Model\Funcionario;
use Schmitz\Comercial\Infra\Persistence\CriadorConexao;
use Schmitz\Comercial\Infra\Repository\PdoRepositoryCliente;
use Schmitz\Comercial\Infra\Repository\PdoRepositoryProduto;
use Schmitz\Comercial\Dominio\Model\Produto;

require_once('autoload.php');
//require_once('migrations.php');

//echo '<pre>';
echo CriadorConexao::criarTabela(
    'motos',
    [
        'ID',
        'nome VARCHAR(255)'
    ]
);

//echo CriadorConexao::dropSequenceIds('carros');
/*
$produto1 = new Produto(NULL, 'Tablet', 3000.00);
$produto2 = new Produto(NULL, 'Notebook', 4000.00);
$produto3 = new Produto(NULL, 'Mouse', 150.00);
$produto4 = new Produto(NULL, 'Teclado Mecânico', 450.00);
$produto5 = new Produto(NULL, 'Fone de ouvido', 500.00);
$produto6 = new Produto(NULL, 'Cadeira', 1200.00);
$produto7 = new Produto(NULL, 'Mouse Pad', 100.00);
$produto8 = new Produto(NULL, 'JoySticks', 200.00);
$produto10 = new Produto(NULL, 'Hub USB', 120.00);

*/
//$repositorio = new PdoRepositoryCliente(CriadorConexao::criarConexao());


/*

$repositorio->save($produto1);
$repositorio->save($produto2);
$repositorio->save($produto3);
$repositorio->save($produto4);
$repositorio->save($produto5);
$repositorio->save($produto6);
$repositorio->save($produto7);
$repositorio->save($produto8);
$repositorio->save($produto10);
*/
//$repositorio->allProdutos();
//echo '</pre>';


//$repositorio = new PdoRepositoryProduto(CriadorConexao::criarConexao());
//var_dump($repositorio);

//$repositorio->readProduto($produto1);



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
    NULL,
    'Luiz',
    new DateTime('02-09-1994'),
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
);/*
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
    NULL,
    'Thais',
    new Endereco(
        "RS",
        "Santa Cruz do Sul",
        "Rua Armindo Pedroso",
        "64",
        "Avenida",
        "96840660"
    ),
    new DateTime('1994-09-02'),
    2000.00,
);
$repositorio->save($pessoa3);

/*
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
echo $pessoa1->__toString();
echo $pessoa3->__toString();
echo $pessoa4->__toString();
echo $pessoa5->__toString();
echo $pessoa6->__toString();
$endereco1->uf = 'Niko';
echo $endereco1->uf;
echo '</pre>';*/