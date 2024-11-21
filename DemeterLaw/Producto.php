<?php
namespace Ejemplos\DemeterLaw;

class Producto {
 
 public function __construct(private $precio) {
    $this->precio = $precio;
 }

 public function getPrecio() {
    return $this->precio;
 }
}