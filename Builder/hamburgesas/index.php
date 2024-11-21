<?php
declare (strict_types=1);
namespace Ejemplos\Builder\hamburgesas;

require __DIR__."/../../../vendor/autoload.php";

// Cliente

// el builder tiene la implementación de la interfaz
// en este ejemplo solo necesitamos una impplementación para realizar todo tipo de hamburguesas
$builder = new HamburguesaBuilderConcreto();

// el director es el que tiene los métodos donde se especifican
// los diferentes tipos de hamburguesas que vamos a obtener.
$director = new HamburguesaDirector($builder);

// llamamos a uno de esos métodos para elaborar un tipo de hamburguesa
$director->construirHamburguesaConQueso(); // Se rellena el objeto Hamburguesa con los datos específicos
$hamburguesa = $builder->construir(); // se retorna el bjeto Hamburguesa
echo $hamburguesa . "\n"; //usa el método __toString
// -------------------------


// llamamos a uno de otro de los métodos para elaborar otro tipo de hamburguesa
$director->construirHamburguesaConTodo(); // Se rellena el objeto Hamburguesa con los datos específicos
$hamburguesa = $builder->construir(); //devuelve el objeto Hamburguesa
echo $hamburguesa . "\n"; //usa el método __toString


/**
 * NOTAS:  con esta implementación del patrón Builder sólo necesitamos
 * crear una implementación de la interfaz.
 * 
 * Es en el Director, donde especificamos las distintas formas de modificar
 * el estado del Producto (Hamburguesa en este ejemplo)
 * 
 * Si necesitamos crear otro tipo de Producto, bastaría con añadir otro método al Director 
 * 
 * Esta implementación es ideal para cuando tenemos Productos con propiedades iguales
 * pero que el valor de sus propiedades cambian dependiendo de cada producto que realicemos.
 */
    
