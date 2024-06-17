<?php

namespace Schmitz\Comercial\Model;

class Produto
{
    /**
     * Identificador do produto
     *
     * @var int|null
     */
    private ?int $idProduto;

    /**
     * Nome do produto
     *
     * @var string
     */
    private string $nomeProduto;

    /**
     * Preço do produto
     *
     * @var float
     */
    private float $precoProduto;

    /**
     * Controi um Produto
     *
     * @param int|null $idProduto Identificador do produto
     * @param string $nomeProduto Nome do produto
     * @param float $precoProduto Preço do produto
     * 
     * @return void
     * 
     * @author     Fabio Leal Schmitz 
     * @see       {@link https://github.com/fabiolealsc} 
     */
    public function __construct(?int $idProduto, string $nomeProduto, float $precoProduto)
    {
        $this->idProduto = $idProduto;
        $this->nomeProduto = $nomeProduto;
        $this->precoProduto = $precoProduto;
    }

    /**
     * Retorna o identificador do produto
     *
     * @return  int|null
     */
    public function getIdProduto(): ?string
    {
        return $this->idProduto;
    }

    /**
     * Muda o identificador do produto
     *
     * @param  int|null  $idProduto  Identificador do produto
     *
     * @return  self
     */
    public function setIdProduto($idProduto): self
    {
        $this->idProduto = $idProduto;

        return $this;
    }

    /**
     * Retorna o nome do produto
     *
     * @return  string
     */
    public function getNomeProduto(): string
    {
        return $this->nomeProduto;
    }

    /**
     * Muda o nome do produto
     *
     * @param  string  $nomeProduto  Nome do produto
     *
     * @return  self
     */
    public function setNomeProduto(string $nomeProduto): self
    {
        $this->nomeProduto = $nomeProduto;

        return $this;
    }

    /**
     * Retorna o preço do produto
     *
     * @return  float
     */
    public function getPrecoProduto(): string
    {
        return $this->precoProduto;
    }

    /**
     * Muda preço do produto
     *
     * @param  float  $precoProduto  Preço do produto
     *
     * @return  self
     */
    public function setPrecoProduto(float $precoProduto): self
    {
        $this->precoProduto = $precoProduto;

        return $this;
    }
}
