<?php 

class CreditCardExpiration 
{
  public $month;
  public $year;

  public function __construct($month, $year)
  {
    $this->month = $month;
    $this->year = $year;
  }
}