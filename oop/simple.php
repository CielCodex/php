<?php
  //Define a class called "Person"
  class Person {
    //Define properties (or attributes) of the class
    public $name;
    public $age;

    //Define a method (or function) of the class
    public function sayHello(){
        echo "Hello, my name is " . $this->name . " and I am " . $this->age . " years old";  
    }
  }  

  //Create an instance (or object) of the class
  $person1 = new Person();

  //Set the properties of the object
  $person1->name = "John";
  $person1->age = 40;

  //Call the method of the object
  $person1->sayHello();
?>