<?php

    class Aluno{
        public $nome;
        private $rm;

        public function setRM($valor){
            $this->rm = $valor;
        }

        public function getRM() {
            return $this->valor;
        }
    }

    $aluno1 - new Aluno();
    $aluno1->nome = "Pipiripipi";
    $aluno1->setRM(237490) ;

    echo "meu nome é $aluno1->nome <br>";
    echo "Meu RM é " . $aluno1->getRM();


?>