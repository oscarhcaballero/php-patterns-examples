<?php

declare(strict_types=1);
namespace Ejemplos\SOLID\O;


require __DIR__ . '/../../../vendor/autoload.php';



// Open / Close Principle
// Una entidad de Software debe quedar Abierta para su ampliación / Cerrada para su modificación
// O sea, que para añadir funcionalidades debemos escribir nuevo código, no modificar lo que hay hecho
// Patrón STRATEGY

// $paypalIpn = new PaypalIpn();
$cardIpn = new CardIpn; // esto es una estrategia en el patrón STRATEGY

$paymentManager = new PaymentManager($cardIpn); // cargamos el Contexto con la Estrategia
$paymentManager->process(); // ejecutamos la estrategia

//ejecutamos otra estrategia
$paymentManager = new PaymentManager(new PaypalIpn); // cargamos el Contexto con la Estrategia
$paymentManager->process(); // ejecutamos la estrategia
