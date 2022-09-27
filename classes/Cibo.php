<?php
include_once __DIR__ . '/Prodotto.php';

class Cibo extends Prodotto
{
    public $brand;
    public $description;
    public $weight;

    public function __construct(string $prodName, int $prodId, float $prodPrice, string $prodCat, string $brand, string $description, string $weight)
    {
        parent::__construct($prodName, $prodId, $prodPrice, $prodCat);
        $this->brand = $brand;
        $this->description = $description;
        $this->weight = $weight;
    }
}
