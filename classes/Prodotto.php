<?php

class Prodotto
{
    public $prodName;
    public $prodId;
    public $prodPrice;
    public $prodCat;


    function __construct(string $prodName, int $prodId, float $prodPrice, string $prodCat)

    {
        $this->prodName = $prodName;
        $this->prodId = $prodId;
        $this->prodPrice = $prodPrice;
        $this->prodCat = $prodCat;
    }

    public function getProdName()
    {
        return $this->prodName;
    }   
}