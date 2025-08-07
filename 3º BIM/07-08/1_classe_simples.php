<?php 

    class Pessoa{

        //Opções de encapsulamento
        //public - Variavel é acessivel de fora da classe
        //private - É acessivel apenas dentro da classe
        //protected - É acessivel apenas por heranca

        public $nome;
        public $idade;

        public function apresentar(){
            echo "Olá, meu nome é $this->nome";
            echo "<hr>";
            echo "Tenho $this->idade anos";
            echo "<hr>";


        }
    }

    $aluno1 = new Pessoa();
    $aluno1->nome = 'Peter Griffin';
    $aluno1->idade = '45';
    $aluno1->apresentar();

    $aluno2 = new Pessoa();
    $aluno2->nome = 'Stewie Griffin';
    $aluno2->idade = '1';
    $aluno2->apresentar();



?>