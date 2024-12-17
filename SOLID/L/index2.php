<?php
/*
    Ejemplo de Violación del LSP:
    Si el Square heredara de Rectangle directamente y tratara de redefinir los métodos para acomodar sus necesidades, podría causar problemas.
*/
class Rectangle {
    protected float $width;
    protected float $height;

    public function setWidth(float $width) {
        $this->width = $width;
    }

    public function setHeight(float $height) {
        $this->height = $height;
    }

    public function getArea(): float {
        return $this->width * $this->height;
    }
}

class Square extends Rectangle {
    public function setWidth(float $width) {
        $this->width = $width;
        $this->height = $width; // Fuerza la altura igual al ancho
    }

    public function setHeight(float $height) {
        $this->height = $height;
        $this->width = $height; // Fuerza el ancho igual a la altura
    }
}

$rectangle = new Rectangle();
$rectangle->setWidth(4);
$rectangle->setHeight(5);
echo "Rectángulo: ". $rectangle->getArea() .PHP_EOL; // 20

$square = new Square();
$square->setWidth(4); // Esto también cambia la altura
$square->setHeight(5); // Esto también cambia el ancho
echo  "Cuadrado: ".$square->getArea() .PHP_EOL; // Resultado inesperado

