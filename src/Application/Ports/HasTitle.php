<?php

declare(strict_types=1);

namespace App\Application\Ports;

interface HasTitle
{
    public function getTitle(): string;
}
