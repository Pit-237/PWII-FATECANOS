<?php

$alunos = [
    'morestes vivino da silva',
    'Amaurizinho Tapetino',
    'Tikipaku pakumato'
];

digaOla($alunos);

function digaOla($estudante){

    foreach ($estudante as $key => $value) {
        echo "<h1>$value</h1>";
    }

}

?>