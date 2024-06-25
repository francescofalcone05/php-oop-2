<?php


class Casa
{
    public $prodotto;
    public $dimensioni;


    public function __construct(Prodotto $prodotto, $dimensioni)
    {
        $this->prodotto = $prodotto;
        $this->dimensioni = $dimensioni;
    }
}
