<?php

namespace Schmitz\Comercial\Dominio\Repository;

use Schmitz\Comercial\Dominio\Model\Produto;

/**
 * Interface que define os métodos de PDO de produtos.
 */
interface RepositorioProdutos
{
    public function list(): array;
    public function save(Produto $produto): bool;
    public function createProduto(Produto $produto): bool;
    public function readProduto(Produto $produto): array;
    public function updateProduto(Produto $produto): bool;
    public function deleteProduto(Produto $produto): bool;
}