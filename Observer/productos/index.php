<?php
declare(strict_types=1);

require "../../../vendor/autoload.php";

use Ejemplos\Observer\productos\Product;
use Ejemplos\Observer\productos\Customer;

/*
Imaginemos que tenemos una tienda en línea, y los clientes pueden suscribirse 
para recibir notificaciones cuando un producto vuelva a estar en stock. 
Aquí, el producto sería el "sujeto", y los clientes serían los "observadores".

Pasos del ejemplo:
Sujeto (Producto): El producto puede tener observadores que se suscriben a sus actualizaciones.
Observador (Cliente): Los clientes desean recibir notificaciones cuando el producto esté en stock.

Implementación en PHP:
Interfaz del Sujeto: Define las operaciones para agregar, eliminar y notificar observadores.
Interfaz del Observador: Define la operación que realizarán los observadores cuando reciban una notificación.
Implementación del Producto (Sujeto): Cuando cambie el estado del producto (por ejemplo, cuando vuelva a estar en stock), notificará a los observadores (clientes).
Implementación del Cliente (Observador): Los clientes recibirán notificaciones cuando el estado del producto cambie.

Ventajas del Patrón Observer:
Desacopla el sujeto de los observadores.
Los observadores pueden suscribirse y eliminarse dinámicamente.
Se puede tener cualquier cantidad de observadores escuchando los cambios en el sujeto.

*/

// Uso del Patrón Observer

// Crear el producto (Sujeto Concreto)
$product = new Product();

// Crear clientes (observadores concretos)
$customer1 = new Customer("Juan");
$customer2 = new Customer("María");
$customer3 = new Customer("Óscar");

// Los clientes se suscriben para recibir notificaciones del producto
$product->attach($customer1);
$product->attach($customer2);
$product->attach($customer3);

// El producto vuelve a estar en stock
$product->setInStock(true);

// Salida esperada:
// Notificación para Juan: El producto ha vuelto a estar en stock.
// Notificación para María: El producto ha vuelto a estar en stock.


echo PHP_EOL;
$product->detach($customer2);
$product->setInStock(false);
var_dump($product->isInStock());

echo PHP_EOL;
$product->setInStock(true);
var_dump($product->isInStock());