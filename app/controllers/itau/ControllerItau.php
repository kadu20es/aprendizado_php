<?php


    class ControllerItau {

        private $dadosBoleto = [
            'etapaProcesso' => "efetivacao",
            'canalOperacao' => "API",
            'beneficiario' => [
               'idBeneficiario' => "12345678910"
            ],
            'descricao' => "simples boleto",
            'formaEnvio' => "",
            'enderecoEmail' => "",
            'assuntoEmail' => "",
            'mensagemEmail' => "",
            'tipoBoleto' => "",
            'codigoCarteira' => "",
            'valorTitulo' => "39.90",
            'codigoEspecie' => "",
            'valorAbatimento' => "",
            'dataEmissao' => (string) date('Y-m-d'),
            'pagamentoParcial' => false,
            'quantidadeMaximaParcial' => "",
            'multa' => [
               'codigoTipoMulta' => "",
               'dataMulta' => "",
               'percentualMulta' => "",
            ],
            'juros' => [
               'codigoTipoJuros' => "90",
               'dataJuros' => "2024-26-12",
               'percentualJuros' => "000000100000"
            ],
            'recebimentoDivergente' => [
               'codigoTipoAutorizacao' => "01"
            ],
            'instrucaoCobranca' => [
               [
                   'codigoInstrucaoCobranca' => "2",
                   'quantidadeDiasAposVencimento' => "10",
                   'diaUtil' => false
               ]
            ],
            'protesto' => [
               'protesto' => true,
               'quantidadeDiasProtesto' => 10
            ],
            'descontoExpresso' => "",
            'nossoNumero' => "00002582",
            'dataVencimento' => "2024-12-24",
            'textoBeneficiario' => "absbdijhke",
            'seuNumero' => "0000000"
        ];

        private $dadosPagador = [
            'pessoa' => [
                'nome' => "Carlos Eduardo",
                'tipoPessoa' => "F",
                'documento' => "12345678901",
            ],
            'endereco' => [
                'endereco' => "Rua Dom Pedro II, 354, bloco 7, 211",
                'cidade' => "Serra",
                'uf' => "ES",
                'cep' => "29167168"
            ]
        ];


        private $retorno = new BoletoItauService($this->dadosBoleto, $this->dadosPagador);

        echo '<pre>';
        echo $this->retorno
    }