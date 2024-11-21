<?php
declare(strict_types=1);

namespace Ejemplos\Builder\moviles;

class AppleBuilder implements MovilBuilder
{

    private string $nombre = "";
    private string $chip = "";
    private string $carcasa = "";
    private string $pantalla = "";


    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;
        return $this;

    }
    public function setChip(string $chip): self
    {
        $this->chip = $chip;
        return $this;
    }
    public function setCarcasa(string $carcasa): self
    {
        $this->carcasa = $carcasa;
        return $this;
    }
    public function setPantalla(string $pantalla): self
    {
        $this->pantalla = $pantalla;
        return $this;
    }

    public function build(): Movil
    {
        return new Movil(   
            $this->nombre,
            $this->chip,
            $this->carcasa,
            $this->pantalla
            );
    }

}