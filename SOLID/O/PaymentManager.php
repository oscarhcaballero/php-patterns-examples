<?php

declare(strict_types=1);
namespace Ejemplos\SOLID\O;


class PaymentManager
{
    /*
    //antes de cumplir Open/Close Principal (Principio Abierto/Cerrado)
    // PROBLEMA:
    // vemos que al constructor se le inyecta un objeto de PaypalIpn.
    // ¿Y si ahora queremos otro método de pago? pues tendríamos que modificar bastante el código.
    //
    // SOLUCION:
    // Para solucionar esto, creamos una interfaz, y luego le pasamos al constructor su implementación, con lo que ya no tendremos que modificar esta clase
    // cada vez que cambiemos de método de pago. Esto es POLIMORFISMO


    protected $paypal;

    public function __construct(PaypalIpn $paypal) {
        $this->paypal = $paypal;

    }

    public function process() {
        $this->paypal->processPayment();

        // codigo

    }
    */

    // Después de cumplir Open/Close Principle
    // Además, estamos implementando el patrón STRATEGY
    protected $paymentMethodInterface;

    public function __construct(PaymentMethodInterface $paymentMethodInterface)
    {
        $this->paymentMethodInterface = $paymentMethodInterface;
    }

    public function process(): void
    {
        echo $this->paymentMethodInterface->processPayment();

        // codigo
    }
}
