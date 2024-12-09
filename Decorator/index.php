<?php 
namespace Ejemplos\Decorator;
require_once __DIR__ . "/../../vendor/autoload.php";


use Ejemplos\Decorator\Client;

$client = new Client();

// Result: #quanton81

//Concrete Component:	1000
//Concrete Decorator 1:	500
//Concrete Decorator 2:	500
//Client:               2000

