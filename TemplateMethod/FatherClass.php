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
         
        $this->processOne();   
        $this->processTwo(); 
        $this->processThree();

    }


    abstract protected function processOne():void;
    abstract protected function processTwo():void;
    abstract protected function processThree():void;


}