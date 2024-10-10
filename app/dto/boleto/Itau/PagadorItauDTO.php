<?php

    namespace App\dto\boleto\Itau;

    class PagadorItauDTO {

        private $nome;
        private $tipoPessoa;
        private $numeroDocumento;
        private $logradouro;
        private $bairro;
        private $cidade;
        private $uf;
        private $cep;

        public function __construct($dados) {

        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getTipoPessoa() {
            return $this->tipoPessoa;
        }

        public function setTipoPessoa($tipoPessoa) {
            $this->tipoPessoa = $tipoPessoa;
        }

        public function getNumeroDocumento() {
            return $this->numeroDocumento;
        }

        public function setNumeroDocumento($numeroDocumento) {
            $this->numeroDocumento = $numeroDocumento;
        }

        public function getLogradouro() {
            return $this->logradouro;
        }

        public function setLogradouro($logradouro) {
            $this->logradouro = $logradouro;
        }

        public function getBairro() {
            return $this->bairro;
        }

        public function setBairro($bairro) {
            $this->bairro = $bairro;
        }

        public function getCidade() {
            return $this->cidade;
        }

        public function setCidade($cidade) {
            $this->cidade = $cidade;
        }

        public function getUf() {
            return $this->uf;
        }

        public function setUf($uf) {
            $this->uf = $uf;
        }

        public function getCep() {
            return $this->cep;
        }

        public function setCep($cep) {
            $this->cep = $cep;
        }

    }