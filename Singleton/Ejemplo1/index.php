<?php

declare(strict_types=1);
namespace Ejemplos\Singleton\Ejemplo1;
require __DIR__ . "/../../../vendor/autoload.php";

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


// comprobaciones de seguridad
// comprobamos que no se pueda deserializar
$serializado = serialize($singleton1);
$objetoDeserializado = unserialize($serializado);

// si hacemos esto, comprobamos que no se puede clonar
$clonedSingleton = clone $singleton1;