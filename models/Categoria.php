<?php



class Categoria
{
    public $animale;
    public $iconaCategoria;

    public function __construct($animale)
    {
        $this->animale = $animale;
    }

    public function getIcone()
    {
        if ($this->animale == 'cane') {

            $this->iconaCategoria = "./img/icona-cane.jpeg";
            return $this->iconaCategoria;
        } else {

            $this->iconaCategoria = "./img/icona-gatto.webp";
            return $this->iconaCategoria;
        };
    }
}
