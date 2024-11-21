<?php
    declare (strict_types=1);

    namespace Ejemplos\Facade\boda;

    require __DIR__ . '/../../../vendor/autoload.php';
    
    // cliente 

    $invitaciones = new Invitaciones();
    $ceremonia = new Ceremonia();
    $banquete = new Banquete();
    
    
    // SIN USAR FACADE
    // usamos las clases Invitaciones, Ceremonia, Banquete 
    // así que debemos tener conocimiento absoluto de lo que hacen todas ellas
    // y saber el orden y los métodos a los que accedemos 
        
        echo "SIN USAR FACADE \n";
        echo $invitaciones->gestionarInvitaciones();
        echo $ceremonia->gestionarCeremonia();
        echo $banquete->gestionarBanquete();


    
    // cliente 
    // USANDO FACADE
    // sólo necesitamos conocer la interfaz de la Fachada, y ella se encarga de todo lo demás
    
        echo "USANDO FACADE \n";
        $facade = new Facade($invitaciones, $ceremonia, $banquete);
        
        echo $facade->planificarBoda();
    


