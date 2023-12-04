<?php

namespace App\Domain\Repository;

interface Repository
{
    public function setDatabaseManager(DatabaseManager $databaseManager): void;

    public function setTable(string $table): void;

    public function insert(DatabaseObject $databaseObject): int;

    public function update(DatabaseObject $databaseObject): int;

    public function delete(DatabaseObject $databaseObject): int;

    public function select(DatabaseCriteria $databaseCriteria): mixed;
}
