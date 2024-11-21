<?php
declare(strict_types=1);

namespace Ejemplos\Builder\moviles;

interface MovilBuilder
{

    public function setNombre(string $nombre): self;
    public function setChip(string $chip): self;
    public function setCarcasa(string $carcasa): self;
    public function setPantalla(string $pantalla): self;

    public function build(): Movil;

}