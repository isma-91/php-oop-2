<?php 

class Kennel extends Product 
{

  public $materials;
  public $sizes;

  public function __construct($name, $description, $price, $materials, $sizes)
  {
    $this->name = $name;
    $this->description = $description;
    $this->price = $price;
    $this->materials = $materials;
    $this->sizes = $sizes;
  }

}