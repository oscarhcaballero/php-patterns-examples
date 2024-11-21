<?php

declare(strict_types=1);

namespace Ejemplos\Observer\met_station;

interface Observer
{
    public function update(float $temperature): void;
}
