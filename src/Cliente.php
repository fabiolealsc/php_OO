<?php

/**
 * Classe que representa um Cliente extend Pessoa
 */
class Cliente extends Pessoa
{
    /**
     * Data de nascimento do cliente
     *
     * @var string
     */
    private string $dataNascimento;

    /**
     * Renda do cliente
     *
     * @var float
     */
    private float $renda;

    /**
     * Constroi um Cliente
     *
     * @param  string $nome Nome da Pessoa
     * @param  integer $idade Idade da Pessoa
     * @param  Endereco $endereco Endereço da Pessoa
     * @param string $dataNascimento Data de nascimento do cliente
     * @param float $renda Renda do cliente
     * 
     * @return void
     * 
     * @author     Fabio Leal Schmitz 
     * @see       {@link https://github.com/fabiolealsc} 
     */
    public function __construct(string $nome, int $idade, Endereco $endereco, string $dataNascimento, float $renda)
    {
        parent::__construct($nome, $idade, $endereco);
        $this->dataNascimento = $dataNascimento;
        $this->renda = $renda;
    }

    /**
     * Retorna o valor da data de nascimento do cliente
     *
     * @return string
     * 
     * @author     Fabio Leal Schmitz 
     * @see       {@link https://github.com/fabiolealsc} 
     */
    public function getDataNascimento(): string
    {
        return $this->dataNascimento;
    }

    /**
     * Muda o valor da data de nascimento do cliente
     *
     * @param string $dataNascimento
     * 
     * @return self
     * 
     * @author     Fabio Leal Schmitz 
     * @see       {@link https://github.com/fabiolealsc} 
     */
    public function setDataNascimento(string $dataNascimento): self
    {
        $this->dataNascimento = $dataNascimento;

        return $this;
    }

    /**
     * Retorna o valor da renda do cliente
     *
     * @return float
     * 
     * @author     Fabio Leal Schmitz 
     * @see       {@link https://github.com/fabiolealsc} 
     */
    public function getRenda(): float
    {
        return $this->renda;
    }

    /**
     * Muda o valor da renda do cliente
     *
     * @param float $renda
     * 
     * @return self
     * 
     * @author     Fabio Leal Schmitz 
     * @see       {@link https://github.com/fabiolealsc} 
     */
    public function setRenda(float $renda): self
    {
        $this->renda = $renda;

        return $this;
    }

    /**
     * Muda o valor do desconto
     *
     * @return self
     * 
     * @author     Fabio Leal Schmitz 
     * @see       {@link https://github.com/fabiolealsc} 
     */
    public function setDesconto(): self
    {
        $this->desconto = 0.05;

        return $this;
    }
}