<?php

declare(strict_types=1);

namespace Ejemplos\Observer\met_station;

use function sprintf;

use const PHP_EOL;

/* implementación concreta del Observer */
class Display implements Observer
{
    public function update(float $temperature): void
    {
        echo sprintf('Temperature has changed: %s°C', $temperature) . PHP_EOL;
    }
}
