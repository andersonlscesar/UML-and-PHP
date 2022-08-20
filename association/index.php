<?php
require __DIR__.'/../vendor/autoload.php';

use App\Classes\Association\Livro;
use App\Classes\Association\Editora;

/*
 Ela descreve um vínculo que ocorre entre classes - associação binária -, mas é possível até mesmo que uma classe esteja vinculada a si própria, - associação unária-, ou que uma associação seja compartilhada por mais de uma classe, o que conhecemos por associação ternária ou N-ária, tipo de associação mais rara e também mais complexa. Representamos as associações por meio de retas que ligam as classes envolvidas, essas setas podem ou não possuir setas nas extremidades indicando a navegabilidade da associação, ou seja, o sentido em que as informações são passadas entre as classes - não obrigatório-. Ou seja, se não há setas, significa que essas informações podem ser transmitidas entre todas as classes de uma associação.

 Exemplo: A forma mais comum de implementar associação é ter um objeto como atributo de outro, neste exemplo, abaixo temos uma associação entre a Classe Livros e a classe Editoras. No código cria-se um objeto do tipo Livro e outro do tipo Editora. Um dos atributos do Livro é a Editora
 */

$editora1 = new Editora(1, '1596544774', '79985222222');

$livro1 = new Livro(1, 'Java', '165 258 123', $editora1);
$livro2 = new Livro(2, 'Nodejs', '165 258 124', $editora1);

// ==== Livro 1 ==== 

/*
 [codigo] => 1
    [descricao] => Java
    [isbn] => 165 258 123
    [editora] => App\Classes\Association\Editora Object
        (
            [codigo] => 1
            [razaoSocial] => 1596544774
            [telefone] => 79985222222
        )
 */

// ==== Livro 2 ==== 


 /*
 [codigo] => 2
    [descricao] => Nodejs
    [isbn] => 165 258 124
    [editora] => App\Classes\Association\Editora Object
        (
            [codigo] => 1
            [razaoSocial] => 1596544774
            [telefone] => 79985222222
        )
 */








