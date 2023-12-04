<?php

namespace App\Domain\Exceptions;

class FieldNotFound extends \Exception
{
    public function __construct(string $field)
    {
        parent::__construct("$field: campo não encontrado");
    }
}
