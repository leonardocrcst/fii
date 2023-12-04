<?php

namespace App\Domain\Model;

class Fundo extends Entity
{
    protected ?string $uuid = null;
    protected ?string $nome = null;
    protected ?string $site = null;

    public function __construct(
        protected string $sigla,
        protected float $valorCotaCaptacao
    ) {
    }

    public function getSigla(): string
    {
        return $this->sigla;
    }

    public function getValorCotaCaptacao(): float
    {
        return $this->valorCotaCaptacao;
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    public function setUuid(?string $uuid): Fundo
    {
        $this->uuid = $uuid;
        return $this;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(?string $nome): Fundo
    {
        $this->nome = $nome;
        return $this;
    }

    public function getSite(): ?string
    {
        return $this->site;
    }

    public function setSite(?string $site): Fundo
    {
        $this->site = $site;
        return $this;
    }

    protected function criarDatabaseObject(): DatabaseObject\Fundo
    {
        $fundoDto = new DatabaseObject\Fundo();
        $fundoDto->url = $this->getSite();
        $fundoDto->nome = $this->getNome();
        $fundoDto->valorCotaCaptacao = $this->getValorCotaCaptacao();
        $fundoDto->sigla = $this->getSigla();
        if (!empty($this->getUuid())) {
            $fundoDto->uuid = $this->getUuid();
        }
        return $fundoDto;
    }

    public function salvar(): void
    {
        $dto = $this->criarDatabaseObject();
        if (!empty($dto->uuid)) {
            $this->repository->update($dto);
        }
        if (empty($dto->uuid)) {
            $this->repository->insert($dto);
        }
    }
    public function remover(): void
    {
        $dto = $this->criarDatabaseObject();
        if (!empty($dto->uuid)) {
            $this->repository->delete($dto);
        }
    }
}
