<?php
declare(Strict_types=1);

require "../../../vendor/autoload.php";
use Ejemplos\FactoryMethod\creator\Creator;
use Ejemplos\FactoryMethod\creator\ConcreteCreator1;
use Ejemplos\FactoryMethod\creator\ConcreteCreator2;


/**
 * The client code works with an instance of a concrete creator, albeit through
 * its base interface. As long as the client keeps working with the creator via
 * the base interface, you can pass it any creator's subclass.
 */
function clientCode(Creator $creator)
{
    // ...
    echo "Client: I'm not aware of the creator's class, but it still works.\n"
        . $creator->someOperation();
    // ...
}

/**
 * The Application picks a creator's type depending on the configuration or
 * environment.
 */
echo "App: Launched with the ConcreteCreator1.\n";
clientCode(new ConcreteCreator1());
echo "\n\n";

echo "App: Launched with the ConcreteCreator2.\n";
clientCode(new ConcreteCreator2());
echo "\n\n";


echo "\n\n";
// otra forma de ejecutar el código
    // instanciamos un creador concreto
    $creador1 = new ConcreteCreator1();
    // obtenemos el objeto de producto1
    $producto1 = $creador1->factoryMethod();
    //ejecutamos la lógica de negocio de ese producto1
    echo $producto1->operation();
    echo "\n\n";
    //lo mismo pero directamente, a través del Creador
    echo $creador1->someOperation();

