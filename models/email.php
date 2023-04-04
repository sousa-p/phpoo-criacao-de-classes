<?php
    namespace Contato;
    class Email {
        private $email;

        function setEmail ($email) {
            $this->email = $email;
        }

        function getEmail () {
            return $this->email;
        }
    }
?>