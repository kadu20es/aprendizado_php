<?php

    class loja {
        private $id;
        private $nome;
        private $tipoPessoa;
        private $documento;
        private $email;

        public function __construct($id, $nome, $tipoPessoa, $documento, $email) {
            $this->id = $id;
            $this->nome = $nome;
            $this->tipoPessoa = $tipoPessoa;
            $this->documento = $documento;
            $this->email = $email;
        }
    }
