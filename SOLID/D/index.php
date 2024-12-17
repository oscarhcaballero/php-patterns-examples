<?php

/*
    Código que NO cumple el Principio de Inversión de Dependencias
    En este caso, UserService depende directamente de MySQLDatabase, 
    lo que rompe el principio de inversión de dependencias. 
    Si queremos cambiar la base de datos a, por ejemplo, PostgreSQLDatabase, tendríamos que modificar la clase UserService.
*/

class MySQLDatabase {
    public function connect() {
        return "Conexión a MySQL establecida.";
    }
}

class UserService {
    private $db;

    public function __construct() {
        $this->db = new MySQLDatabase(); // Dependencia directa a un módulo de bajo nivel
    }

    public function getUser() {
        return $this->db->connect();
    }
}

// Uso
$service = new UserService();
echo "NO cumple DIP (Principio de Inversión de Dependencias): ". PHP_EOL; 
echo $service->getUser() .PHP_EOL;




/*
    Ejemplo que SI cumple DIP
    El módulo de alto nivel (UserService) y los módulos de bajo nivel (MySQLDatabase, PostgreSQLDatabase) 
    dependen de una abstracción común (DatabaseInterface), cumpliendo con el principio de inversión de dependencias.
*/

// 1. Definimos una abstracción (interface)
interface DIP_DatabaseInterface {
    public function connect();
}

// 2. Implementaciones específicas (detalles)
class DIP_MySQLDatabase implements DIP_DatabaseInterface {
    public function connect() {
        return "Conexión a MySQL establecida.";
    }
}

class DIP_PostgreSQLDatabase implements DIP_DatabaseInterface {
    public function connect() {
        return "Conexión a PostgreSQL establecida.";
    }
}

// 3. Módulo de alto nivel que depende de la abstracción
class DIP_UserService {
    private $db;

    // Inyección de dependencia
    public function __construct(DIP_DatabaseInterface $db) {
        $this->db = $db;
    }

    public function getUser() {
        return $this->db->connect();
    }
}

// Uso
echo PHP_EOL. "SI cumple DIP (Principio de Inversión de Dependencias): ". PHP_EOL; 

$mysqlDatabase = new DIP_MySQLDatabase();
$userService = new DIP_UserService($mysqlDatabase);
echo $userService->getUser(). PHP_EOL; // Salida: Conexión a MySQL establecida.

$postgreDatabase = new DIP_PostgreSQLDatabase();
$userService = new DIP_UserService($postgreDatabase);
echo $userService->getUser(). PHP_EOL; // Salida: Conexión a PostgreSQL establecida.

