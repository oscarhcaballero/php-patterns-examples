<?php 

declare(strict_types=1);

namespace Ejemplos\FactoryMethod\conexionBD;


class CreadorConexionMySQL extends CreadorConexion {

    public function crearConexion(): Conexion {

        return new ConexionMySQL();

    }
}
