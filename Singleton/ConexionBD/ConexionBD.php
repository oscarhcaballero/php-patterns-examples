<?php 
declare(strict_types= 1);
namespace Ejemplos\Singleton\ConexionBD;

use PDO;
use PDOException;

class ConexionBD
{
    private static ?ConexionBD $instancia = null; // Almacena la instancia única de la clase
    private ?PDO $conexion = null; // Almacena la conexión PDO

    // Configuración de la base de datos
    private string $host = "localhost";
    private string $dbname = "mi_base_de_datos";
    private string $usuario = "mi_usuario";
    private string $password = "mi_contraseña";

    // Constructor privado para evitar instancias externas
    private function __construct()
    {
        try {
            $this->conexion = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname}",
                $this->usuario,
                $this->password
            );
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error al conectar a la base de datos: " . $e->getMessage());
        }
    }

    // Método para obtener la instancia única
    public static function getInstancia(): ConexionBD
    {
        if (self::$instancia === null) {
            self::$instancia = new ConexionBD();
        }
        return self::$instancia;
    }

    // Método para obtener la conexión PDO
    public function getConexion(): PDO
    {
        return $this->conexion;
    }

    // Evitar la clonación del objeto
    private function __clone() {}

    // Evitar la deserialización del objeto
    public function __wakeup()
    {
        throw new \Exception("No se permite deserializar una instancia de Singleton.");
    }
}