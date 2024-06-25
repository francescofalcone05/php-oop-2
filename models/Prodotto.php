<?php


class Prodotto
{

    public $nome;
    public $prezzo;
    public $categoria;
    public $immagine;


    public function __construct($nome, $prezzo, $immagine, Categoria $categoria)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
    }

    public function getImg()
    {
        $percorso = $this->immagine;
        return $percorso;
    }


    public function getPrice()
    {
        return '€' . ' ' . $this->prezzo;
    }
}
