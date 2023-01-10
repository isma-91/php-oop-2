<?php

class User {

  private $name;
  private $last_name;
  private $credit_card;

  public function __construct($name, $last_name,$credit_card)
  {
    $this->name = $name;
    $this->last_name = $last_name;
    $this->credit_card = $credit_card;
  }
}