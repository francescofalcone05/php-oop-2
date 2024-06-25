<?php

class Cibo
{
    public $peso;
    public $prodotto;

    public function __construct($peso, Prodotto $prodotto)
    {
        $this->peso = $peso;
        $this->prodotto = $prodotto;
    }

    public function getKg()
    {
        return $this->peso . 'Kg';
    }
}
