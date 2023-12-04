<?php

namespace App\Domain\Repository;

interface DatabaseObject
{
    public function getFields(): array;

    public function getValues(): array;
}
