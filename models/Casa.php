<?php

class Casa
{
    public $prodotto;
    public $larghezza;
    public $lunghezza;

    public function __construct(Prodotto $prodotto, $larghezza, $lunghezza)
    {
        $this->prodotto = $prodotto;
        $this->larghezza = $larghezza;
        $this->lunghezza = $lunghezza;
    }

    public function getLarghezza()
    {
        return 'cm' . $this->larghezza;
    }

    public function getLunghezza()
    {
        return 'cm' . $this->lunghezza;
    }
}
