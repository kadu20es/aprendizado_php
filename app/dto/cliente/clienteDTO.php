<?php

    class ClienteDTO {
        public $nome;
        public $tipoPessoa;
        public $documento;
        public $email;

        public function __construct($nome, $documento, $email) {
            $this->nome = $nome;
            $this->documento = $documento;
            $this->email = $email;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getDocumento() {
            return $this->documento;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setDocumento($documento) {
            $this->documento = $documento;
        }

        public function setEmail($email) {
            $this->email = $email;
        }
    }
