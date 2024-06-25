<?php

class Gioco
{
    public $materiale;
    public $prodotto;

    public function __construct($materiale, Prodotto $prodotto)
    {
        $this->materiale = $materiale;
        $this->prodotto = $prodotto;
    }
}
