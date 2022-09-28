<?php
include_once __DIR__ . '/Prodotto.php';

class Cibo extends Prodotto
{
    public $brand;
    public $description;
    public $weight;
    public $expireDate;

    public function __construct(string $prodName, int $prodId, float $prodPrice, string $prodCat, string $brand, string $description, int $weight, int $expireDate)
    {
        parent::__construct($prodName, $prodId, $prodPrice, $prodCat);
        $this->brand = $brand;
        $this->description = $description;
        $this->weight = $weight;
        $this->setExpireDate($expireDate);
    }

    public function setExpireDate($expireDate){
        if($expireDate >= date("Y")){
            $this->expireDate = $expireDate;
        } else {
            throw new Exception('ERRORE: prodotto scaduto in data:' . " " . $expireDate);
        }
    }
}
