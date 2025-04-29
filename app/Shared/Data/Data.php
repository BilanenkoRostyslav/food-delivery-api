<?php

namespace App\Shared\Data;

interface Data
{
    public function toArray(): array;

    public function getFilteredArray(): array;
}
