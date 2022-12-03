<?php
require_once __DIR__.'/../vendor/autoload.php';

use App\Classes\Aggregation\Produto;
use App\Classes\Aggregation\Carrinho;


/*

AGREGAÇÃO = é uma associação em que um objeto é parte de outro, de tal forma que a parte pode existir sem o todo.

- Em mais baixo nível, um a agregação consiste de um objeto contendo referências para outros objetos, de tal forma que o primeiro seja o todo, e que os objetos referenciados sejam as partes do todo.

- A diferença entre os relacionamentos de associação e agregação ainda é algo de bastante discussão entre os gurus. De forma geral, utiliza-se agregação para engatizar detalhes de uma futura implementação.


*/

$p1 = new Produto(1, 'Vinho', 12.00, 5);
$p2 = new Produto(2, 'Leite Integral', 7.99, 5);
$c1 = new Carrinho(1, [$p1, $p2]);

/*
 [id] => 1
    [produtos] => Array
        (
            [0] => App\Classes\Aggregation\Produto Object
                (
                    [id] => 1
                    [descricao] => Vinho
                    [preco] => 12
                    [quantidade] => 5
                )

            [1] => App\Classes\Aggregation\Produto Object
                (
                    [id] => 2
                    [descricao] => Leite Integral
                    [preco] => 7.99
                    [quantidade] => 5
                )

        )
*/