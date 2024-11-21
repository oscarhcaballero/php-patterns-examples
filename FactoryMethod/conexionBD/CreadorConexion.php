<?php

declare(strict_types=1);

namespace Ejemplos\FactoryMethod\conexionBD;

abstract class CreadorConexion {

    abstract public function crearConexion(): Conexion;

    public function gestionarConexion(): void {
        $con = $this->crearConexion();
        $con->conectar();
        // Aquí se pueden realizar operaciones con la base de datos
        
        
        $con->desconectar();
    }


}