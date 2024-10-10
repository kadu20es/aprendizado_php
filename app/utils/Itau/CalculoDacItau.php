<?php

use App\enum\boleto\Itau\Carteira;

    class CalculoDACItau {

        public static function calculoDAC($agencia, $conta, $carteira, $nossoNumero) {

            if ($carteira === 126 ||
                $carteira === 131 ||
                $carteira === 146 ||
                $carteira === 168)
                {
                // lançar exceção - usar apenas nosso número
            }

        }
    }