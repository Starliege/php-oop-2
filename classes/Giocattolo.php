<?php
include_once __DIR__ . '/Prodotto.php';

class Giocattolo extends Prodotto
{
    public $brand;
    public $description;
    public $material;

    public function __construct(string $prodName, int $prodId, float $prodPrice, string $prodCat, string $brand, string $description, string $material)
    {
        parent::__construct($prodName, $prodId, $prodPrice, $prodCat);
        $this->brand = $brand;
        $this->description = $description;
        $this->material = $material;
    }
}
