<?php 

class Food extends Product 
{

  public $ingredients = [];

  public function __construct($name, $description, $price, $ingredients)
  {
    $this->name = $name;
    $this->description = $description;
    $this->price = $price;
    $this->ingredients = $ingredients;
  }




  public function getIngredients()
    {
      if ($this->ingredients && count($this->ingredients)) {
        return implode(", ", $this->ingredients);
      }
    }

}