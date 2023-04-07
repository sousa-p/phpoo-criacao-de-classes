<?php
    namespace Pessoa;
    class Endereco{
        private $logradouro;
        private $cidade;
        private $uf;
        private $codigo_postal;
        
        // Sets
        function setLogradouro($logradouro){
            $this->logradouro = $logradouro;
        }
        function setCidade($cidade){
            $this->cidade = $cidade;
        }
        function setUF ($uf) {
            $this->uf = $uf;
        }
        function setCodigoPostal($codigo_postal){
            $this->codigo_postal = $codigo_postal;
        }
        
        // Gets
        function getLogradouro () {
            return $this->logradouro;
        }
        function getCidade () {
            return $this->cidade;
        }
        function getUF () {
            return $this->uf;
        }
        function getCodigoPostal () {
            return $this->codigo_postal;
        }
    }
?>