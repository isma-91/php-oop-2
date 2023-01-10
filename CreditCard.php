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

  public function is_valid($expiration_date, $now_date)
  {
    if ($expiration_date < $now_date)
    {
        echo "La carta di credito è scaduta";
      else 
        echo "La carta di credito non è scaduta";
    }
  }
}


