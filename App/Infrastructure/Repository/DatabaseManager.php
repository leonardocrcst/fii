<?php

namespace App\Infrastructure\Repository;

use App\Infrastructure\Exception\InvalidDatabaseType;
use PDO;

class DatabaseManager implements \App\Domain\Repository\DatabaseManager
{
    protected static PDO $conexao;

    /**
     * @throws InvalidDatabaseType
     */
    public function conectar(string $endereco, string $tipo): PDO
    {
        if (empty(self::$conexao)) {
            if ('sqlite' === $tipo) {
                self::$conexao = new PDO("sqlite:$endereco");
            } else {
                throw new InvalidDatabaseType($tipo);
            }
        }
        return self::$conexao;
    }
}
