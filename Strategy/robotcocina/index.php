<?php
declare(strict_types=1);
namespace Ejemplos\Strategy\robotcocina;

require __DIR__ . '/../../../vendor/autoload.php';

// Contexto
 
$batidora= new BatidoraStrategy();
$context = new Context($batidora);
$context->do_action();


// cambiamos el contexto, ahora queremos amasar
$amasadora = new AmasadoraStrategy();
$context->setStrategy($amasadora);
$context->do_action();


// ahora vamos a triturar
$context->setStrategy(new TrituradoraStrategy());
$context->do_action();

