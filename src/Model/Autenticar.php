<?php

namespace Schmitz\Comercial\Model;

/**
 * Implementação da funcão de login
 * 
 * @method void login(string $nome, string $senha) Função que faz o login do usuário
 */
interface Autenticar
{
    /**
     * Função de login
     *
     * @param string $funcionario
     * @param string $senha
     * 
     * @return void
     * 
     * @author     Fabio Leal Schmitz 
     * @see       {@link https://github.com/fabiolealsc} 
     */
    public function login(string $nome, string $senha): void;
}
