<?php


class Casa extends Prodotto
{
    public $dimensioni;


    public function __construct($nome, $prezzo, $immagine, Categoria $categoria, $dimensioni)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;

        $this->dimensioni = $dimensioni;
    }
}
