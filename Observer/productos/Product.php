<?php

declare(strict_types=1);

namespace Ejemplos\Observer\productos;



// Clase Producto (Sujeto Concreto)
class Product implements Subject {
    private $observers = [];
    private $inStock = false;

    // Suscribir un nuevo observador (Cliente)
    public function attach(Observer $observer) {
        $this->observers[] = $observer;
    }

    // Eliminar un observador
    public function detach(Observer $observer) {
        $index = array_search($observer, $this->observers);
        if ($index !== false) {
            unset($this->observers[$index]);
        }
    }

    // Notificar a todos los observadores
    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update("El producto ha vuelto a estar en stock.");
        }
    }

    // Cambiar el estado del producto a "En Stock"
    public function setInStock($status) {
        $this->inStock = $status;
        if ($this->inStock) {
            $this->notify(); // Notificar a los observadores cuando el producto esté disponible
        }
    }

    public function isInStock() {
        return $this->inStock;
    }
}