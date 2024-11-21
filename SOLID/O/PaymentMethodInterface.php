<?php

declare(strict_types=1);
namespace Ejemplos\SOLID\O;

interface PaymentMethodInterface
{
    public function processPayment(): string;
}
