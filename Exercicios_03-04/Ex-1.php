<?php

    $alunos = [
        [
            'nome' => 'Miguel',
            'RM' => '123901',
            'Numero' => '998010203',
            'foto' => 'https://i.ytimg.com/vi/fReeqfXijQ8/maxresdefault.jpg'
        ],
        [
            'nome' => 'Léo',
            'RM' => '123901',
            'Numero' => '998250191',
            'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9TF3wtirhLwFEw9_HuXxr7ofbuR0WU6v6Fqa5_sH7El5GWGWEWNMDn_ltzc8puWjlvbo&usqp=CAU',
        ],
        [
            'nome' => 'Neobas',
            'RM' => '123901',
            'Numero' => '779451793',
            'foto' => 'https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/1348dc4c-8ae6-4de1-8482-1a6fab9ec7f5/d95phgl-f995a44c-4501-4343-bdc9-11df4802e77e.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzEzNDhkYzRjLThhZTYtNGRlMS04NDgyLTFhNmZhYjllYzdmNVwvZDk1cGhnbC1mOTk1YTQ0Yy00NTAxLTQzNDMtYmRjOS0xMWRmNDgwMmU3N2UuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.amNKu_NTW6feNEAmRWwnktBH1fqwzbVHBcxV37fvsiU'
        ],
        [
            'nome' => 'Gui',
            'RM' => '123901',
            'Numero' => '2374908917',
            'foto' => 'https://i.pinimg.com/736x/42/a0/7f/42a07f04e3f3f4c1ded0f430d6890ee0.jpg'
        ]
    ];

    foreach ($alunos as $key => $value) {
        echo"<br>Aluno: " . $value["nome"];
        echo"<br>RM: " . $value["RM"];
        echo"<br>Telefone: " . $value["Numero"];
        echo"<br><img src='" . $value["foto"] . "' style='width: 310px; height: 300px'>";
        echo "<hr>";

    }


?>