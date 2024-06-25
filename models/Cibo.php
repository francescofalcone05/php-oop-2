<?php

class Cibo extends Prodotto
{
    public $peso;


    public function __construct($peso, $nome, $prezzo, $immagine, Categoria $categoria)
    {
        $this->peso = $peso;

        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
    }

    public function getKg()
    {
        return $this->peso . 'Kg';
    }
}
