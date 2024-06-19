<?php

namespace Schmitz\Comercial\Infra\Persistence;

use PDO;
use PDOException;

/**
 * Classe que cria uma conexão com banco de dados
 * 
 * @method PDO criarConexao() Retorna uma conexao com o banco de dados ou dispara um erro.
 * @method void criarTabela(string $nomeTabela, array $params) Cria uma tabela com o nome e as colunas passadas como parâmetro.
 * @method bool deleteTabela(string $nomeTabela) Deleta uma tabela pelo seu nome.
 */
class CriadorConexao
{

    /**
     * Cria uma conexão SQLITE
     *
     * @return PDO
     * 
     * @author     Fabio Leal Schmitz 
     * @see       {@link https://github.com/fabiolealsc} 
     */
    public static function criarConexao(): PDO
    {
        try {
            $pdo = new PDO('sqlite:database.sqlite');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $st = 'PRAGMA foreign_keys=on';
            $pdo->query($st);
            return $pdo;
        } catch (PDOException $exception) {
            echo 'ERROR: ' . $exception->getMessage();
        }
    }

    /**
     * Cria uma tabela no banco de dados usando $nomeTabela como nome e
     * usando $params como nome das colunas, retorna um booleano com o resultado.
     *
     * @param string $nomeTabela Nome da tabela
     * @param array $params Nomes das colunas
     * 
     * @return bool
     * 
     * @author     Fabio Leal Schmitz 
     * @see       {@link https://github.com/fabiolealsc} 
     */
    public static function criarTabela(string $nomeTabela, array $params): bool
    {
        $pdo = new PDO('sqlite:database.sqlite');

        // Construir a string de colunas corretamente
        $columns = implode(', ', $params);

        // Montar e executar a query SQL para criar a tabela
        $query = "CREATE TABLE IF NOT EXISTS $nomeTabela ($columns)";
        //echo $query;
        return $pdo->query($query);
    }

    /**
     * Deleta uma tabela pelo seu nome e retorna o resultado.
     *
     * @param string $nomeTabela Nome da tabela
     * 
     * @return bool
     * 
     * @author     Fabio Leal Schmitz 
     * @see       {@link https://github.com/fabiolealsc} 
     */
    public static function deleteTabela(string $nomeTabela): bool
    {
        $pdo = new PDO('sqlite:database.sqlite');

        $query = "DROP TABLE IF EXISTS $nomeTabela";
        return $pdo->prepare($query)->execute();
    }

    /**
     * Método que destroi as tabelas e zera o sequence ids dos ids 
     * das tabelas.
     *
     * @param string $nomeTabela
     * 
     * @return bool
     * 
     * @author     Fabio Leal Schmitz 
     * @see       {@link https://github.com/fabiolealsc} 
     */
    public static function dropSequenceIds(string $nomeTabela): bool
    {
        $pdo = new PDO('sqlite:database.sqlite');

        $query = "UPDATE sqlite_sequence SET seq = 0 WHERE name = '" . $nomeTabela . "'";
        $pdo->prepare($query)->execute();
        $query = "DROP TABLE '" . $nomeTabela . "'";
        return $pdo->prepare($query)->execute();
    }

    
}