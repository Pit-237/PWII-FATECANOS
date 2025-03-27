<?php

    $alunos = [

        [
            'nome' => 'Marquinhos',
            'nota' => 5
        ],
        [
            'nome' => 'Jucilielson',
            'nota' => 10
        ]

        
    ];

    foreach ($alunos as $key => $estudante) {
        
        if ($estudante['nota'] < 7){
            echo 'Aluno ' . $estudante['nome'] . ' esta Reprovado';}
        else{
            echo 'Aluno ' . $estudante['nome'] . ' está Aprovado';}

        echo '<br>';
    }
?>