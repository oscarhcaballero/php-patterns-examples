<?php
    namespace Ejemplos\DemeterLaw;

    require __DIR__ . "/../../vendor/autoload.php";


    $producto   = new Producto(100);    // A
    $orden      = new Orden($producto); // B
    $cliente    = new Cliente($orden);  // C

    echo $producto->getPrecio(). PHP_EOL;
    var_dump($orden->getProducto()). PHP_EOL;
    
   
    echo $cliente->getPrecioProducto(). PHP_EOL;
    echo $cliente->getPrecioProductoDemeter(). PHP_EOL;

