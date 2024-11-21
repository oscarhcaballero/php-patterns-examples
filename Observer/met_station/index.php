<?php

declare(strict_types=1);
use Ejemplos\Observer\met_station\Display;
use Ejemplos\Observer\met_station\WeatherStation;

require "../../../vendor/autoload.php";

/*
Ejemplo del patrón Observer para tener una estación meteorológica (Subject) que notifica la temperatura a diferentes observadores.

La estacíón meteorológica registra/elimina a los diferentes observadores en una matriz de Observers
Cuando hay cambios de temperatura, la estación notifica a todos los observadores registrados.

Lo único que hacen los observadores es tener un método que recoge el valor de la temperatura como parámetro y lo imprime por pantalla.
*/

// instanciamos el Subject concreto
$weatherStation = new WeatherStation();

// instanciamos los Observers concretos
$display1 = new Display();
$display2 = new Display();

// registramos a los observers en el subject
$weatherStation->registerObserver($display1);
$weatherStation->registerObserver($display2);


ob_start(); // habilitamos el buffer de salida
// establecemos una temperatura
$weatherStation->setTemperature(10);
$output= ob_get_clean();  //recogemos el buffer y lo limpiamos para la próxima vez
echo "Imprimimos el buffer: ".PHP_EOL. $output; // imprimimos lo que recogimos del buffer

echo PHP_EOL;
$weatherStation->removeObserver($display2);
$weatherStation->setTemperature(12);
