<?php

//private access modifiers for a function


class Test
{
    private function bar()
    {
        echo 'Accessed the private method.';
    }

    public function baz(Test $other)
    {
        // We can change the private property:
        $other->foo = 'hello   ';
        echo $other->foo;

        // We can also call the private method:
        $other->bar();
    }
}

$test = new Test();

$test->baz(new Test());



                            echo"_________________________________________";

//protected access modifiers for a function
/*
class Math {
protected $a = 30;
protected $b = 10;
function division()
{
echo $div=$this->a/$this->b;
echo "\n";
}
protected function multiply()
{
echo $mul=$this->a*$this->b;
echo "\n";
}
}

class addn extends Math {

function addition()
{
echo $addition=$this->a+$this->b;
}


function get_multi(){
    $this->multiply();
}
}

$obj= new addn;
$obj->division();
$obj->addition();
$obj->get_multi();
*/
?>

