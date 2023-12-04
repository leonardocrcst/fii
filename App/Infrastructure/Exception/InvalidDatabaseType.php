<?php

namespace App\Infrastructure\Exception;

class InvalidDatabaseType extends \Exception
{
    public function __construct(string $type)
    {
        parent::__construct("$type: Tipo de banco de dados inválido");
    }
}
