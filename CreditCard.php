<?php
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
    $this->expiration_date = 
    $now_date = date("m/y");
    if ($this->expiration_date < $now_date)
    {
        echo "La carta di credito è scaduta";
    }
    else
    { 
        echo "La carta di credito non è scaduta";
    }
  }
}


