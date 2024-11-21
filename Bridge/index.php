<?php

declare (strict_types=1);

require "../../vendor/autoload.php";

/*
    En el contexto del patrón Bridge, una abstracción es una capa de lógica 
    que define el comportamiento general o la funcionalidad de alto nivel de un sistema 
    sin preocuparse de los detalles de cómo se implementa esa funcionalidad. 
    
    La abstracción se enfoca en lo que hace un objeto, mientras que la implementación se encarga de cómo lo hace.

    La abstracción no realiza directamente las operaciones específicas 
    (como generar un reporte en PDF o HTML), sino que delega esa responsabilidad a un implementador. 
    
    El implementador es el encargado de llevar a cabo los detalles de la operación.

    La clase abstracta Abstraccion actúa como la capa de alto nivel que define qué operación se debe realizar 
    pero no decide cómo se hará.

*/

use Ejemplos\Bridge\AbstraccionRefinada1;
use Ejemplos\Bridge\ImplementadorConcretoA;
use Ejemplos\Bridge\AbstraccionRefinada2;
use Ejemplos\Bridge\ImplementadorConcretoB;


$impA = new ImplementadorConcretoA();
$abstraccion1 = new AbstraccionRefinada1($impA);
echo $abstraccion1->Operacion();

$impB = new ImplementadorConcretoB();
$abstraccion2 = new AbstraccionRefinada2($impB);
echo $abstraccion2->Operacion();


