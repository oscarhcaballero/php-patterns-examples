<?php
declare(strict_types=1);

namespace Ejemplos\Prototype\clonador;

require __DIR__ . "/../../../vendor/autoload.php";


// Instancia original de MusicBookPrototype
$musicBook = new MusicBookPrototype();
$musicBook->setTitle("Johann Sebastian Bach");
$musicBook->setCategory("Music");
var_dump($musicBook);

// Instancia original de FantasyBookPrototype
$fantasyBook = new FantasyBookPrototype();
$fantasyBook->setTitle("The Hobbit");
$fantasyBook->setCategory("Fantasy");


// clonamos el libro de música
$cloneMusicBook = clone $musicBook;
var_dump($cloneMusicBook); // se clona idéntico

$cloneFantasyBook = clone $fantasyBook;
var_dump($cloneFantasyBook); // The Hobbit - Edición Clonada
