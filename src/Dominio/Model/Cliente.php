<?php

namespace Schmitz\Comercial\Dominio\Model;

use DateTimeInterface;

/**
 * Classe que representa um Cliente extend Pessoa
 */
class Cliente extends Pessoa
{
    /**
     * Data de nascimento do cliente
     *
     * @var DateTimeInterface
     */
    protected DateTimeInterface $dataNascimento;

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
     * @param DateTimeInterface $dataNascimento Data de nascimento do cliente
     * @param float $renda Renda do cliente
     * 
     * @return void
     * 
     * @author     Fabio Leal Schmitz 
     * @see       {@link https://github.com/fabiolealsc} 
     */
    public function __construct(?int $id, string $nome, Endereco $endereco, DateTimeInterface $dataNascimento, float $renda)
    {
        parent::__construct($id, $nome, $dataNascimento, $endereco);
        //$this->dataNascimento = $dataNascimento;
        $this->renda = $renda;
    }

    /**
     * Retorna o valor da data de nascimento do cliente
     *
     * @return DateTimeInterface
     * 
     * @author     Fabio Leal Schmitz 
     * @see       {@link https://github.com/fabiolealsc} 
     */
    public function getDataNascimento(): DateTimeInterface
    {
        return $this->dataNascimento;
    }

    /**
     * Muda o valor da data de nascimento do cliente
     *
     * @param DateTimeInterface $dataNascimento
     * 
     * @return self
     * 
     * @author     Fabio Leal Schmitz 
     * @see       {@link https://github.com/fabiolealsc} 
     */
    public function setDataNascimento(DateTimeInterface $dataNascimento): self
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

    /**
     * Retorna informações do Cliente
     *
     * @return string
     * 
     * @author     Fabio Leal Schmitz 
     * @see       {@link https://github.com/fabiolealsc} 
     */
    public function __toString(): string
    {
        return
            "<p>Nome: " . $this->nome .
        "<br>Idade: " . $this->idade() . " anos" .
            "<br>Endereço : " . $this->endereco->getNomeLogradouro() .  ", " .
            $this->endereco->getNumero() . " - " .
            $this->endereco->getBairro() .
        "<br>Data de Nascimento: " . $this->dataNascimento->format('Y-m-d') .
            "<br>Renda: R$" . $this->renda .
            "</p>";
    }
}