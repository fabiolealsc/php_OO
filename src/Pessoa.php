<?php

/**
 * Representa uma pessoa
 * @author Fabio Leal Schmitz
 * 
 * @property string $nome Nome da Pessoa
 * @property string $idade Idade da Pessoa
 * @property Endereco $endereco Endereço da Pessoa
 * @property int $peopleCount Contagem de objetos da classe instanciados 
 * 
 * @method void _construct(string $nome, int $idade, Endereco $endereco) Método que constroi uma Pessoa
 * @method void _destruct() Método chamado quando o objeto é destruido na memória (Diminui a quantidade do contador de objeto)
 * @method string getNome() Retorna nome da Pessoa
 * @method string getIdade() Retorna idade da Pessoa
 * @method self setNome(string $nome) Muda nome da Pessoa
 * @method self setIdade(string $idade) Muda idade da Pessoa
 * @method int getPeopleCount() Retorna o valor de peopleCount
 * @method Endereco getEndereco() Retorna endereço da Pessoa
 * @method self setEndereco(Endereco $endereco) Muda o endereço da Pessoa
 * 
 * @abstract
 */
abstract class Pessoa
{
    /**
     * Nome da Pessoa
     *
     * @access private
     * @var string
     */
    private string $nome;

    /**
     * Idade da Pessoa
     *
     * @access private
     * @var integer
     */
    private int $idade;

    /**
     * Endereço da Pessoa
     * 
     * @access private
     * @var Endereco
     */
    private Endereco $endereco;

    /**
     * Contagem de objetos da classe instanciados
     * @static
     * @var int 
     */
    private static int $peopleCount = 0;

    /**
     * Desconto dos filhos
     *
     * @var float
     */
    protected float $desconto;

    /**
     * Método que constroi uma Pessoa
     * 
     * @access public
     * @param  string $nome Nome da Pessoa
     * @param  integer $idade Idade da Pessoa
     * @param  Endereco $endereco Endereço da Pessoa
     * @staticvar $peopleCount Contagem de objetos da classe instanciados
     * @return void
     */
    public function __construct(string $nome, int $idade, Endereco $endereco)
    {
        $this->nome     = $nome;
        $this->idade    = $idade;
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
     * Retorna idade da Pessoa
     * 
     * @access public
     * @return  integer
     */ 
    public function getIdade(): int
    {
        return $this->idade;
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
     * Muda idade da Pessoa
     * @access public
     * @param  integer  $idade  Idade da Pessoa
     *
     * @return  void
     */ 
    public function setIdade(int $idade): void
    {
        $this->idade = $idade;
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