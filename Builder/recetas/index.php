<?php

declare(strict_types=1);

namespace Ejemplos\Builder\recetas;

require __DIR__ . "/../../../vendor/autoload.php";


// Título de la receta, Ingredientes e Instrucciones
    $titulo = "Pastel de coco";

    $ingredientes = [
        "1 taza de harina integral",
        "1/2 taza de azúcar morena",
        "2 huevos",
        "1/2 taza de leche de almendra",
        "1/4 taza de aceite de coco"
    ];

    $instrucciones = [
        "Precalentar el horno a 175°C.",
        "Mezclar la harina integral y el azúcar morena.",
        "Agregar los huevos y la leche de almendra.",
        "Incorporar el aceite de coco y mezclar bien.",
        "Verter la mezcla en un molde para pasteles y hornear por 25-30 minutos."
    ];

// Creamos un builder concreto (la implementación de la interfaz) para inyectarlo al Director
$builder = new RecetaPastelBuilder();

// Creamos el "director de orquesta" inyectando una implementación de la interfaz
$director = new Director($builder);

// Cargamos los datos a la receta
// esto es como si tuvieramos una plantilla de la receta y la rellenaramos con los datos concretos 
$director->elaborarReceta($titulo, $ingredientes, $instrucciones);

// El Director se encarga rellenar la plantilla de la receta con los datos concretos
// es el que se encarga de los detalles previos a la contrucción del producto

// Construimos el producto final desde la implementación concreta de la interfaz
$miPastel = $builder->build(); //build()
$miPastel->mostrarReceta();






/*
 Podríamos tener otra implementación de RecetaBuilder
 cambiar el builder desde el Director
 y crear otra receta
*/

// Título de la receta, Ingredientes e Instrucciones
    $titulo = "Tortilla de patata";

    $ingredientes = [
        "2 patatas",
        "1 cebolla",
        "6 huevos",
        "sal",
        "aceite de oliva"
    ];

    $instrucciones = [
        "pelar y cortar las patatas",
        "freir las patatas en una sartén con el aceite de oliva",
        "añadir la cebolla y freir junto con las patatas",
        "batir los huevos en un bol grande, y añadir las patatas y la cebolla fritas",
        "Verter la mezcla en la sartén con n poco de aceite de oliva",
        "en 5 minutos aprox. estará listo un lado",
        "darle la vuelta y cocinar durante otros 5 minutos.",
        "emplatar la tortilla"
    ];

// como ya tenemos creado el director, no tenemos que volver a hacer  $director = new Director(implementación de la interfaz);
$builder = new RecetaTortillaBuilder(); // creamos el objeto de la receta, la plantilla a rellenar
$director->setBuilder($builder); // establecemos la nueva receta que vamos a hacer, una tortilla de patatas
$director->elaborarReceta($titulo, $ingredientes, $instrucciones); // cargamos los parámetros de la receta, rellenamos la plantilla

$miTortilla = $builder->build(); // build()   le mandamos a la implemetnación que realice la receta
$miTortilla->mostrarReceta();

