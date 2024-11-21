<?php
declare (strict_types=1);

namespace Ejemplos\Command\menu;

//comando, implementa la interfaz, tendremos un comando por cada opción nueva en el menú 

class Option2Command implements Command {

    public function __construct(private Menu $menu){

    }

    public function execute():void {
        $this->menu->option2();
    }

}