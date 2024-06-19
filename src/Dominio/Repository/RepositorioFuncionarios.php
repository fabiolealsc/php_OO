<?php

namespace Dominio\Repository;

use Schmitz\Comercial\Dominio\Model\Funcionario;

interface RepositorioFuncionarios
{
    public function list(): array;
    public function save(Funcionario $funcionario): bool;
    public function read(Funcionario $funcionario): array;
    public function delete(Funcionario $funcionario): bool;
}
