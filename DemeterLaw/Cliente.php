<?php 
namespace Ejemplos\DemeterLaw;

class Cliente {
    private $orden;
   
    public function __construct(Orden $orden) {
        $this->orden = $orden;
    }
   
    public function getPrecioProducto() {
        // aquí está el problema 
        // vulneramos la Ley de Demeter porque hablamos con Producto , y solo conocemos a la Orden
        // llamamos al método getPrecio de la clase Producto, la cual no conocemos.
        // Conocemos lo que tenemos en los atributos, en este caso tenemos Orden 
        return "Vulnerando Demeter: ". $this->orden->getProducto()->getPrecio(); 
        
    }

    public function getPrecioProductoDemeter() {
        return "Cumpliendo Demeter: ". $this->orden->getPrecioProducto(); // esto implementa la Ley de Demeter
    }

   }