<?php

namespace App\Domain\Model;

use App\Domain\Repository\DatabaseObject;
use App\Domain\Repository\Repository;

abstract class Entity
{
    protected Repository $repository;

    public function getRepository(): Repository
    {
        return $this->repository;
    }

    public function setRepository(Repository $repository): void
    {
        $this->repository = $repository;
    }

    abstract protected function criarDatabaseObject(): DatabaseObject;

    abstract public function salvar();

    abstract public function remover();
}
