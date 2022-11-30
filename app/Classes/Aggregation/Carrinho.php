<?php
namespace App\Classes\Aggregation;

class Carrinho 
{
    public int $id;
    public Produto $produtos;

    public function __construct(int  $id, Produto $produtos)
    {   
        $this->id       = $id ;
        $this->produtos = $produtos;        
    }
}