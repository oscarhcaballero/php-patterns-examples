<?php 
declare(strict_types=1);

use Ejemplos\FactoryMethod\guitars\ClassicalGuitarFactory;
use Ejemplos\FactoryMethod\guitars\ElectricGuitarFactory;
use Ejemplos\FactoryMethod\guitars\AcousticGuitarFactory;
use Ejemplos\FactoryMethod\guitars\GuitarFactory;


require "../../../vendor/autoload.php";


// ////////////////   Pasos para fabricar una guitarra

// este método recibe una Fábrica de Guitarras
function clientCode(GuitarFactory $factory)
{
        // llamamos al método Create de la Fábrica inyectada. Es como activar la cadena de montaje de la Fábrica
        $guitarra = $factory->CreateGuitar();
        // llamamos a los métodos de la guitarra creada para ejecutar su lógica de negocio
        echo $guitarra->guitarType();
        echo $guitarra->tune();
        
}
// si queremos una guitarra  clásica...
clientCode(new ClassicalGuitarFactory);
echo PHP_EOL;
// si queremos una guitarra  eléctrica...
echo clientCode(new ElectricGuitarFactory);
echo PHP_EOL;
// si queremos una guitarra  acústica...
echo clientCode(new AcousticGuitarFactory);
echo PHP_EOL;


echo "---------------------".PHP_EOL;

// ////////////////   Pasos para fabricar una guitarra eléctrica
// instanciamos la fábrica concreta ElectricGuitarFactory
$fabrica = new ElectricGuitarFactory();
// llamamos al método Create de esa fábrica el cual devuelve un objeto de ElectricGuitar. Esto es como activar la cadena de montaje de guitarras eléctricas
$guitarra = $fabrica->CreateGuitar(); 
// Ya tenemos la guitarra construida. Ahora podemos llamar a los métodos del objeto ElectricGuitar. Aquí está la lógica de negocio de la guitarra eléctrica
echo $guitarra->guitarType(); 
echo PHP_EOL;

// ////////////////   Pasos para fabricar una guitarra clásica
$fabrica = new ClassicalGuitarFactory;
$guitarra = $fabrica->CreateGuitar();
echo $guitarra->tune(). PHP_EOL;

// ////////////////   Pasos para fabricar una guitarra acústica
$fabrica = new AcousticGuitarFactory;
echo $fabrica->CreateGuitar()->tune(). PHP_EOL;