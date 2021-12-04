<?php

class Fruit {
  public $name;
  public $color;
  
  
  function test($name){
    $this->name = $name;
    echo $this->name;
  }

  function __construct($name) {
    $this->name = $name;
    echo $this->name;
  }

  function __destruct() {
    echo "The fruit is {$this->name}.";
  }

  function test1($name){
    $this->name = $name;
    echo $this->name;
  }

}
$apple = new Fruit("Apple");
$apple->test("Giri");
$apple->test1("Ram");

?>