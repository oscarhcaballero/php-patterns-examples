<?php

declare (strict_types=1);

namespace Ejemplos\Observer\productos;


// Interfaz del Sujeto
interface Subject {
    public function attach(Observer $observer);
    public function detach(Observer $observer);
    public function notify();
}
