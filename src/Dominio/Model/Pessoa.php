<?php

namespace Schmitz\Comercial\Dominio\Model;

use DateTimeInterface;

require_once('autoload.php');


/**
 * Representa uma pessoa
 * @author Fabio Leal Schmitz
 * 
 * @property string $nome Nome da Pessoa
 * @property DateTimeInterface $dataNascimento dataNascimento da Pessoa
 * @property Endereco $endereco Endereço da Pessoa
 * @property int $peopleCount Contagem de objetos da classe instanciados 
 * 
 * @method void _construct(string $nome, int $dataNascimento, Endereco $endereco) Método que constroi uma Pessoa
 * @method void _destruct() Método chamado quando o objeto é destruido na memória (Diminui a quantdataNascimento do contador de objeto)
 * @method string getNome() Retorna nome da Pessoa
 * @method DateTimeInterface getdataNascimento() Retorna dataNascimento da Pessoa
 * @method self setNome(string $nome) Muda nome da Pessoa
 * @method self setdataNascimento(string $dataNascimento) Muda dataNascimento da Pessoa
 * @method int idade() Faz a diferença entre a data atual e a data de nascimento do objeto, retornando a idada
 * @method int getPeopleCount() Retorna o valor de peopleCount
 * @method Endereco getEndereco() Retorna endereço da Pessoa
 * @method self setEndereco(Endereco $endereco) Muda o endereço da Pessoa
 * 
 * @abstract
 * 
 */
abstract class Pessoa
{

    use AcessoAtributos;

    /**
     * ID da pessoa
     *
     * @var int|null
     */
    protected ?int $id;
    
    /**
     * Nome da Pessoa
     *
     * @access protected
     * @var string
     */
    protected string $nome;

    /**
     * dataNascimento da Pessoa
     *
     * @access protected
     * @var DateTimeInterface
     */
    protected DateTimeInterface $dataNascimento;

    /**
     * Endereço da Pessoa
     * 
     * @access protected
     * @var Endereco
     */
    protected Endereco $endereco;

    /**
     * Contagem de objetos da classe instanciados
     * @static
     * @var int 
     */
    private static int $peopleCount = 0;

    /**
     * Desconto dos filhos
     * @access protected
     * @var float
     */
    protected float $desconto;

    /**
     * Método que constroi uma Pessoa
     * 
     * @access public
     * @param  string $nome Nome da Pessoa
     * @param  integer $dataNascimento dataNascimento da Pessoa
     * @param  Endereco $endereco Endereço da Pessoa
     * @staticvar $peopleCount Contagem de objetos da classe instanciados
     * @return void
     */
    public function __construct(?int $id, string $nome, DateTimeInterface $dataNascimento, Endereco $endereco)
    {
        $this->nome     = $nome;
        $this->dataNascimento    = $dataNascimento;
        $this->endereco = $endereco;
        $this->setDesconto();
        self::$peopleCount++;
    }

    /**
     * Método chamado quando o objeto é destruido na memória
     * @access public
     * @staticvar $peopleCount Contagem de objetos da classe instanciados
     * @return void
     */
    public function __destruct()
    {
        self::$peopleCount--;
    }

    /**
     * Retorna nome da Pessoa
     * 
     * @access public
     * @return  string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Retorna dataNascimento da Pessoa
     * 
     * @access public
     * @return  DateTimeInterface
     */
    public function getDataNascimento(): DateTimeInterface
    {
        return $this->dataNascimento;
    }

    /**
     * Muda nome da Pessoa
     * 
     * @access public
     * @param  string  $nome  Nome da Pessoa
     *
     * @return  void
     */
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    /**
     * Muda dataNascimento da Pessoa
     * @access public
     * @param  integer  $dataNascimento  dataNascimento da Pessoa
     *
     * @return  self
     */
    public function setDataNascimento(DateTimeInterface $dataNascimento): self
    {
        $this->dataNascimento = $dataNascimento;

        return $this;
    }

    /**
     * Método que faz a diferença da data atual e a data de nascimento do objeto
     *
     * @return int
     * 
     * @author     Fabio Leal Schmitz 
     * @see       {@link https://github.com/fabiolealsc} 
     */
    public function idade(): int
    {
        return $this->getDataNascimento()->diff(new \DateTimeImmutable())->y;
    }

    /**
     * Retorna o valor de peopleCount
     * 
     * @access public
     * @static
     * 
     * @return int
     */
    public static function getPeopleCount(): int
    {
        return self::$peopleCount;
    }

    /**
     * Retorna endereço da Pessoa
     * 
     * @access public
     * 
     * @return  Endereco
     */
    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }

    /**
     * Muda o endereço da Pessoa
     *
     * @param  Endereco  $endereco  Endereço da Pessoa
     * 
     * @access public
     * 
     * @return  self
     */
    public function setEndereco(Endereco $endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }


    /**
     * Muda o valor de desconto
     *
     * @return void
     * 
     * @author     Fabio Leal Schmitz 
     * @see       {@link https://github.com/fabiolealsc} 
     */
    abstract protected function setDesconto(): self;

    /**
     * Retorna o desconto
     *
     * @return float
     * 
     * @author     Fabio Leal Schmitz 
     * @see       {@link https://github.com/fabiolealsc} 
     */
    public function getDesconto(): float
    {
        return $this->desconto;
    }

    abstract public function __toString(): string;
}