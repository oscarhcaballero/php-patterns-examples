<?php

declare(strict_types=1);
namespace Ejemplos\SOLID\O;

// implementa la interfaz
class PaypalIpn implements PaymentMethodInterface
{
    public function processPayment(): string
    {
        // codigo
        return "Procesando pago por Paypal...";
    }
}
