<?php

    $pessoa1 = [];

    $pessoa1['nome'] = 'Amaurizin';
    $pessoa1['sobrenome'] = 'Djabin';
    $pessoa1['idade'] = 237;

    $pessoa2 = [];

    $pessoa2['nome'] = 'Savalo';
    $pessoa2['sobrenome'] = 'Horse';
    $pessoa2['idade'] = 666;


    $lista_pessoas = [
        $pessoa1,
        $pessoa2,
        
        ];

    // echo '<pre>';
    // echo var_dump($lista_pessoas);

    echo "<h1> O nome é: " . $lista_pessoas[0]['nome'] . "</h1>"

    
    ?>