<?php
declare (strict_types= 1);
namespace Ejemplos\Decorator\Ejemplo2;

// añadimos el autoload para las dependencias
require_once __DIR__ . "/../../../vendor/autoload.php";

use Ejemplos\Decorator\Ejemplo2\src\Components\BasicProduct;
use Ejemplos\Decorator\Ejemplo2\src\Decorators\PackagingDecorator;
use Ejemplos\Decorator\Ejemplo2\src\Decorators\WarrantyDecorator;

// creamos un Producto
$product = new BasicProduct("Teléfono móvil", 200.20);

// envolvemos al producto con el embalaje
$productWithPackaging = new PackagingDecorator($product);

// envolvemos al producto con la garantía
$productWithWarranty = new WarrantyDecorator($product);

// envolvemos al producto que ya tiene embalaje con la garantía
$productWithPackagingAndWarranty = new WarrantyDecorator($productWithPackaging);


// producto sin decorar
echo $product->getDescription() ." : ". $product->getPrice(). PHP_EOL;

// producto con embalaje
echo $productWithPackaging->getDescription() ." : ". $productWithPackaging->getPrice(). PHP_EOL;

// producto con garantía
echo $productWithWarranty->getDescription() ." : ". $productWithWarranty->getPrice(). PHP_EOL;

// producto con embalaje + garantía
echo $productWithPackagingAndWarranty->getDescription() ." : ". $productWithPackagingAndWarranty->getPrice(). PHP_EOL;



