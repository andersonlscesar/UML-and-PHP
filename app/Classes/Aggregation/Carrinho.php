<?php
namespace App\Classes\Aggregation;

class Carrinho 
{
    public int $id;
    public array $produtos;

    public function __construct(int  $id, array $produtos)
    {   
        $this->id       = $id ;
        $this->produtos = $produtos;        
    }
}