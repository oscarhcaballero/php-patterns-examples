<?php
/*
    El principio de sustitución de Liskov (Liskov Substitution Principle, LSP) 
    establece que una clase derivada debe poder ser usada en lugar de su clase base sin alterar el comportamiento del programa. 
    
    Esto significa que las subclases deben cumplir con el contrato establecido por la clase base.
*/

//ejemplo Cumpliendo LSP

// Clase base
class Shape {
    public function getArea(): float {
        // La clase base puede no tener implementación concreta
        throw new Exception("Debe implementarse en la subclase");
    }
}

// Subclase: Rectángulo
class Rectangle extends Shape {
    protected float $width;
    protected float $height;

    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(): float {
        return $this->width * $this->height;
    }
}

// Subclase: Cuadrado (cumple con LSP)
class Square extends Shape {
    protected float $side;

    public function __construct(float $side) {
        $this->side = $side;
    }

    public function getArea(): float {
        return $this->side * $this->side;
    }
}

// Función que utiliza Shape
function printArea(Shape $shape) {
    echo "El área es: " . $shape->getArea() . PHP_EOL;
}

/*  
    Uso y explicación
    Clase base Shape: Define el contrato que todas las figuras deben cumplir, en este caso, el método getArea().
    Subclase Rectangle: Implementa el contrato calculando el área como ancho × altura.
    Subclase Square: También implementa el contrato, pero calcula el área como lado × lado.
    Cumplimiento del LSP: Tanto Rectangle como Square pueden sustituir a la clase base Shape en la función printArea, sin que el programa se vea afectado.
*/
$rectangle = new Rectangle(4, 5);
$square = new Square(4);

printArea($rectangle); // El área es: 20
printArea($square);    // El área es: 16





