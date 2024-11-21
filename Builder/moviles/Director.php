<?php

// Director de orquesta, se encarga de organizar la construcción del producto final

declare(strict_types=1);
namespace Ejemplos\Builder\moviles;

class Director{

    public function __construct (private MovilBuilder $builder)
    {
    }

    public function setBuilder(MovilBuilder $builder) 
    {
        $this->builder = $builder;
    }


    public function montarMovil(string $nombre, string $chip, string $carcasa, string $pantalla): Movil
    {
        return $this->builder
                ->setNombre($nombre)
                ->setChip($chip)
                ->setCarcasa($carcasa)
                ->setPantalla($pantalla)
                ->build();
                

    }

}