<?php
  class User {
    protected $name;
    protected $age;

    public function __construct($name, $age){
      $this->name = $name;
      $this->age = $age;
    }
  }

  class Customer extends User {
    private $balance;

    public function __construct($name, $age, $balance){
      parent::__construct($name, $age);
      $this->balance = $balance;
    }

    public function pay($amount){
      return $this->name . ' paid $' . $amount;
    }

    public function getBalance(){
      return $this->name . "'s balance is $" . $this->balance;
    }
  }

  $customer1 = new Customer('Robert', 32, 500);

  echo $customer1->pay(100);
  echo '<br>';
  echo $customer1->getBalance();
?>