<?php
    namespace Contato;
    class Telefone {
        private $numero;

        function setNumero ($numero) {
            $this->numero = $numero;
        }

        function getNumero () {
            return $this->numero;
        }
    }
?>