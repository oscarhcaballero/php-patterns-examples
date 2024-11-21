<?php
// clase Producto(es el resultado final) en el Patrón Builder
/*
    Define la clase Receta que es el producto final. 
    Utiliza promoción de propiedades para inicializar ingredientes e instrucciones 
    y proporciona métodos para acceder a ellos, manteniendo la inmutabilidad.
*/

declare (strict_types=1);

namespace Ejemplos\Builder\recetas;

class Receta {

    public function __construct(
        private string $titulo,
        private array $ingredientes=[], 
        private array $instrucciones=[]
    )   {}


    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function getIngredientes(): array 
    {
        return $this->ingredientes;

    }


    public function getInstrucciones(): array 
    {
        return $this->instrucciones;
    }

    public function mostrarReceta()
    {
        echo  PHP_EOL;
        echo "-----------------------------------------------". PHP_EOL;
        echo " RECETA: ". $this->titulo. PHP_EOL;
        echo "-----------------------------------------------". PHP_EOL;

        echo PHP_EOL;
        echo "Ingredientes". PHP_EOL;
        echo "---------------------------------". PHP_EOL;

        foreach ($this->ingredientes as $ingrediente) {
            echo " - ". $ingrediente. PHP_EOL;

        }
        echo PHP_EOL;
        echo "Instrucciones". PHP_EOL;
        echo "---------------------------------". PHP_EOL;

        foreach ($this->instrucciones as $instruccion) {
            echo " - ". $instruccion. PHP_EOL;

        }  


    }


}

