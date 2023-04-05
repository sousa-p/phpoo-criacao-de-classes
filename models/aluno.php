<?php
    namespace Pessoa;
    class Aluno{
        private $codigo;
        private $nome;
        private $email;
        private $telefone = [];
        private $endereco;

        // sets
        function setNome($nome){
            $this->nome = $nome;
        }
        function setEmail($email){
            $this->email = $email;
        }
        function setTelefone ($telefone) {
            array_push($this->telefone, $telefone);
        }
        function setEndereco($endereco){
            $this->endereco = $endereco;
        }

        // gets
        function getNome () {
            return $this->nome;
        }
        function getEmail () {
            return $this->email;
        }
        function getTelefone () {
            return $this->telefone;
        }
        function getEndereco () {
            return $this->endereco;
        }
    }
?>