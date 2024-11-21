<?php 

declare(strict_types=1);

namespace Ejemplos\FactoryMethod\conexionBD;

use PDO;
use PDOException;

// esta es la interfaz del Producto
class ConexionPostgres implements Conexion {
    
    private $conexion;

    public function conectar(): void {
    
        // logica de negocio del producto concreto
        // Configuración de la conexión PostgreSQL
        $host = "localhost";
        $dbname = "mi_base_datos";
        $user = "postgres";
        $password = "password";
         
        try {
            $this->conexion = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
            echo "Conectado a PostgreSQL exitosamente.\n";
        } catch (PDOException $e) {
            echo "Error de conexión PostgreSQL: " . $e->getMessage() . "\n";
        }
     
        
    }

    public function desconectar(): void {
        $this->conexion = null;
        echo "Desconectado de PostgreSQL.\n";
    }
    
    
}