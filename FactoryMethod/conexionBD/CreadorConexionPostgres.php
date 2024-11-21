<?php 

declare(strict_types=1);

namespace Ejemplos\FactoryMethod\conexionBD;


class CreadorConexionPostgres extends CreadorConexion {

    public function crearConexion(): Conexion {
        return new ConexionPostgres();
    }
}