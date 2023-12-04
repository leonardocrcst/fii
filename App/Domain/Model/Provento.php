<?php

namespace App\Domain\Model;

use DateTime;

class Provento
{
    protected ?string $uuid;

    protected DateTime $dataPagamento;

    public function __construct(
        protected Fundo $fundo,
        protected float $valorPorCota,
        protected DateTime $dataCom
    ) {
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    public function setUuid(?string $uuid): Provento
    {
        $this->uuid = $uuid;
        return $this;
    }

    public function getFundo(): Fundo
    {
        return $this->fundo;
    }

    public function getValorPorCota(): float
    {
        return $this->valorPorCota;
    }

    public function getDataCom(): DateTime
    {
        return $this->dataCom;
    }

    public function getDataPagamento(): DateTime
    {
        return $this->dataPagamento;
    }

    public function setDataPagamento(DateTime $dataPagamento): Provento
    {
        $this->dataPagamento = $dataPagamento;
        return $this;
    }
}
