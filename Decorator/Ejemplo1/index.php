<?php 
namespace Ejemplos\Decorator\Ejemplo1;

require_once __DIR__ ."/../../../vendor/autoload.php"; // cargamos las dependencias

use Ejemplos\Decorator\Ejemplo1\Client;



$client = new Client();

// Result: #quanton81

//Concrete Component:	1000
//Concrete Decorator 1:	500
//Concrete Decorator 2:	600
//Client:               2100

