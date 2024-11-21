<?php
    declare (strict_types=1);

    namespace Ejemplos\Facade\boda;

    // interfaz de alto nivel que trata con los subsistemas complejos
    class Facade {

        public function __construct(private Invitaciones $invitaciones, 
                                    private Ceremonia $ceremonia, 
                                    private Banquete $banquete) { 
                // hemos promocionado las propiedades en el constructor
                // forma molona de definir las propiedades privadas de la clase
        }

        // este método trata con los subsistemas haciéndolos transparentes para el cliente
        // El cliente sólo necesita conocer al método planificaBoda()
        public function planificarBoda(){
            //aqúi va la lógica de negocio pesada
            $resultado = "";
            $resultado .= $this->invitaciones->gestionarInvitaciones();
            $resultado .= $this->ceremonia->gestionarCeremonia();
            $resultado .= $this->banquete->gestionarBanquete();

            return $resultado;

        }

    }