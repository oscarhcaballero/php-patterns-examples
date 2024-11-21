<?php 
// esta es la clase Constructor Concreto
// es una implementación de la interfaz
/*
    Implementa la interfaz RecetaBuilder. 
    Se encarga de agregar ingredientes e instrucciones, y de construir y devolver una instancia de Receta.
*/

declare(strict_types=1);

namespace Ejemplos\Builder\recetas;

// Clase concreta del Builder
// En este tipo de implementación tenemos las propiedades del objeto Producto
// y vamos a establecer sus propiedades directamente

class RecetaPastelBuilder implements RecetaBuilder 
{
    private $titulo = "";
    private array $ingredientes = [];
    private array $instrucciones = [];

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;
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