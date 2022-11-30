<?php
namespace App\Classes\Aggregation;

class Produto 
{
    public int $id; 
    public string $descricao;
    public float $preco;
    public int $quantidade;

    /**
     * @param int $id 
     * @param string $descricao
     * @param float $preco
     * @param int $quantidade
     */

    public function __construct(int $id, string $descricao, float $preco, int $quantidade)
    {
        $this->id           = $id;
        $this->descricao    = $descricao;
        $this->preco        = $preco;
        $this->quantidade   = $quantidade;
    }
}