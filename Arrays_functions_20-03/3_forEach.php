<?php

    $estacionamento = [

        'Fusca',
        'Uno',
        'Ferrari'
    ];

    foreach ($estacionamento as $index => $valor) {
        echo "<hr>";
        echo "<b> Veiculo " . $index . ": <b/>" . $valor . "<br>";
    };

    $patio = [
        [
            'nome' => 'Fusca',
            'placa' => 'Pit237',
            'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaNP9-fqRVxZnnX-Ph1xgEaTKFVp_eRoqSKg&s'
        ],
        [
            'nome' => 'Carroça do Inferno',
            'placa' => 'Dev666',
            'foto' => 'https://s3.glbimg.com/v1/AUTH_35862ca5c6ab48b992baf1f1b4f7062e/m-extra-globo-com/incoming/19989071-c64-d80/w488h275-PROP/inferno2-.jpg',
        ],
        [
            'nome' => 'Ferrari',
            'placa' => 'Kill237',
            'foto' => 'https://www.webmotors.com.br/rbx/_next/image?url=https%3A%2F%2Fimage.webmotors.com.br%2F_fotos%2Fanunciousados%2Fgigante%2F2025%5C202502%5C20250224%5Cferrari-296-gts-3.0-v6-turbo-phev-f1dct-WMIMAGEM0855134467.jpg&w=256&q=75'
        ]
    ];

    foreach ($patio as $key => $value) {
        echo"<br>Veiculo: " . $value["nome"];
        echo"<br>Placa: " . $value["placa"];
        echo"<br><img src='" . $value["foto"] . "' style='width: 310px; height: 300px'>";
        echo "<hr>";

    }


?>