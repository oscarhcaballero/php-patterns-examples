<?php


require "../../../vendor/autoload.php";


// uses
use Ejemplos\FactoryMethod\conexionBD\CreadorConexionMySQL;
use Ejemplos\FactoryMethod\conexionBD\CreadorConexionPostgres;



// código del cliente
$creadorMySQL  = new CreadorConexionMySQL();
$conn = $creadorMySQL->crearConexion();
$conn->conectar();

//usando el método del creador...
$creadorMySQL->gestionarConexion();

//---------------------------------


// Crear conexión PostgreSQL
$creadorPostgres = new CreadorConexionPostgres();
$creadorPostgres->gestionarConexion();


