<?php

class Cibo
{
    public $prodotto;
    public $peso;

    public function __construct(Prodotto $prodotto, $peso)
    {
        $this->prodotto = $prodotto;
        $this->peso = $peso;
    }
}
