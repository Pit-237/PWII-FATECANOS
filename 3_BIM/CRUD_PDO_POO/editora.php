<?php

    class Editora {
        private $id;
        private $nome;
        private $site;
        private $email;

        public function __construct($nome, $site, $email) {
            $this->nome = $nome;
            $this->site = $site;
            $this->email = $email;
        }

        public function inserir(){
            $stmt = $pdo->prepare("INSERT INTO editora (nome, email, senha, tipo) VALUES (:nome, :email, :senha, :tipo)");
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':site', $site);
            $stmt->execute();}
        

        public function buscar($id){
            $stmt = $pdo->query("SELECT * FROM editora WHERE id = $id");
	        $editoras = $stmt->fetchAll();
        }

        public function buscarTodos(){
            $stmt = $pdo->query("SELECT * FROM editora");
            $editoras = $stmt->fetchAll();
        }

        public function atualizar($id){
            $stmt = $pdo->prepare("UPDATE pessoas SET nome = :nome, email = :email, site = :site WHERE id = :id");
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':site', $site);
            $stmt->execute();
        }

        public function deletar($id){
            $stmt = $pdo->prepare('DELETE FROM editora WHERE id = :id');
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }
    }

?>