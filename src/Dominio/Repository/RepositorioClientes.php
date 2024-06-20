<?php

namespace Schmitz\Comercial\Dominio\Repository;

use Schmitz\Comercial\Dominio\Model\Cliente;

interface RepositorioClientes
{
    public function list(): array;
    public function save(Cliente $cliente): bool;
    public function read(Cliente $cliente): array;
    public function delete(Cliente $cliente): bool;
}
