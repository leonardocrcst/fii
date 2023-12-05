<?php

namespace App\Infrastructure\DatabaseEntity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;

#[Entity, Table(name: 'fundos')]
final class Fundo implements \App\Domain\Entity\Fundo
{
    #[Id, Column(type: 'integer'), GeneratedValue(strategy: 'AUTO')]
    private int $id;

    #[Column(type: 'string', unique: true)]
    private string $sigla;

    #[Column(type: 'string')]
    private string $nome;

    #[Column(type: 'string')]
    private string $site;

    public function __construct(string $sigla, ?int $id = null)
    {
        $this->setSigla($sigla);
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getSigla(): string
    {
        return $this->sigla;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getSite(): string
    {
        return $this->site;
    }

    public function setSigla(string $sigla): void
    {
        $this->sigla = $sigla;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setSite(string $url): void
    {
        $this->site = $url;
    }
}
