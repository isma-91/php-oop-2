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

    public function setYear($year)
  {

    if (is_integer($year) && $year > 0) 
      {
				$this->year = $year;
			}

    return $this;
  }

  public function getYear()
  {
    return $this->year;
  }

  public function setMonth($month)
  {
    if (is_integer($month) && $month > 0) 
      {
				$this->month = $month;
      }

    return $this;
  }
  
  public function getMonth()
  {
    return $this->month;
  }
}



