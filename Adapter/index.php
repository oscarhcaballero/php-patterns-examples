<?php 
//cliente
declare(strict_types=1);

namespace Ejemplos\Adapter;

require __DIR__."/../../vendor/autoload.php";

echo "-----------------  ADAPTER --------------\n";


// Código con problemas de acoplamiento
/*
class PagoAntiguo {
    public function realizarPago($monto) {
        echo "**Procesando el pago de: $monto mediante el sistema antiguo.\n";
    }
}

class Cliente {
    public function procesarPago($monto) {
        // Lógica para decidir qué sistema usar
        if ($monto < 1000) {
            $pago = new PagoAntiguo();
            $pago->realizarPago($monto);
        } else {
            echo "**Procesando el pago de: $monto mediante el nuevo sistema de pagos.\n";
        }
    }
}

// Ejecución del código espagueti con fuerte acoplamiento
$sistema = new Cliente();
$sistema->procesarPago(500);  // Usa el sistema antiguo
$sistema->procesarPago(1500); // Usa el sistema nuevo
*/

// Uso del sistema con el adaptador
// Para el sistema antiguo
$sistemaAntiguo = new SistemaAntiguo();
$adaptador = new SistemaAntiguoAdapter($sistemaAntiguo);
$cliente = new Cliente($adaptador);
$cliente->ejecutarOperacion(500);  // Usa el adaptador del sistema antiguo

// Para el sistema moderno
$sistemaNuevo = new SistemaNuevo();
$cliente = new Cliente($sistemaNuevo);
$cliente->ejecutarOperacion(1500);  // Usa el sistema nuevo