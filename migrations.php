<?php

//use Schmitz\Comercial\Infra\Persistence\CriadorConexao;


//echo CriadorConexao::deleteTabela('enderecos');
//echo CriadorConexao::deleteTabela('clientes');
//echo CriadorConexao::deleteTabela('funcionarios');


/*echo CriadorConexao::criarTabela(
    'enderecos',
    [
        'ID INTEGER PRIMARY KEY AUTOINCREMENT',
        'uf VARCHAR(2)',
        'cidade VARCHAR(100)',
        'nomeLogradouro VARCHAR(255)',
        'numero VARCHAR(20)',
        'bairro VARCHAR(100)',
        'cep VARCHAR(10)'
    ]
);
*/
/*
echo CriadorConexao::criarTabela(
    'clientes',
    [
        'ID INTEGER PRIMARY KEY AUTOINCREMENT',
        'nome VARCHAR(100)',
        'dataNascimento DATE',
        'renda DECIMAL(10,2)'
    ]
);

echo CriadorConexao::criarTabela(
    'funcionarios',
    [
        'ID INTEGER PRIMARY KEY AUTOINCREMENT',
        'nome VARCHAR(100)',
        'dataNascimento DATE',
        'cargo VARCHAR(75)',
        'salario DECIMAL(10,2)'
    ]
);

/*

echo CriadorConexao::criarTabela(
    'produtos',
    [
        'ID INTEGER PRIMARY KEY AUTOINCREMENT',
        'nomeProduto VARCHAR(255)',
        'precoProduto DECIMAL(10, 2)'
    ]
);

echo CriadorConexao::deleteTabela('produtos');


*/