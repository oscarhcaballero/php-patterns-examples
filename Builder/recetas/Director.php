<?php

declare (strict_types=1);
namespace Ejemplos\Builder\recetas;

use function PHPUnit\Framework\isNull;

//Este es el Director del Patrón Builder
/*
    El director orquesta la construcción de la receta utilizando un builder concreto. 
    En este caso, se centra en la construcción de una receta.

    Se parece al Contexto del patrón Strategy, pero no es lo mismo

    Puede recibir mediante el constructor una implemtentación de la interfaz
    También tiene un método para poder modificar dicha interfaz en tiempo de ejecución
    Tiene un método que recoge ciertos datos en parámetros y los carga en las propiedades de la implementación

    O sea, el Director se encarga de cargar con datos concretos a una implementación concreta.
*/

class Director
{
    private RecetaBuilder $builder;

    // Inyectar el builder a través del constructor
    public function __construct(RecetaBuilder $builder)
    {
        $this->builder = $builder;
    }
        

    public function setBuilder(RecetaBuilder $builder)
    {
        $this->builder = $builder;
    }

    // este método sabe el orden de construcción del Builder concreto
    public function elaborarReceta(string $titulo, array $ingredientes, array $instrucciones, string $descripcion = null)
    {
        $this->builder->setTitulo($titulo);

        foreach ($ingredientes as $ingrediente) {
            $this->builder->setIngrediente($ingrediente);
        }

        foreach ($instrucciones as $instruccion) {
            $this->builder->setInstruccion($instruccion);
        }

    }
}
