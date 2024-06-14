<?php

/**
 * Representa um funcionario que extende da classe pessoa
 * 
 * @author Fabio Leal Schmitz
 * 
 * @property string $cargo  O cargo do funcionario
 * @property string $cargo  Salario do funcionario
 * 
 * @method string getCargo() Retorna o valor de cargo do funcionario
 * @method self setCargo(string $cargo) Muda o valor do cargo do funcionario
 * @method string getSalario() Retorna o valor do salario do funcionario
 * @method self setSalario(float $salario) Muda o valor do salario do funcionario
 * 
 * @extends Pessoa
 */
class Funcionario extends Pessoa
{
    /**
     * O cargo do funcionario
     *
     * @access private
     * @var string
     */
    private string $cargo;

    /**
     * Salario do funcionario
     *
     * @access private
     * @var float
     */
    private float $salario;

    /**
     * Constroi um funcionario
     *
     * @param string $nome Nome da pessoa
     * @param string $idade Idade da pessoa
     * @param Endereco $endereco Endereço da pessoa
     * @param string $cargo O cargo do funcionario
     * @param float $salario Salario do funcionario
     * 
     * @access public
     * @return void
     */
    public function __construct(
        string $nome,
        int $idade,
        Endereco $endereco,
        string $cargo,
        float $salario
    ) {
        parent::__construct(
            $nome,
            $idade,
            $endereco
        );
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    /**
     * Retorna o valor de cargo do funcionario
     * @access public
     * @return string
     */
    public function getCargo(): string
    {
        return $this->cargo;
    }

    /**
     * Muda o valor do cargo do funcionario
     * 
     * @param string $cargo 
     * @access public
     * @return  self
     */
    public function setCargo(string $cargo): self
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Retorna o valor do salario do funcionario
     * 
     * @access public
     * @return float $salario
     */
    public function getSalario(): float
    {
        return $this->salario;
    }

    /**
     * Muda o valor do salario do funcionario
     *
     * @param float $salario
     * @access public
     * @return self
     */
    public function setSalario(float $salario): self
    {
        $this->salario = $salario;

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
        $this->desconto = 0.10;

        return $this;
    }

    /**
     * Retorna informações do funcionario
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
            "<br>Idade: " . $this->idade . " anos" .
            "<br>Endereço : " . $this->endereco->getNomeLogradouro() . ", " . $this->endereco->getNumero() . " - " . $this->endereco->getBairro() .
            "<br>Cargo: " . $this->cargo .
            "<br>Salário: R$" . $this->salario .
            "</br>";
    }
}