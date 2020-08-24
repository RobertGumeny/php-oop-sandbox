<?php
  class User {
    public $name;
    public $age;

    // Runs when an object is instantiated
    public function __construct($name, $age){
      echo 'Class ' . __CLASS__ . ' instantiated<br>';
      $this->name = $name;
      $this->age = $age;
    }

    public function sayHello() {
      return $this->name . ' says Hello!';
    }

    // Called when no other references to a certain object 
    // Used for cleanup/closing DB connections etc
    public function __destruct(){

    }
  }

  $user1 = new User('Robert', 32);
  $user2 = new User('Susan', 37);

  echo $user1->name . ' is ' . $user1->age . ' years old.';
  echo '<br>';
  echo $user2->name . ' is ' . $user1->age . ' years old.';
  echo '<br>';
  echo $user1->sayHello();
  echo '<br>';
  echo $user2->sayHello();
  echo '<br>';

?>