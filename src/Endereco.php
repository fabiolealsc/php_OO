<?php


/**
 * Representa um Endereco 
 * @author Fabio Leal Schmitz
 * 
 * @property string $uf Uf do endereço
 * @property string $cidade Cidade do endereço
 * @property string $nomeLogradouro Nome do Logradouro do endereço
 * @property string $numero Numero do endereço
 * @property string $bairro Bairro do endereço
 * @property string $cep Cep do endereço
 * 
 * @method void __construct(string $uf, string $cidade, string $nomeLogradouro, string $numero, string $bairro, string $cep) Constroi um Endereço
 * @method string getUf() Retorna o valor de UF
 * @method string getCidade() Retorna o valor de cidade
 * @method string getNomeLogradouro() Retorna o valor de Logradouro
 * @method string getNumero() Retorna o valor de Numero
 * @method string getBairro() Retorna o valor de Bairro
 * @method string getCep() Retorna o valor de Cep
 * 
 * @method self setUf(string $uf) Muda o valor de uf
 * @method self setCidade(string $cidade) Muda o valor de cidade
 * @method self setNomeLogradouro(string $nomeLogradouro) Muda o valor de Logradouro
 * @method self setNumero(string $numero) Muda o valor de Numero
 * @method self setBairro(string $bairro) Muda o valor de Bairro
 * @method self setCep(string $cep) Muda o valor de CEP
 * 
 * @method int getPeopleCount() Retorna o valor de peopleCount
 * @method Endereco getEndereco() Retorna endereço da Pessoa
 * @method self setEndereco(Endereco $endereco) Muda o endereço da Pessoa
 * 
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
     * @param  string $uf Uf do endereço
     * @param  string $cidade Cidade do endereço
     * @param  string $nomeLogradouro Nome do Logradouro do endereço
     * @param  string $numero Numero do endereço
     * @param  string $bairro Bairro do endereço
     * @param  string $cep Cep do endereço
     * @return void
     */
    public function __construct(
        string $uf,
        string $cidade,
        string $nomeLogradouro,
        string $numero,
        string $bairro,
        string $cep
    ) {
        $this->uf = $uf;
        $this->cidade = $cidade;
        $this->nomeLogradouro = $nomeLogradouro;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->cep = $cep;
    }

    /**
     * Retorna o valor de UF
     * 
     * @return string
     */ 
    public function getUf(): string
    {
        return $this->uf;
    }

    /**
     * Muda o valor de uf
     * @param string $uf
     * @return self
     */
    public function setUf(string $uf): self
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Retorna o valor de cidade
     * 
     * @return string
     */ 
    public function getCidade(): string
    {
        return $this->cidade;
    }

    /**
     * Muda o valor de cidade
     *
     * @param string $cidade
     * 
     * @return self
     */
    public function setCidade(string $cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Retorna o valor de Logradouro
     * 
     * @return string
     */ 
    public function getNomeLogradouro(): string
    {
        return $this->nomeLogradouro;
    }

    /**
     * Muda o valor de Logradouro
     * 
     * @param string 
     * 
     * @return self
     */
    public function setNomeLogradouro(string $nomeLogradouro): self
    {
        $this->nomeLogradouro = $nomeLogradouro;

        return $this;
    }

    /**
     * Retorna o valor de Numero
     * 
     * @return string
     */ 
    public function getNumero(): string
    {
        return $this->numero;
    }

    /**
     * Muda o valor de Numero
     *
     * @param string $numero
     * 
     * @return self
     */
    public function setNumero(string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Retorna o valor de Bairro
     * 
     * @return string
     */ 
    public function getBairro(): string
    {
        return $this->bairro;
    }

    /**
     * Muda o valor de Bairro
     *
     * @param string $bairro
     * 
     * @return self
     */
    public function setBairro(string $bairro): self
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Retorna o valor de CEP
     * 
     * @return string
     */ 
    public function getCep(): string
    {
        return $this->cep;
    }

    /**
     * Muda o valor de CEP
     *
     * @param string $cep
     * 
     * @return self
     */
    public function setCep(string $cep): self
    {
        $this->cep = $cep;

        return $this;
    }
}