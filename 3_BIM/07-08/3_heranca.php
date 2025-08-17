<?php

class Pessoa{
    public $nome;
    public $tipo;

    public function mostrarTipo(){
        echo "$this->nome é uma pessoa do tipo $this->tipo <hr>";
    }
}

class PessoaComum extends Pessoa{
    public $cpf;
}

class Empresa extends Pessoa{
    public $cnpj;
}

$pessoa = new PessoaComum();
$pessoa->nome = "Cleiton";
$pessoa->tipo = "Fisica";

$empresa = new Empresa();
$empresa->nome = "Pirripipipi fc";
$empresa->tipo = "Jurídica";

$pessoa->mostrarTipo();
$empresa->mostrarTipo();

?>