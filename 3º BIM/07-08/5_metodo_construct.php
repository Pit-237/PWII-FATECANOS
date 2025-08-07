<?php

    class Pessoa{
        public $nome;
        public$idade;
        public function __contruct($nome, $idade){
            $this->$nome = $nome;
            $this->$idade = $idade;
        }
        public function exibir(){
            echo "Meu nome é $this->nome e tenho $this->idade anos <br>";
        }
    }

    $pessoa = new Pessoa ('Piri' , 21);
    $pessoa->exibir();
?>