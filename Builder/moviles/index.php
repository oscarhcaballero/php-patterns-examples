<?php
declare(strict_types=1);

namespace Ejemplos\Builder\moviles;

require __DIR__."/../../../vendor/autoload.php";



$builderXiaomi = new XiaomiBuilder(); // builder con la implementacion concreta, en este caso con Xiaomi
$director = new Director($builderXiaomi); // director inyectando el builder concreto
echo "El builder está vacío, por ahora...";var_dump($builderXiaomi);echo PHP_EOL;


$xiaomi = $director->montarMovil("XIAOMI Redmi Note 13C", 
                        "Intel X1", 
                        "Aluminio galvanizado", 
                        "13 pulgadas"); // el director rellena al builder con los datos y devuelve el Producto

echo "El director con el builder relleno: "; var_dump($director); echo PHP_EOL;
     
echo "El builder: ";var_dump($builderXiaomi);echo PHP_EOL;

echo "El producto Movil: ";var_dump($xiaomi);echo PHP_EOL;


//Esto no haría falta, pero se puede hacer. Ya se hace el build() en montarMovil()
//$miMovil = $builderXiaomi->build();
//echo "El producto Movil: ";var_dump($miMovil);echo PHP_EOL;
//$miMovil->getMovil();

// obtenemos la presentación del producto
$xiaomi->getMovil();


// ----------------------------------------
// vamos a hacer otro móvil

$director->setBuilder(new AppleBuilder);
$iPhone = $director->montarMovil("iPhone 15", 
                                "Chip IOS", 
                                "Carcasa de plastico", 
                                "10 pulgadas");
$iPhone->getMovil();

echo $iPhone; //usa el método __toString

