<?php
    // Define a class
    class User {
        // Properties (attributes)
        public $name;
        // Methods (functions)
        public function sayHello(){
          return $this->name .' says hello!';
        }
    }

    // Instantiate a user object from the user class

    $user1 = new User();

    $user1->name = 'Robert';
    echo $user1->name;
    echo '<br>';
    echo $user1->sayHello();

    echo '<br>';
    echo '<br>';

    $user2 = new User();
    
    $user2->name = 'Susan';
    echo $user2->name;
    echo '<br>';
    echo $user2->sayHello();

?>