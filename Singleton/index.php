<?php

declare(strict_types=1);
namespace Ejemplos\Singleton;
require __DIR__ . "/../../vendor/autoload.php";

// esto no se puede hacer por que el comstructor de la clase Singleton es privado
// $s1 = new Singleton(); 

// Intentamos obtener la instancia.
$singleton1 = Singleton::getInstance();
$singleton1->doSomething();

// Intentamos obtener otra instancia (será la misma).
$singleton2 = Singleton::getInstance();
$singleton2->doSomething();

// Verificamos que ambas variables tienen la misma instancia.
if ($singleton1 === $singleton2) {
    echo "Ambas son la misma instancia\n";
}

// si hacemos esto, comprobamos que El objeto clonado NO es la misma instancia
// $clonedSingleton = clone $singleton1;

