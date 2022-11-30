<?php
require_once __DIR__.'/../vendor/autoload.php';

use App\Classes\Aggregation\Produto;
use App\Classes\Aggregation\Carrinho;

$p1 = new Produto(1, 'Vinho', 12.00, 5);
$p2 = new Produto(2, 'Leite Integral', 7.99, 5);

