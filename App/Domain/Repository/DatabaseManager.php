<?php

namespace App\Domain\Repository;

use PDO;

interface DatabaseManager
{
    public function conectar(string $endereco, string $tipo): PDO;
}
