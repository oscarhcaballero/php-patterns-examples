<?php
declare (strict_types=1);

namespace Ejemplos\TemplateMethod;


/**
 * Implementaremos el patrón Template Method
 * Esta clase es abstracta y define la estructura y los métodos comunes  
 * La clase hija (ChildClass) implementa los métodos específicos  
 * 
 * El método templateMethod define el flujo de trabajo
 * 
 */
abstract class FatherClass {

    protected $name;  
    
    public function __construct()
    {
        $this->name = "I am your Father!"; 
    }	

    /** 
     * Este es el Template Method (método plantilla) que define el flujo de trabajo
     */
    public function templateMethod():void {
        
        $this->commonMethod();

        $this->processOne();   
        $this->processTwo(); 
        $this->processThree();

    }


    /**
     * Este método es común a todas las clases hijas
     * Se puede usar en el flujo de trabajo del Template Method
     */
    protected function commonMethod():void
    {
        echo "Common Method.". PHP_EOL;
    }
    
    
    /**
     * Los métodos abstractos son los que las clases hijas deben implementar
     * Cada clase hija implementará estos métodos de forma diferente
     */
    abstract protected function processOne():void;
    abstract protected function processTwo():void;
    abstract protected function processThree():void;


}