<?php

class Gioco extends Prodotto
{
    public $materiale;


    public function __construct($materiale, $nome, $prezzo, $immagine, Categoria $categoria)
    {
        $this->materiale = $materiale;

        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
    }
}
