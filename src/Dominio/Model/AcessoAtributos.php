<?php

namespace Schmitz\Comercial\Dominio\Model;

/**
 * Define metodo de acesso à atributos sensíveis à classe
 */
trait AcessoAtributos
{
    /**
     * Acessa atributos sensíveis da classe
     *
     * @param string $nomeAtributo
     * 
     * @return string
     * 
     * @author     Fabio Leal Schmitz 
     * @see       {@link https://github.com/fabiolealsc} 
     */
    public function __get(string $nomeAtributo): string
    {
        $metodo = 'get' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }


    /**
     *  Muda o valor do atributo sensível a classe
     *
     * @param string $nomeAtributo
     * @param mixed $valor
     * 
     * @return void
     * 
     * @author     Fabio Leal Schmitz 
     * @see       {@link https://github.com/fabiolealsc} 
     */
    public function __set(string $nomeAtributo, mixed $valor): void
    {
        $metodo = 'set' . ucfirst($nomeAtributo);
        $this->$metodo($valor);
    }
}
