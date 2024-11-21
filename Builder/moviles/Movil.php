<?php
declare (strict_types=1);

namespace Ejemplos\Builder\moviles;

class Movil
{
    public function __construct(
        private string $nombre,
        private string $chip,
        private string $carcasa,
        private string $pantalla
    ) {}

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getChip(): string
    {
        return $this->chip;
    }

    public function getCarcasa(): string
    {
        return $this->carcasa;
    }

    public function getPantalla(): string
    {
        return $this->pantalla;
    }

    public function getMovil()
    {
        echo  PHP_EOL;
        echo "-----------------------------------------------". PHP_EOL;
        echo " MOVIL: ". $this->nombre. PHP_EOL;
        echo "-----------------------------------------------". PHP_EOL;
        echo " - CHIP: ". $this->chip. PHP_EOL;
        echo " - CARCASA: ". $this->carcasa. PHP_EOL;
        echo " - PANTALLA: ". $this->pantalla. PHP_EOL;
        echo PHP_EOL;


    }

    public function __toString(): string
    {
        return " MOVIL: ". $this->nombre . 
                " / - CHIP: ". $this->chip.
                " - CARCASA: ". $this->carcasa.
                " - PANTALLA: ". $this->pantalla.
                PHP_EOL;
    }
}

