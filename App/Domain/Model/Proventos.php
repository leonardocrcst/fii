<?php

namespace App\Domain\Model;

use DateTime;

class Proventos
{
    /**
     * @var Provento[]
     */
    protected array $proventos = [];

    public function adicionar(Fundo $fundo, float $valorPorCota, DateTime $dataCom, ?DateTime $dataPagamento = null): Provento
    {
        $provento = new Provento($fundo, $valorPorCota, $dataCom);
        if (!empty($dataPagamento)) {
            $provento->setDataPagamento($dataPagamento);
        }
        $this->proventos[] = $provento;
        return $provento;
    }
}
