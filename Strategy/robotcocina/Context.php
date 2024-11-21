<?php
declare (strict_types=1);

namespace Ejemplos\Strategy\robotcocina;

// Contexto
// esto no se toca nunca más, por mucho que crezcan las estrategias
// con lo que desacoplamos el contexto con las implementaciones 

class Context {
 
    // promocionamos la propiedad al constructor
    // inyectamos la interfaz de estrategia
    public function __construct(private Strategy $strategy){

    }

    // este setter permite cambiar la estrategia en tiempo de ejecución
    public function setStrategy(Strategy $strategy) {
        $this->strategy = $strategy;
    }


    // aquí viene el método de la lógica de negocio
    // el que ejecuta la estrategia que se ha establecido en el Contexto
    public function do_action():void {
        $resultado = $this->strategy->execute();

        echo $resultado;
    }

}