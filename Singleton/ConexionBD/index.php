<?php 
declare(strict_types= 1);
namespace Ejemplos\Singleton\ConexionBD;

require_once __DIR__ . "/../../../vendor/autoload.php";

use PDOException;
use Ejemplos\Singleton\ConexionBD\ConexionBD;


echo "Ejemplo de uso del Patrón Singleton para crear una conexión PDO a Base de datos".PHP_EOL;


// Uso del Singleton para obtener la conexión
try {
    $conexion = ConexionBD::getInstancia()->getConexion();
    echo "Conexión exitosa a la base de datos." . PHP_EOL;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}
