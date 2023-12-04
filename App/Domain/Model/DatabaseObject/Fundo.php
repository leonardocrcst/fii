<?php

namespace App\Domain\Model\DatabaseObject;

use App\Domain\Exceptions\FieldNotFound;
use App\Domain\Repository\DatabaseObject;

/**
 * @property string|null $url
 * @property string|null $uuid
 * @property string $sigla
 * @property float $valorCotaCaptacao
 * @property string|null $nome
 */
class Fundo implements DatabaseObject
{
    /**
     * @var array
     */
    protected array $properties = [];

    public function __set(string $campo, string|int|float|null $valor)
    {
        $this->properties[$campo] = $valor;
    }

    /**
     * @throws FieldNotFound
     */
    public function __get(string $campo): string|int|float|null
    {
        if (isset($campo, $this->properties)) {
            return $this->properties[$campo];
        }
        throw new FieldNotFound($campo);
    }

    public function getFields(): array
    {
        return array_keys($this->properties);
    }

    public function getValues(): array
    {
        return array_values($this->properties);
    }
}
