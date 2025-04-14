<?php 
declare (strict_types=1);
namespace Ejemplos\TemplateMethod;

use Ejemplos\TemplateMethod\FatherClass;


class ChildClass extends FatherClass{

    protected $name;
    
    public function __construct()
    {
        parent::__construct(); // llama al constructor de la clase padre

        $this->name = "I am your Child!"; // sobreescribe la propiedad name del padre
    }	
    
    protected function processOne():void
    {
        echo "Process One: ". $this->name . PHP_EOL;
    }

    protected function processTwo():void
    {
        echo "Process Two: ". $this->name . PHP_EOL;
    }

    protected function processThree():void
    {
        echo "Process Three: ". $this->name . PHP_EOL;
    }


}
