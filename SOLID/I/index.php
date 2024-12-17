<?php 

/*
    El Principio de Segregación de Interfaces (Interface Segregation Principle, ISP) 
    establece que "los clientes no deberían verse obligados a depender de interfaces que no usan". 
    
    Esto significa que es mejor dividir una interfaz grande en interfaces más pequeñas y específicas, 
    de modo que cada clase solo implemente lo que necesita.

*/

// Sin Segregación de Interfaces (Violación del ISP)

interface Worker {
    public function work();
    public function eat();
}

class HumanWorker implements Worker {
    public function work() {
        echo "Trabajando...\n";
    }

    public function eat() {
        echo "Comiendo...\n";
    }
}

class RobotWorker implements Worker {
    public function work() {
        echo "Trabajando...\n";
    }

    // Violación: Un robot no necesita comer, pero está obligado a implementar el método `eat`
    public function eat() {
        throw new Exception("Los robots no comen");
    }
}




// Aplicando el Interface Segregation Principle
// Separamos las responsabilidades en interfaces más específicas

interface Workable {
    public function work();
}

interface Eatable {
    public function eat();
}

// Los humanos trabajan y comen, implementan ambas interfaces
class ISP_HumanWorker implements Workable, Eatable {
    public function work() {
        echo "Trabajando...\n";
    }

    public function eat() {
        echo "Comiendo...\n";
    }
}

// Los robots solo trabajan, implementan solo Workable
class ISP_RobotWorker implements Workable {
    public function work() {
        echo "Trabajando...\n";
    }
}

// Usamos las interfaces según corresponda
function manageWorker(Workable $worker) {
    $worker->work();
}

function feedWorker(Eatable $worker) {
    $worker->eat();
}

$human = new ISP_HumanWorker();
$robot = new ISP_RobotWorker();

echo PHP_EOL. "Humano:". PHP_EOL; 
manageWorker($human); // Trabajando...

echo PHP_EOL. "Robot:". PHP_EOL; 
manageWorker($robot); // Trabajando...

echo PHP_EOL. "Humano:". PHP_EOL; 
feedWorker($human); // Comiendo...

echo PHP_EOL. "Robot:". PHP_EOL; 
feedWorker($robot); // Esto daría un error porque RobotWorker no implementa Eatable



