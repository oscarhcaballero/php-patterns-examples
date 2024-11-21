<?php
declare(strict_types=1);
namespace Ejemplos\Prototype\clonador;


abstract class BookPrototype
{
    protected string $title;
    protected string $category;


    // como es abstracto, este método debe ser implementado en las clases que extiendan a esta
    abstract public function __clone(); 

    // sin embargo los métodos final no pueden ser redefinidos, son las implementaciones finales
    final public function getTitle(): string
    {
        return $this->title;
    }
    final public function getCategory(): string
    {
        return $this->category;
    }

    final public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    final public function setCategory(string $category): void
    {
        $this->category = $category;
    }
       

}