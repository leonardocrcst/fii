<?php

namespace App\Domain\Model\Repository;

use App\Domain\Model\Fundo;
use App\Domain\Repository\DatabaseCriteria;
use App\Domain\Repository\DatabaseManager;
use App\Domain\Repository\DatabaseObject;
use App\Domain\Repository\Repository;

class FundoRepository implements Repository
{
    protected string $table;

    public function __construct(
        protected DatabaseManager $databaseManager
    ) {
        $this->table = 'fundos';
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
        return 0;
    }

    public function update(DatabaseObject $databaseObject): int
    {
        return 0;
    }

    public function delete(DatabaseObject $databaseObject): int
    {
        return 0;
    }

    /**
     * @param DatabaseCriteria $databaseCriteria
     * @return Fundo[]
     */
    public function select(DatabaseCriteria $databaseCriteria): array
    {
        return [];
    }

    /**
     * @param string $uuid
     * @return Fundo|null
     */
    public static function abrirPeloUuid(string $uuid): ?Fundo
    {
        return null;
    }

    /**
     * @param string $sigla
     * @return Fundo|Fundo[]|null
     */
    public static function procurarPelaSigla(string $sigla): Fundo|array|null
    {
        return null;
    }

}
