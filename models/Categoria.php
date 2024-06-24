<?php

class Categoria
{
    public $animale;
    public $iconaCategoria;
    public $categoria;

    public function __construct($animale, $iconaCategoria, $categoria)
    {
        $this->animale = $animale;
        $this->iconaCategoria = $iconaCategoria;
        $this->categoria = $categoria;
    }

    public function getIcone()
    {
        if ($this->animale == 'cane') {

            $this->iconaCategoria = "./img/icona-cane.jpeg";
        } else {

            $this->iconaCategoria = "./img/icona-gatto.webp";
        };
    }
}
