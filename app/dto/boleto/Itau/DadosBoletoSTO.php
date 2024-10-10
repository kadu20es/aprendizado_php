<?php
    namespace App\dto\boleto\Itau;

    class DadosBoletoDTO {

        private $descricao;
        private $formaEnvio;
        private $enderecoEmail;
        private $assuntoEmail;
        private $mensagemEmail;
        private $tipoBoleto;
        private $codigoCarteira;
        private $valorTitulo;
        private $codigoEspecie;
        private $valorAbatimento;
        private $dataEmissao;
        private $pagamentoParcial;
        private $quantidadeMaximaParcial;
        private $pagador;
        private $multa;
        private $juros;
        private $recebimentoDivergente;
        private $instrucaoCobranca;
        private $protesto;
        private $descontoExpresso;


        public function __construct($dados) {

        }

        public function getDescricao() {
            return $this->descricao;
        }

        public function setDescricao($descricao) {
            $this->descricao = $descricao;
        }

        public function getFormaEnvio() {
            return $this->formaEnvio;
        }

        public function setFormaEnvio($formaEnvio) {
            $this->formaEnvio = $formaEnvio;
        }

        public function getEnderecoEmail() {
            return $this->enderecoEmail;
        }

        public function setEnderecoEmail($enderecoEmail) {
            $this->enderecoEmail = $enderecoEmail;
        }

        public function getAssuntoEmail() {
            return $this->assuntoEmail;
        }

        public function setAssuntoEmail($assuntoEmail) {
            $this->assuntoEmail = $assuntoEmail;
        }

        public function getMensagemEmail() {
            return $this->mensagemEmail;
        }

        public function setMensagemEmail($mensagemEmail) {
            $this->mensagemEmail = $mensagemEmail;
        }

        public function getTipoBoleto() {
            return $this->tipoBoleto;
        }

        public function setTipoBoleto($tipoBoleto) {
            $this->tipoBoleto = $tipoBoleto;
        }

        public function getCodigoCarteira() {
            return $this->codigoCarteira;
        }

        public function setCodigoCarteira($codigoCarteira) {
            $this->codigoCarteira = $codigoCarteira;
        }

        public function getValorTitulo() {
            return $this->valorTitulo;
        }

        public function setValorTitulo($valorTitulo) {
            $this->valorTitulo = $valorTitulo;
        }

        public function getCodigoEspecie() {
            return $this->codigoEspecie;
        }

        public function setCodigoEspecie($codigoEspecie) {
            $this->codigoEspecie = $codigoEspecie;
        }

        public function getValorAbatimento() {
            return $this->valorAbatimento;
        }

        public function setValorAbatimento($valorAbatimento) {
            $this->valorAbatimento = $valorAbatimento;
        }

        public function getDataEmissao() {
            return $this->dataEmissao;
        }

        public function setDataEmissao($dataEmissao) {
            $this->dataEmissao = $dataEmissao;
        }

        public function getPagamentoParcial() {
            return $this->pagamentoParcial;
        }

        public function setPagamentoParcial($pagamentoParcial) {
            $this->pagamentoParcial = $pagamentoParcial;
        }

        public function getQuantidadeMaximaParcial() {
            return $this->quantidadeMaximaParcial;
        }

        public function setQuantidadeMaximaParcial($quantidadeMaximaParcial) {
            $this->quantidadeMaximaParcial = $quantidadeMaximaParcial;
        }

        public function getPagador() {
            return $this->pagador;
        }

        public function setPagador($pagador) { // TODO: REMOVER?
            $this->pagador = $pagador;
        }

        public function getMulta() {
            return $this->multa;
        }

        public function setMulta($multa) {
            $this->multa = $multa;
        }

        public function getJuros() {
            return $this->juros;
        }

        public function setJuros($juros) {
            $this->juros = $juros;
        }

        public function getRecebimentoDivergente() {
            return $this->recebimentoDivergente;
        }

        public function setRecebimentoDivergente($recebimentoDivergente) {
            $this->recebimentoDivergente = $recebimentoDivergente;
        }

        public function getInstrucaoCobranca() {
            return $this->instrucaoCobranca;
        }

        public function setInstrucaoCobranca($instrucaoCobranca) {
            $this->instrucaoCobranca = $instrucaoCobranca;
        }

        public function getProtesto() {
            return $this->protesto;
        }

        public function setProtesto($protesto) {
            $this->protesto = $protesto;
        }

        public function getDescontoExpresso() {
            return $this->descontoExpresso;
        }

        public function setDescontoExpresso($descontoExpresso) {
            $this->descontoExpresso = $descontoExpresso;
        }










































    }
