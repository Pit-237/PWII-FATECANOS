<?php

    $lista = [
        [
        'nome' => 'Cleiverson',
        'idade' => 93
        ],

        [
        'nome' => 'Cleitin',
        'idade' => 24
        ],
        [
        'nome' => 'Cleidovisk',
        'idade' => 33
        ]

    ];

    verificarVotacao($lista);

    function verificarVotacao($lista){

    foreach ($lista as $key => $value) {
        if($value['idade'] < 16){
            echo 'Olá ' . $value['nome'] . ' Voce não pode votar.';
        }
        elseif ($value['idade'] >= 16 && ['idade'] < 18 ) {
            echo 'Olá ' . $value['nome'] . ' Seu voto é opcional.';
        }
        elseif ($value['idade'] >= 70) {
            echo 'Olá ' . $value['nome'] . ' Seu voto é opcional.';
        }
        else {
            echo 'Olá ' . $value['nome'] . ' Seu voto é obrigatório.';
        }

        echo '<br>';

    }
    }

?>