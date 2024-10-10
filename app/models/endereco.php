<?php

    class Endereco {
        private $id;
        private $logradouro;
        private $numero;
        private $complemento;
        private $bairro;
        private $municipio;
        private $uf;
        private $cep;
        private $createdAt;
        private $updatedAt;


    public function __construct(
        $id,
        $logradouro,
        $numero,
        $complemento,
        $bairro,
        $municipio,
        $uf,
        $cep,
        $createdAt,
        $updatedAt) {
        $this->id = $id;
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->complemento = $complemento;
        $this->bairro = $bairro;
        $this->municipio = $municipio;
        $this->uf = $uf;
        $this->cep = $cep;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }
}

