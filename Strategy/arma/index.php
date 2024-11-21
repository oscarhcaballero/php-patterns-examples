<?php
declare(strict_types=1);
namespace Ejemplos\Strategy\arma;

require __DIR__ . '/../../../vendor/autoload.php';

// Contexto: en este caso es el arma
 
// cargamos el arma con cargadores de 5mm
$balas5mm= new Balas5mmStrategy();
$context = new Context($balas5mm);
$context->do_action();


// cambiamos el contexto, ahora 
// cargamos el arma con cargadores de 7mm
$balas7mm = new Balas7mmStrategy();
$context->setStrategy($balas7mm);
$context->do_action();


// cambiamos el contexto, ahora 
// cargamos el arma con cargadores de 22mm
$context->setStrategy(new Balas22mmStrategy());
$context->do_action();

