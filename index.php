<?php

class Shop{
protected  $categorie = [];

public function getCategorie(): array
  {
    return $this->categorie;
  }

  public function setCategorie(string ...$categorie): void
  {

    $this->categorie = [...$this->categorie, ...$categorie];
  }

}
// PROVA CLASSE SHOP
$product1= new Shop();
var_dump($product1->getCategorie());
class Product extends Shop {
    private string $name = '';
    private string $type = '';
    private string $color = '';
    private string $price = '';
    private string $Vote = '';
    private string $eco_friendly = '';

    public function __construct($name,$type,$color,$price,$Vote,$eco_friendly)
    {
        
    }





}




