<?php 
declare(strict_types=1);

// receiver: el Menu

namespace Ejemplos\Command\menu;

use function var_dump;


class Menu {

    public function option1(){
        var_dump("Click en option1");
    }

    public function option2(){
        var_dump("Click en option2");

    }

    public function option3(){
        var_dump("click en option3");
    }

}
