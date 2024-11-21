<?php 

namespace Ejemplos\DemeterLaw;

class Orden {
 private $producto;

 public function __construct(Producto $producto) {
    $this->producto = $producto;
 }

 public function getProducto() {
    return $this->producto;
 }

 // este método implementa la Ley de Demeter
 //   ya que accede al método getPrecio() de la clase Producto, que es su amiga directa
 public function getPrecioProducto() {
    return $this->producto->getPrecio();
}


}