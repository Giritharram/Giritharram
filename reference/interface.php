<?php

interface Animal{
    function sound();
}

class cat implements Animal{
    function sound(){
        echo "meow \n";
    }
}

class dog implements Animal{
    function sound(){
        echo "barks \n";
    }
} 

class mouse implements Animal{
    function sound(){
        echo "squeak";
    }
}

$cat = new cat();
$dog = new dog();
$mouse = new mouse();

$animals = array($cat, $dog ,$mouse);

foreach($animals as $animal){
    $animal->sound();
}

?>