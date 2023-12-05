<?php

namespace App\Domain\Entity;

interface Fundo
{
    public function getSigla(): string;

    public function getNome(): string;

    public function getSite(): string;

    public function setSigla(string $sigla): void;

    public function setNome(string $nome): void;

    public function setSite(string $url): void;

    public function getId(): int;
}
