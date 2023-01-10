<?php

// include __DIR__ . '/CreditCardExpiration.php';

class CreditCard
{
	private $number;
	private $cvc;
	private $expiration_date;

	public function __construct($number, $cvc, $expiration_date)
	{
		$this->number = $number;
		$this->cvc = $cvc;
		$this->expiration_date = $expiration_date;
	}

  public function is_valid()
  {
    // $this->expiration_date->year
    $now_month = intval(date("m"));
    $now_year = intval(date("Y"));
    if ($this->expiration_date->year > $now_year)
    {
        echo "La carta di credito NON è scaduta";
    }
    elseif ($this->expiration_date->year < $now_year)
    {
        echo "La carta di credito È scaduta";
    }
    elseif  ($this->expiration_date->month < $now_month)
    {
        echo "La carta di credito È scaduta";
    }
    else
    { 
        echo "La carta di credito NON è scaduta";
    }
    // var_dump($now_month);
    // var_dump($now_year);
  }
}

// $exp = new CreditCardExpiration (10, 2022);
// $sfag = new CreditCard('112345675', '333', $exp);
// $sfag->is_valid();



