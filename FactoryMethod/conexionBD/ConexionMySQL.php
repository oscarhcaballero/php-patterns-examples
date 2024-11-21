<?php 

declare(strict_types=1);

namespace Ejemplos\FactoryMethod\conexionBD;
use PDO;
use PDOException;

// esta es la interfaz del Producto
class ConexionMySQL implements Conexion {
    
    private $conexion;


    public function conectar(): void {
    
        // Configuración de la conexión MySQL
        $host = "localhost";
        $dbname = "mi_base_datos";
        $user = "root";
        $password = "password";


        // logica de negocio del producto concreto
         try {
            $this->conexion = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
            echo "Conectado a MySQL exitosamente.\n";
        } catch (PDOException $e) {
            echo "Error de conexión MySQL: " . $e->getMessage() . "\n";
        }

       
    }

    public function desconectar(): void {
        $this->conexion = null;
        echo "Desconectado de MySQL.\n";
    }
    
}