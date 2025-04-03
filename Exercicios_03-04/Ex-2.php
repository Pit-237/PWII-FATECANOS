<?php

    $animais = [
        [
            'nome' => 'Sonic',
            'Raça' => 'Ouriço Supersonico Humanoide',
            'Espécie' => 'Ouriço',
            'Cor' => 'Azul',
            'Peso' => '35KG',
            'idade' => '15',
            'foto' => 'https://assets.nintendo.com/image/upload/f_auto/q_auto/dpr_1.5/c_scale,w_400/ncom/software/switch/70010000040331/desc/d13123553d5a05ebd2f3217db24b35c13131e1cdcf9c5aeb1552ba8e67efd4d9'
        ],
        [
            'nome' => 'Tails',
            'Raça' => 'Raposa de Duas Caudas Humanoide',
            'Espécie' => 'Raposa',
            'Cor' => 'Amarelo Alaranjado',
            'Peso' => '20KG',
            'idade' => '8',
            'foto' => 'https://static.wikitide.net/greatcharacterswiki/c/c5/SDTTailsRender.png'
        ],
        [
            'nome' => 'Knuckles',
            'Raça' => 'Equidna Protetor de Esmeraldas Humanoide',
            'Espécie' => 'Equidna',
            'Cor' => 'vermelho',
            'Peso' => '40KG',
            'idade' => '16',
            'foto' => 'https://images.hobbydb.com/processed_uploads/subject_photo/subject_photo/image/126721/1000001621_png.new83f1175d-167e-45f2-80de-cc02e0fb1833_large.png'
        ],
        [
            'nome' => 'Shadow',
            'Raça' => 'A Sorma de Vida Suprema',
            'Espécie' => 'Ouriço',
            'Cor' => 'Preto e vermelho',
            'Peso' => '25KG',
            'idade' => 'Imortal',
            'foto' => 'https://cdn.segaamerica.com/img/fearless/about/shadow-about.png'
        ]
    ];

    foreach ($animais as $key => $value) {
        echo"<br>Aluno: " . $value["nome"];
        echo"<br>Raça: " . $value["Raça"];
        echo"<br>Espécie: " . $value["Espécie"];
        echo"<br>Cor: " . $value["Cor"];
        echo"<br>Peso: " . $value["Peso"];
        echo"<br>Idade: " . $value["idade"];
        echo"<br><img src='" . $value["foto"] . "' style='width: 310px; height: 350px'>";
        echo "<hr>";

    }


?>