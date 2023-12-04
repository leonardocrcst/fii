<?php

namespace App\Domain\Model\Repository;

use App\Domain\Repository\DatabaseCriteria;
use App\Domain\Repository\DatabaseManager;
use App\Domain\Repository\DatabaseObject;
use App\Domain\Repository\Repository;

class CarteiraRepository implements Repository
{
    protected string $table;

    public function __construct(
        protected DatabaseManager $databaseManager
    ) {
        $this->setTable('carteira');
    }

    public function setDatabaseManager(DatabaseManager $databaseManager): void
    {
        $this->databaseManager = $databaseManager;
    }

    public function setTable(string $table): void
    {
        $this->table = $table;
    }

    public function insert(DatabaseObject $databaseObject): int
    {
        // TODO: Implement insert() method.
    }

    public function update(DatabaseObject $databaseObject): int
    {
        // TODO: Implement update() method.
    }

    public function delete(DatabaseObject $databaseObject): int
    {
        // TODO: Implement delete() method.
    }

    public function select(DatabaseCriteria $databaseCriteria): mixed
    {
        // TODO: Implement select() method.
    }
}
