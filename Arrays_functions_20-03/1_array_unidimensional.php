<?php
    //vetor = array unidimensional
    $lista_frutas = [];

   // Array sequencial
    $lista_frutas [0] = 'Banana';
    $lista_frutas [1] = 'Mracujá';
    $lista_frutas [2] = 'Laranja';
    $lista_frutas [3] = 'Uva';

    echo '<pre>';
    echo var_dump($lista_frutas);
    //var_dump é como um console log, só que apresenta na tela/pagina
    //<pre> alinha os itens em forma vertical

    $lista_objetos = [];

    //array associativo / utiliza texto ao invez de numeros por posições
    $lista_objetos ['objeto1'] = 'Pedra';
    $lista_objetos ['objeto2'] = 'Luva';

    echo '<pre>';
    echo var_dump($lista_objetos['objeto1']);

?>