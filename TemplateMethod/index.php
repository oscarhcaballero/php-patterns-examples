<?php
declare(strict_types=1);

namespace Ejemplos\TemplateMethod;

require __DIR__ . "/../../vendor/autoload.php";

use Ejemplos\TemplateMethod\ChildClass;

// Patrón Template Method
// La clase abstracta FatherClass define la estructura y los métodos comunes (abstract protected)
// La clase hija (ChildClass) implementa los métodos específicos (protected)
// Habrá tantas clases hijas como queramos. Cada una de ellas implementará los métodos específicos 
// para que el flujo de trabajo (templateMethod) funcione como la clase hija considere.

$child = new ChildClass(); // creamos el objeto de la clase hija
$child->templateMethod(); // llamamos al Template Method
