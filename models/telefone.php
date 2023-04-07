<?php
    namespace Contato;
    class Telefone {
        private $numero;

        // Sets
        function setNumero ($numero) {
            $this->numero = $numero;
        }

        //Gets
        function getNumero () {
            return $this->numero;
        }
    }
?>