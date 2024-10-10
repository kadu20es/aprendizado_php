<?php
    namespace App\dto\boleto\Itau;

    class DadosIndividuaisBoletoDTO {

        private $nossoNumero;
        private $dataVencimento;
        private $valorTitulo;
        private $textoBeneficiario;
        private $seuNumero;

        public function __construct($dados) {

        }

        public function getNossoNumero() {
            return $this->nossoNumero;
        }

        public function setNossoNumero($nossoNumero) {
            $this->nossoNumero = $nossoNumero;
        }

        public function getDataVencimento() {
            return $this->dataVencimento;
        }

        public function setDataVencimento($dataVencimento) {
            $this->dataVencimento = $dataVencimento;
        }

        public function getValorTitulo() {
            return $this->valorTitulo;
        }

        public function setValorTitulo($valorTitulo) {
            $this->valorTitulo = $valorTitulo;
        }

        public function getTextoBeneficiario() {
            return $this->textoBeneficiario;
        }

        public function setTextoBeneficiario($textoBeneficiario) {
            $this->textoBeneficiario = $textoBeneficiario;
        }

        public function getSeuNumero() {
            return $this->seuNumero;
        }

        public function setSeuNumero($seuNumero) {
            $this->seuNumero = $seuNumero;
        }

    }