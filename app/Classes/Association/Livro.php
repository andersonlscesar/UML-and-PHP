<?php
namespace App\Classes\Association;

class Livro 
{
    public int $codigo;
    public string $descricao;
    public string $isbn;
    public Editora $editora;

    /**
     * @param int $codigo
     * @param string $descricao
     * @param string $isbn
     * @param Editora $editora
     * @return void
     */

    public function __construct(int $codigo, string $descricao, string $isbn, Editora $editora)
    {
        $this->codigo = $codigo;
        $this->descricao = $descricao;
        $this->isbn = $isbn;
        $this->editora = $editora;
    }
}
