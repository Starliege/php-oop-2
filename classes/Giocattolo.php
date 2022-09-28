<?php
include_once __DIR__ . '/Prodotto.php';
include_once __DIR__ . '/Materiale.php';

class Giocattolo extends Prodotto
{
    public $brand;
    public $description;
    use Material;

    public function __construct(string $prodName, int $prodId, float $prodPrice, string $prodCat, string $brand, string $description, string $material)
    {
        parent::__construct($prodName, $prodId, $prodPrice, $prodCat);
        $this->brand = $brand;
        $this->description = $description;
        $this->material = $material;
    }
}
