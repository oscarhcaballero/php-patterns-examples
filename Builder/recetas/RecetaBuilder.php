<?php 
// esta es la clase Constructor
// es una interfaz
/*
    Define la interfaz RecetaBuilder, 
    que especifica los métodos para agregar ingredientes, instrucciones y construir la receta.
*/
declare(strict_types=1);

namespace Ejemplos\Builder\recetas;


interface RecetaBuilder 
{
    public function setTitulo(string $titulo): self;
    public function setIngrediente(string $ingrediente): self;
    public function setInstruccion(string $instruccion): self;

    // método build()
    public function build(): Receta;

}