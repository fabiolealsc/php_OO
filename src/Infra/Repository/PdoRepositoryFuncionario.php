<?php

namespace Schmitz\Comercial\Infra\Repository;

use Dominio\Repository\RepositorioFuncionarios;
use PDO;
use Schmitz\Comercial\Dominio\Model\Funcionario;

class PdoRepositoryFuncionario implements RepositorioFuncionarios
{
    private PDO $conexao;

    public function __construct(PDO $conexao)
    {
        $this->conexao = $conexao;
    }

    public function list(): array
    {
        $query = "SELECT * FROM funcionarios";
        $stmt = $this->conexao->query($query);

        return $this->hidratarLista($stmt);
    }

    public function save(Funcionario $funcionario): bool
    {
        if ($funcionario->id === NULL) {
            return $this->create($funcionario);
        }
        return $this->update($funcionario);
    }
    private function create(Funcionario $funcionario): bool
    {
        $query = "INSERT INTO funcionarios (nome, dataNascimento, renda) VALUES (:nome, :dataNascimento, :renda);";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':nome', $funcionario->nome, PDO::PARAM_STR);
        $stmt->bindValue(':dataNascimento', $funcionario->getDataNascimento(), PDO::PARAM_STR);
        $stmt->bindValue(':renda', $funcionario->renda, PDO::PARAM_STR);
        $sucesso = $stmt->execute();

        if ($sucesso) {
            $funcionario->id = $this->conexao->lastInsertId();
        }

        return $sucesso;
    }

    private function update(Funcionario $funcionario): bool
    {
        $query = "UPDATE funcionarios SET nome = :nome, dataNascimento = :dataNascimento, renda = :renda WHERE id = :id;";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':nome', $funcionario->nome, PDO::PARAM_STR);
        $stmt->bindValue(':dataNascimento', $funcionario->getDataNascimento(), PDO::PARAM_STR);
        $stmt->bindValue(':renda', $funcionario->renda, PDO::PARAM_STR);

        return $stmt->execute();
    }

    public function read(Funcionario $funcionario): array
    {
        $query = "SELECT * FROM funcionarios WHERE id = :id;";

        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id', $funcionario->id, PDO::PARAM_INT);
        $stmt->execute();

        return $this->hidratarLista($stmt);
    }
    public function delete(Funcionario $funcionario): bool
    {
        $stmt = $this->conexao->prepare("DELETE FROM funcionarios WHERE id = :id;");
        $stmt->bindValue("id", $funcionario->id, PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function hidratarLista(\PDOStatement $stat)
    {
        $listaDados = $stat->fetchAll(PDO::FETCH_ASSOC);
        $lista = [];

        echo "<table border='1'><thead><th>ID</th><th>Nome</th><th>Idade</th><th>Data de Nascimento</th><th>Cargo</th><th>Salario</th></thead><tbody>";
        foreach ($listaDados as $dados) {
            $lista[] = new Funcionario(
                $dados['ID'],
                $dados['nome'],
                $dados['dataNascimento'],
                $dados['endereco'],
                $dados['cargo'],
                $dados['salario']
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
                    <td width='80'>
                        {$dados['cargo']}
                    </td>
                    <td align='right'>
                        R$ " . number_format($dados['salario'], 2, ',', '.') . "
                    </td>
                </tr>
            ";
        }
        echo "</tbody></table>";

        return $lista;
    }
}
