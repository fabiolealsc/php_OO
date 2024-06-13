<?php 

class Pessoa
{    
    /**
     * Nome da Pessoa
     *
     * @var string
     */
    private string $nome;
    
    /**
     * Idade da Pessoa
     *
     * @var integer
     */
    private int $idade;
    
    private static int $peopleCount = 0;

    /**
     * Método que constroi uma Pessoa, deve-se passar o nome e 
     * idade na contrução.
     *
     * @param  string $nome
     * @param  integer $idade
     * @return void
     */
    public function __construct(string $nome, int $idade, $peopleCount = 0)
    {
        $this->nome     = $nome;
        $this->idade    = $idade;
        self::$peopleCount++;
    }   

    /**
     * Método chamado quando o objeto é destruido na memória
     *
     * @return void
     */
    public function __destruct()
    {
        self::$peopleCount--;   
    }
    
    /**
     * Retorna nome da Pessoa
     *
     * @return  string
     */ 
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Retorna idade da Pessoa
     *
     * @return  integer
     */ 
    public function getIdade(): int
    {
        return $this->idade;
    }

    /**
     * Muda nome da Pessoa
     *
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
     *
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
     * @return int
     */ 
    public static function getPeopleCount(): int
    {
        return self::$peopleCount;
    }
}