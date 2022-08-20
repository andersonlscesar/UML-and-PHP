<?php
namespace App\Classes\Association;

class Editora
{
    public int $codigo;
    public string $razaoSocial;
    public string $telefone;

    /**
     * @param int $codigo
     * @param string $razaoSocial
     * @param string $telefone
     * @return void
     */

    public function __construct(int $codigo, string $razaoSocial, string $telefone)
    {
        $this->codigo = $codigo;
        $this->razaoSocial = $razaoSocial;
        $this->telefone = $telefone;
    }
}