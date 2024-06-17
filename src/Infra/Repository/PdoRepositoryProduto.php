<?php

namespace Schmitz\Comercial\Infra\Repository;

use Schmitz\Comercial\Model\Produto;
use Schmitz\Comercial\Dominio\Repository\RepositorioProdutos;
use PDO;

class PdoRepositoryProduto implements RepositorioProdutos
{
    /**
     * Variável que recebe a conexão
     *
     * @var PDO
     */
    private PDO $conexao;

    /**
     * Constroi a conexão
     *
     * @param PDO $conexao
     * 
     * @return void
     * 
     * @author     Fabio Leal Schmitz 
     * @see       {@link https://github.com/fabiolealsc} 
     */
    public function __construct(PDO $conexao)
    {
        $this->conexao = $conexao;
    }

    /**
     * Cria a query de consulta de todos os produtos,
     * usa a conexão construida para gerar a query,
     * retorna o resultado da query depois de passar pela
     * função hidratarListaProdutos
     *
     * @return array
     * 
     * @author     Fabio Leal Schmitz 
     * @see       {@link https://github.com/fabiolealsc} 
     */
    public function allProdutos(): array
    {
        $sqlConsulta = "SELECT * FROM produtos";
        $stmt = $this->conexao->query($sqlConsulta);

        return $this->hidratarListaProdutos($stmt);
    }

    /**
     * Salva ou altera um produto, se passar o id do produto ele é
     * alterado utilizando a função updateProduto() ,
     * mas se não passar o ID o produto é criado no banco pela
     * função createProduto
     *
     * @param Produto $produto
     * 
     * @return bool
     * 
     * @author     Fabio Leal Schmitz 
     * @see       {@link https://github.com/fabiolealsc} 
     */
    public function save(Produto $produto): bool
    {
        if ($produto->getIdProduto() == NULL) {
            return $this->createProduto($produto);
        }
        return $this->updateProduto($produto);
    }

    /**
     * Utiliza a conexão para criar um produto no banco,
     * utilizando os dados trazidos pelo parâmetro $produto.
     * Insere o ID que foi criado para o dado.
     *
     * @param Produto $produto
     * 
     * @return bool
     * 
     * @author     Fabio Leal Schmitz 
     * @see       {@link https://github.com/fabiolealsc} 
     */
    public function createProduto(Produto $produto): bool
    {
        $sqlInsert = "INSERT INTO produtos (nomeProduto, precoProduto) VALUES (:nome, :preco);";
        $stmt = $this->conexao->prepare($sqlInsert);
        $stmt->bindValue(':nome', $produto->getNomeProduto(), PDO::PARAM_STR);
        $stmt->bindValue(':preco', $produto->getPrecoProduto(), PDO::PARAM_STR);
        $sucesso = $stmt->execute();
        if ($sucesso) {
            $produto->setIdProduto($this->conexao->lastInsertId());
        }
        return $sucesso;
    }

    /**
     * Busca um produto no banco, utilizando o ID do objeto
     * enviado como parâmetro.
     *
     * @param Produto $produto
     * 
     * @return array
     * 
     * @author     Fabio Leal Schmitz 
     * @see       {@link https://github.com/fabiolealsc} 
     */
    public function readProduto(Produto $produto): array
    {
        $sqlConsulta = "SELECT * FROM produtos WHERE ID = :id";
        $stmt = $this->conexao->prepare($sqlConsulta);
        $stmt->bindValue(':id', $produto->getIdProduto(), PDO::PARAM_INT);
        $stmt->execute();

        return $this->hidratarListaProdutos($stmt);
    }

    /**
     * Atualiza um Produto no banco, esse produto
     * é o produto que for passado como parâmetro.
     *
     * @param Produto $produto
     * 
     * @return bool
     * 
     * @author     Fabio Leal Schmitz 
     * @see       {@link https://github.com/fabiolealsc} 
     */
    public function updateProduto(Produto $produto): bool
    {
        $sqlUpdate = "UPDATE produtos SET nomeProduto = :nome, precoProduto = :preco WHERE ID = :id;";
        $stmt = $this->conexao->prepare($sqlUpdate);
        $stmt->bindValue(':nome', $produto->getNomeProduto(), PDO::PARAM_STR);
        $stmt->bindValue(':preco', $produto->getPrecoProduto(), PDO::PARAM_STR);
        $stmt->bindValue(':id', $produto->getIdProduto(), PDO::PARAM_INT);
        
        return $stmt->execute();
    }

    /**
     * Deleta um produto no banco, utilizando o ID passado como
     * paramêtro.
     *
     * @param Produto $produto
     * 
     * @return bool
     * 
     * @author     Fabio Leal Schmitz 
     * @see       {@link https://github.com/fabiolealsc} 
     */
    public function deleteProduto(Produto $produto): bool
    {
        $stmt = $this->conexao->prepare('DELETE FROM produtos WHERE ID = ?;');
        $stmt->bindValue(1, $produto->getIdProduto(), PDO::PARAM_INT);

        return $stmt->execute();
    }

    /**
     * Popula as variáveis do objeto Produto com os dados do parâmetro,
     * e também dá echo em uma tabela com o produto.
     *
     * @param \PDOStatement $stat
     * 
     * @return array
     * 
     * @author     Fabio Leal Schmitz 
     * @see       {@link https://github.com/fabiolealsc} 
     */
    public function hidratarListaProdutos(\PDOStatement $stat): array
    {
        $listaDadosProdutos = $stat->fetchAll(PDO::FETCH_ASSOC);
        $listaProdutos = [];

        echo "<table border='1'><thead><th>ID</th><th>Nome do Produto</th><th>Preço do Produto</th></thead><tbody>";
        foreach ($listaDadosProdutos as $dadosProduto) {
            $listaProduto[] = new Produto(
                $dadosProduto['ID'],
                $dadosProduto['nomeProduto'],
                $dadosProduto['precoProduto']
            );
            echo "
                <tr>
                    <td width='20'>
                        {$dadosProduto['ID']}
                    </td>
                    <td width='150'>
                        {$dadosProduto['nomeProduto']}
                    </td>
                    <td align='right'>
                        R$ " . number_format($dadosProduto['precoProduto'], 2, ',', '.') . "
                    </td>
                </tr>
            ";
        }
        echo "</tbody></table>";

        return $listaProdutos;
    }
}