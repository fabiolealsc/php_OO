<?php


/**
 * Representa um Endereco 
 */
class Endereco
{    
    /**
     * Uf do endereço
     *
     * @var string
     */
    private string $uf;
    
    /**
     * Cidade do endereço
     *
     * @var string
     */
    private string $cidade;
    
    /**
     * Nome do Logradouro do endereço
     *
     * @var string
     */    
    private string $nomeLogradouro;
    
    /**
     * Numero do endereço
     *
     * @var string
     */
    private string $numero;
    
    /**
     * Bairro do endereço
     *
     * @var string
     */
    private string $bairro;
    
    /**
     * Cep do endereço
     *
     * @var string
     */
    private string $cep;
    
    /**
     * Constroi um Endereço
     *
     * @param  string $uf
     * @param  string $cidade
     * @param  string $nomeLogradouro
     * @param  string $numero
     * @param  string $bairro
     * @param  string $cep
     * @return void
     */
    public function __construct(
        string $uf, 
        string $cidade, 
        string $nomeLogradouro, 
        string $numero, 
        string $bairro, 
        string $cep)
    {
        $this->uf = $uf;
        $this->cidade = $cidade;
        $this->nomeLogradouro = $nomeLogradouro;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->cep = $cep;
    }

    /**
     * Get the value of uf
     * 
     * @return string
     */ 
    public function getUf(): string
    {
        return $this->uf;
    }

    /**
     * Set the value of uf
     *
     */ 
    public function setUf($uf)
    {
        $this->uf = $uf;

    }

    /**
     * Get the value of cidade
     * 
     * @return string
     */ 
    public function getCidade(): string
    {
        return $this->cidade;
    }

    /**
     * Set the value of cidade
     *
     */ 
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

    }

    /**
     * Get the value of nomeLogradouro
     * @return string
     */ 
    public function getNomeLogradouro(): string
    {
        return $this->nomeLogradouro;
    }

    /**
     * Set the value of nomeLogradouro
     *
     */ 
    public function setNomeLogradouro($nomeLogradouro)
    {
        $this->nomeLogradouro = $nomeLogradouro;

    }

    /**
     * Get the value of numero
     * @return string
     */ 
    public function getNumero(): string
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;

    }

    /**
     * Get the value of bairro
     * 
     * @return string
     */ 
    public function getBairro(): string
    {
        return $this->bairro;
    }

    /**
     * Set the value of bairro
     *
     */ 
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    /**
     * Get the value of cep
     * 
     * @return string
     */ 
    public function getCep(): string
    {
        return $this->cep;
    }

    /**
     * Set the value of cep
     *
     */ 
    public function setCep($cep)
    {
        $this->cep = $cep;

    }
}