<?php

declare (strict_types=1);

namespace Ejemplos\Builder\recetas;

class RecetaTortillaBuilder implements RecetaBuilder
{
    private string $titulo =   "";
    private array $ingredientes = [];
    private array $instrucciones = [];
    

    public function setTitulo(string $titulo): self
    {
        $this->titulo =  $titulo;
        return $this;
    }
    public function setIngrediente(string $ingrediente): self
    {
        $this->ingredientes[] = $ingrediente;
        return $this;
    }
    public function setInstruccion(string $instruccion): self
    {   
        $this->instrucciones[] = $instruccion;
        return $this;
    }

   
    // método build()
    public function build(): Receta
    {
        return new Receta(
            $this->titulo,
            $this->ingredientes,
            $this->instrucciones);
            
    }

    
}