<?php

class alien{ 
function __construct($name ,$tech){
    $this->name = $name;
    $this->tech = $tech;
    echo $this->name;
    echo $this->tech;
    $this->work();
}
    public function work(){
        echo " Driving through the curves :)";
    }
}

$alien1 = new alien("Giri |"," cybersecurity |");
$alien2 = new alien("Ram |"," cybersec |");




?>