<?php

namespace Schmitz\Comercial\Infra\Repository;

use Schmitz\Comercial\Dominio\Repository\RepositorioClientes;
use PDO;
use Schmitz\Comercial\Dominio\Model\Cliente;

class PdoRepositoryCliente implements RepositorioClientes
{
    private PDO $conexao;

    public function __construct(PDO $conexao)
    {
        $this->conexao = $conexao;
    }

    public function list(): array
    {
        $query = "SELECT * FROM clientes";
        $stmt = $this->conexao->query($query);

        return $this->hidratarLista($stmt);
    }

    public function save(Cliente $cliente): bool
    {
        if ($cliente->id === NULL) {
            return $this->create($cliente);
        }
        return $this->update($cliente);
    }
    private function create(Cliente $cliente): bool
    {
        $query = "INSERT INTO clientes (nome, dataNascimento, renda) VALUES (:nome, :dataNascimento, :renda);";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':nome', $cliente->nome, PDO::PARAM_STR);
        $stmt->bindValue(':dataNascimento', $cliente->getDataNascimento()->format('Y-m-d'), PDO::PARAM_STR);
        $stmt->bindValue(':renda', $cliente->renda, PDO::PARAM_STR);
        $sucesso = $stmt->execute();

        if ($sucesso) {
            $cliente->id = $this->conexao->lastInsertId();
        }

        return $sucesso;
    }

    public function update(Cliente $cliente): bool
    {
        $query = "UPDATE clientes SET nome = :nome, dataNascimento = :dataNascimento, renda = :renda WHERE id = :id;";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':nome', $cliente->nome, PDO::PARAM_STR);
        $stmt->bindValue(':dataNascimento', $cliente->getDataNascimento()->format('Y-m-d'));
        $stmt->bindValue(':renda', $cliente->renda, PDO::PARAM_STR);

        return $stmt->execute();
    }

    public function read(Cliente $cliente): array
    {
        $query = "SELECT * FROM clientes WHERE id = :id;";

        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id', $cliente->id, PDO::PARAM_INT);
        $stmt->execute();

        return $this->hidratarLista($stmt);
    }
    public function delete(Cliente $cliente): bool
    {
        $stmt = $this->conexao->prepare("DELETE FROM clientes WHERE id = :id;");
        $stmt->bindValue("id", $cliente->id, PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function hidratarLista(\PDOStatement $stat)
    {
        $listaDados = $stat->fetchAll(PDO::FETCH_ASSOC);
        $lista = [];

        echo "<table border='1'><thead><th>ID</th><th>Nome</th><th>Idade</th><th>Data de Nascimento</th><th>Renda</th></thead><tbody>";
        foreach ($listaDados as $dados) {
            $lista[] = new Cliente(
                $dados['ID'],
                $dados['nome'],
                $dados['endereco'],
                $dados['dataNascimento'],
                $dados['renda']
            );
            echo "
                <tr>
                    <td width='20'>
                        {$dados['ID']}
                    </td>
                    <td width='150'>
                        {$dados['nome']}
                    </td>
                    <td width='20'>
                        {$dados['idade']}
                    </td>
                    <td width='80'>
                        {$dados['dataNascimento']}
                    </td>
                    <td align='right'>
                        R$ " . number_format($dados['renda'], 2, ',', '.') . "
                    </td>
                </tr>
            ";
        }
        echo "</tbody></table>";

        return $lista;
    }
}
