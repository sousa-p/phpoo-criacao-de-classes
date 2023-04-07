<?php
    namespace Contato;
    class Email {
        private $email;
        
        // Sets
        function setEmail ($email) {
            $this->email = $email;
        }

        //Gets
        function getEmail () {
            return $this->email;
        }
    }
?>