<?php 

declare(strict_types=1);

namespace Ejemplos\FactoryMethod\conexionBD;

// esta es la interfaz del Producto
interface Conexion {
    
    public function conectar(): void;
    public function desconectar(): void;

}