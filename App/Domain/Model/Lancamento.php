<?php

namespace App\Domain\Model;

use DateTime;

class Lancamento
{
    protected ?string $uuid;

    public function __construct(
        protected Fundo $fundo,
        protected int $quantidade,
        protected float $valorConta,
        protected DateTime $dataLancamento = new DateTime()
    ) {
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    public function setUuid(?string $uuid): Lancamento
    {
        $this->uuid = $uuid;
        return $this;
    }

    public function getFundo(): Fundo
    {
        return $this->fundo;
    }

    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    public function getValorConta(): float
    {
        return $this->valorConta;
    }

    public function getDataLancamento(): DateTime
    {
        return $this->dataLancamento;
    }
}
