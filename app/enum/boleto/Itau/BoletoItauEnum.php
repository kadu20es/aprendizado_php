<?php

namespace App\enum\boleto\Itau;

enum AcaoAposVencimento: int {
    case Protestar = 1;
    case Negativar = 2;
    case NaoProtestar = 4;
    case NaoNegativar = 5;
    case NaoReceberAposVencimento = 7;
    case CancelarAposVencimento = 8;
}

enum Carteira: int {
    case DiretaEntregaCliente = 109;
    case EmissaoColorida = 138;
    case DiretaComIOF038 = 148;
    case DiretaComIOF738 = 153;
    case DiretaEntregaCliente2 = 175;
    case Ecommerce = 176;
    case DiretaComEmissaoCliente = 198;
}

enum EspécieDocumento: int {
    case DM = 1; // Duplicata de Venda Mercantil
    case NP = 2; // Nota Promissória
    case NS = 3; // Nota de Seguro
    case ME = 4; // Mensalidade Escolar
    case RC = 5; // Recibo
    case CT = 6; // Contrato
    case DS = 8; // Duplicata de Prestação de Serviços Original
    case LC = 9; // Letra de Câmbio
    case DD = 15; // Documento de Dívida
    case EC = 16; // Encargos Condominais
    case FS = 17; // Fatura de Serviço
    case BDP = 18; // Boleto Proposta
    case BDA = 33; // Boleto Depósito Aporte (procure seu gerente para uso dessa espécie)
    case CBI = 88; // Cédula de Crédito Bancário por Indicação
    case CC = 89; // Contrato de Câmbio
    case CCB = 90; // Cédula de Crédito Bancário
    case CD = 91; // Confissão de Dívida
    case CH = 92; // Cheque
    case CM = 93; // Contrato de Mútuo
    case CPS = 94; // Conta de Prestação de Serviços
    case DMI = 95; // Duplicata de Venda Mercantil por Indicação
    case DSI = 96; // Duplicata de Prestação de Serviços - Original Por Indicação
    case RA = 97; // Recibo de Aluguel (PJ)
    case TA = 98; // Termo de acordo
    case DV = 99; // Diversos
}