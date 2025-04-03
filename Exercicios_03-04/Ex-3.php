<?php

$escola = [
    'cursos' = [
        
        'materias' = [
        ['nome' => 'Programação Mobile'],
        ['nome' => 'Programação Web'],
        ['nome' => 'Tecnicas Programação algoritmos'],
        ['nome' => 'Recursos Humanos'],
        ['nome' => 'Gestão de pessoas'],
        ['nome' => 'Teoria da Administração'],
        ['nome' => 'Ingles'],
        'Módulos' = []
        

        ]
    ]
        ];



    foreach ($materias as $key => $value) {
        echo"<br>Aluno: " . $value["nome"];
        echo"<br>RM: " . $value["RM"];
        echo"<br>Telefone: " . $value["Numero"];
        echo"<br><img src='" . $value["foto"] . "' style='width: 310px; height: 300px'>";
        echo "<hr>";

    }


?>